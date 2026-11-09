 <?php


class EquipesController extends Controller
{   

    /**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Equipe');

        $conditions = array('online !' => -1);

        $d['equipes'] = $this->Equipe->find(array(
			'fields' =>  'id, lastname, firstname, phone, content, file_thumbs, online',
            'conditions' =>  $conditions,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Equipe->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function admin_edit($id = null){

        $this->loadModel('Equipe');

        if($id === null){

            $equipe= $this->Equipe->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($equipe)){

                $id = $equipe->id;

            }else{

            $this->Equipe->save(array(

                'online' => -1

            ));

            $id = $this->Equipe->id;

            } 

        }

        $d['id'] = $id; 

        $conditions = array('id' => $id);

        $d['fichier'] = $this->Equipe->findFirst(array(
			'fields' =>  'file',
            'conditions' =>  $conditions
        ));
		
		if($this->request->data){
            
            if($this->Equipe->validates($this->request->data)){
                
                if($d['fichier']->file === '' || $_FILES['file']['name'] != $d['fichier']->file){

                    if($_FILES['file']['name'] != ''){

                            //debug($this->request->data);
                        //Uploader un fichier sur le serveur
                        $upload = new UploadFile();                 //Instanciation
                        $upload->setPostFile("file");               //Nom du INPUT FILE (name)
                        $upload->setType("jpg/jpeg/png/gif");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
                        $upload->setPath("img/equipes");                    //Chemin d'upload - les retours avec "../" sont acceptes
                        $upload->upload();

                        $image = $_FILES['file']['name'];

                        //Crée les thumbnails
                        
                        $Img=new create_thumbnail("img/equipes/{$image}");
                        $Img->resize("img/equipes/thumbs/thumb_{$image}",150,90,0);//Si vous vouler conserver les proportions, le dernier
                        
                        $imageThumb = "thumb_{$image}";


                        $this->request->data->file = $image;

                        $this->request->data->file_thumbs = $imageThumb;

                        $msg = $upload->getErrorUpload();

                    }

                }else{


                    $msg = 'L\'enregistrement éffectué avec succès' ;
                }

                $this->request->data->created = date('Y-m-d H:i:s');

                $this->Equipe->save($this->request->data);

                $this->Session->setFlash($msg);

               $this->redirect('admin/equipes/index');

            }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

            }

		}else{

                    $this->request->data = $this->Equipe->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);


    }



    function admin_delete($id){

        $this->loadModel('Equipe');

        $image = $this->Equipe->findFirst(array('conditions' => array('id' => $id)));

        unlink(WEBROOT.DS.'img/equipes'.DS.$image->file);

        unlink(WEBROOT.DS.'img/equipes/thumbs'.DS.$image->file_thumbs);

        $this->Slideshow->delete($id);

        $this->Session->setFlash('L\'image a bien été supprimée');

        $this->redirect('admin/equipes/index/'.$image->id);
        
    }


    function listEquipe(){

        $this->loadModel('Equipe');

        $conditions = array('online ' => 1);

        return $this->Equipe->find(array(
            'conditions' =>  $conditions
        ));

    }

}