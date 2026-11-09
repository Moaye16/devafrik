 <?php


class ImagesController extends Controller
{   

    /**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Image');

        $this->loadModel('Article');

        //Récuperation des pages
        $conditionArticle = array('onlineArticles !' => -1);

        $d['articles'] = $this->Article->find(array(
            'field'  =>  'id, nameArticles',
            'conditions' => $conditionArticle,
        ));

        $conditions = array('online !' => -1);

        $d['images'] = $this->Image->find(array(
			'fields' =>  'id, name, content, file, file_thumbs, articles_ID, online',
            'conditions' =>  $conditions,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Image->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function admin_edit($id = null){

        $this->loadModel('Article');

        $this->loadModel('Image');

        //Récuperation des pages
        $conditionArticle = array('onlineArticles !' => -1);

        $d['articles'] = $this->Article->find(array(
            'field'  =>  'id, nameArticles',
            'conditions' => $conditionArticle,
        ));

        if($id === null){

            $image = $this->Image->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($image)){

                $id = $image->id;

            }else{

            $this->Image->save(array(

                'online' => -1

            ));

            $id = $this->Image->id;

            } 

        }

        $d['id'] = $id;

        $conditions = array('id' => $id);

        $d['images'] = $this->Image->findFirst(array(
			'fields' =>  'file',
            'conditions' =>  $conditions
        ));

        if($this->request->data){
            
            if($this->Image->validates($this->request->data)){
                
                if($d['images']->file === '' || $_FILES['file']['name'] != $d['images']->file){

                    if($_FILES['file']['name'] != ''){

                        $upload = new UploadFile();                 //Instanciation
                        $upload->setPostFile("file");               //Nom du INPUT FILE (name)
                        $upload->setType("jpg/jpeg/png/gif");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
                        $upload->setPath("img");                    //Chemin d'upload - les retours avec "../" sont acceptes
                        $upload->upload();

                        $image = $_FILES['file']['name'];

                        //Crée les thumbnails
                        
                        $Img=new create_thumbnail("img/{$image}");
                        $Img->resize("img/thumbs/thumb_{$image}",150,90,0);//Si vous vouler conserver les proportions, le dernier
                        
                        $imageThumb = "thumb_{$image}";
                        
    
                        $this->request->data->file = $image;
    
                        $this->request->data->file_thumbs = $imageThumb;
    
                        $msg = $upload->getErrorUpload();

                    }

                }else{


                    $msg = 'L\'enregistrement éffectué avec succès' ;
                }

                $this->request->data->created = date('Y-m-d H:i:s');

                $this->Image->save($this->request->data);

                $this->Session->setFlash($msg);

                $this->redirect('admin/images/index');

            }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

            }

		}else{

            $this->request->data = $this->Image->findFirst(array(
                'conditions' => array('id' => $id)
            ));
        }

        $this->set($d);

    }



    function admin_delete($id){

        $this->loadModel('Image');

        $image = $this->Image->findFirst(array('conditions' => array('id' => $id)));

        unlink(WEBROOT.DS.'img'.DS.$image->file);

        unlink(WEBROOT.DS.'img/thumbs'.DS.$image->file_thumbs);

        $this->Image->delete($id);

        $this->Session->setFlash('Le média a bien été supprimé');

        $this->redirect('admin/images/index/'.$image->id);
        
    }

    function QlpimagesArticles(){

        $this->loadModel('Image');

        $conditions = array('online' => 1, 'articles_ID' => 3);

        return $this->Image->find(array(
            'conditions' =>  $conditions,
           // 'ORDER' => 'ordreArticles ASC', 
            'limit' =>  5 
        ));

    }

}