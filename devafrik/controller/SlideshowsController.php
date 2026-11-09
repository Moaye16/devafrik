 <?php

//public $nameMenu;

class SlideshowsController extends Controller
{   

    function getSlideshow(){

        $this->loadModel('Slideshow');

        return $this->Slideshow->find(array(
            'JOIN' => 'menus',
            'ON' => 'menus.id = menu_id',
            'conditions' => array(
                'online' => 1,
                'onlineMenu' => 1,
                'nameMenu' => 'Accueils',
                )
        ));
        
    }

    function getSlideshowFirst(){
        
        global $GLOBALS;

        $this->loadModel('Slideshow');

        return $this->Slideshow->findFirst(array(
            'JOIN' => 'menus',
            'ON' => 'menus.id = menu_id',
            'conditions' => array(
                'onlineMenu' => 1,
                'nameMenu' => $GLOBALS['TitleMenu'],
                )
        ));

    }


    /**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Slideshow');

        $d['menus'] = $this->request('Menus', 'getMenu');

        $conditions = array('online !' => -1);

        $d['images'] = $this->Slideshow->find(array(
			'fields' =>  'id, name, content, file, file_thumbs, menu_id, online',
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage,
            'conditions' => $conditions
        ));

        $d['total'] = $this->Slideshow->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function admin_edit($id = null){

        $this->loadModel('Slideshow');

        $d['menus'] = $this->request('Menus', 'getMenu');

        if($id === null){

            $slideshow = $this->Slideshow->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($slideshow)){

                $id = $slideshow->id;

            }else{

            $this->Slideshow->save(array(

                'online' => -1

            ));

            $id = $this->Slideshow->id;

            } 

        }

        $d['id'] = $id; 

        $conditions = array('id' => $id);

        $d['slideshows'] = $this->Slideshow->findFirst(array(
			'fields' =>  'file',
            'conditions' =>  $conditions
        ));

        if($this->request->data){

            if($this->Slideshow->validates($this->request->data)){
                
                if($d['slideshows']->file === '' || $_FILES['file']['name'] != $d['slideshows']->file){

                    if($_FILES['file']['name'] != ''){
                        
                        //Uploader un fichier sur le serveur
                        $upload = new UploadFile();                 //Instanciation
                        $upload->setPoidMax(40);
                        $upload->setPostFile("file");               //Nom du INPUT FILE (name)
                        $upload->setType("png/jpg/jpeg/gif");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
                        $upload->setPath("img/slideshow");                    //Chemin d'upload - les retours avec "../" sont acceptes
                        $upload->upload();

                        $image = $_FILES['file']['name'];

                        //Crée les thumbnails
                        
                        $Img=new create_thumbnail("img/slideshow/{$image}");
                        $Img->resize("img/slideshow/thumbs/thumb_{$image}",150,90,0);//Si vous vouler conserver les proportions, le dernier
                        
                        $imageThumb = "thumb_{$image}";

                        $this->request->data->file = $image;

                        $this->request->data->file_thumbs = $imageThumb;

                        $msg = $upload->getErrorUpload();

                    }

                }else{


                    $msg = 'L\'enregistrement éffectué avec succès' ;
                }

                $this->request->data->created = date('Y-m-d H:i:s');

                $this->Slideshow->save($this->request->data);

                $this->Session->setFlash($msg);

                $this->redirect('admin/slideshows/index');

            }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

            }

		}else{

            $this->request->data = $this->Slideshow->findFirst(array(
                'conditions' => array('id' => $id)
                ));

            $d['page'] = $this->request->data;

        }

        $this->set($d);  

    }



    function admin_delete($id){

        $this->loadModel('Slideshow');

        $image = $this->Slideshow->findFirst(array('conditions' => array('id' => $id)));

        unlink(WEBROOT.DS.'img/slideshow'.DS.$image->file);

        unlink(WEBROOT.DS.'img/slideshow/thumbs'.DS.$image->file_thumbs);

        $this->Slideshow->delete($id);

        $this->Session->setFlash('Le média a bien été supprimé');

        $this->redirect('admin/slideshows/index/'.$image->id);
        
    }

}