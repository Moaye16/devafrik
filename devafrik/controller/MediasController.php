 <?php


class MediasController extends Controller
{   

    /**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Media');

        $condition = array('type' => 'img');

        $d['medias'] = $this->Media->find(array(
			'fields' =>  'id, name, file, category, ordre, online, type',
            'conditions' =>  $condition,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Media->findCount($condition);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function admin_edit($id = null){

        $this->loadModel('Post');

        $d['pages'] = $this->Post->find(array('conditions' => array('type' => 'page')));

        $this->loadModel('Media');

        if($id === null){

            $media = $this->Media->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($page)){

                $id = $media->id;

            }else{

            $this->Media->save(array(

                'online' => -1

            ));

            $id = $this->Media->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

                if($this->request->data && !empty($_FILES['file']['name'])){

                    if(strpos($_FILES['file']['type'], 'image') !== false){
        
                        $dir = WEBROOT.DS.'img/medias'.DS.date('Y-m');
        
                        if (!file_exists($dir)) mkdir($dir, 0777); //création du dossier s'il n'existe pas
        
                            if(move_uploaded_file($_FILES['file']['tmp_name'], $dir.DS.$_FILES['file']['name'])){
                            
                                $this->request->data->file = date('Y-m').'/'.$_FILES['file']['name'];

                                $this->request->data->type = 'img';

                                $this->Media->save($this->request->data);
                
                                $this->Session->setFlash("L'image a bien été uploadé");

                                $this->redirect('admin/medias/index');

                            }
        
                        }else{
            
                            $this->Form->errors['file'] = "Le fichier n'est pas une image";
            
                        }

                }
            }else{

                        $this->request->data = $this->Media->findFirst(array(
                            'conditions' => array('id' => $id)
                        ));

                        $d['page'] = $this->request->data;
            }

        $this->set($d);

    }



    function admin_delete($id){

        $this->loadModel('Media');

        $media = $this->Media->findFirst(array('conditions' => array('id' => $id)));

        unlink(WEBROOT.DS.'img'.DS.$media->file);

        $this->Media->delete($id);

        $this->Session->setFlash('Le média a bien été supprimé');

        $this->redirect('admin/medias/index/'.$media->posts_id);
        
    }

}