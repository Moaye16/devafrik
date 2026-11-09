 <?php


class PhotosController extends Controller
{   

    /**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Photo');

        $this->loadModel('Album');

        $this->loadModel('Menu');

        //Récuperation des albums
        $conditionAlbum = array('onlineAlbum !' => -1);

        $d['albums'] = $this->Album->find(array(
            'field'  =>  'id, nameAlbum, onlineAlbum, createdAlbum',
            'conditions' => $conditionAlbum
        ));


        //Récuperation des pages
        $conditionPage = array('onlineMenu !' => -1);

        $d['pages'] = $this->Menu->find(array(
            'field'  =>  'id, nameMenu',
            'conditions' => $conditionPage
        ));


        //Affiche les albums sur plusieurs pages
        $d['albumsAffiche'] = $this->Album->find(array(
            'field'  =>  'id, nameAlbum, onlineAlbum, createdAlbum',
            'conditions' => $conditionAlbum,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['totalAlbum'] = $this->Album->findCount($conditionAlbum);

        $d['pageAlbum'] = ceil($d['totalAlbum'] / $perPage);




        $conditions = array('onlinePhotos !' => -1);

        $d['photos'] = $this->Photo->find(array(
			'fields' =>  'id, namePhotos, contentPhotos, filePhotos, file_thumbsPhotos, page_id, album_ID, datePhotos, onlinePhotos',
            'conditions' =>  $conditions,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Photo->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function admin_edit($id = null){

        $this->loadModel('Photo');

        $this->loadModel('ALbum');

        $this->loadModel('Menu');

        $d['pages'] = $this->Menu->find(array('fields' =>  'id, nameMenu'));

        //Récuperation des pages
        $conditionAlbum = array('onlineAlbum !' => -1);

        $d['albums'] = $this->ALbum->find(array(
            'field'  =>  'id, nameAlbum',
            'conditions' => $conditionAlbum,
        ));

        if($id === null){

            $photo = $this->Photo->findFirst(array(

                'conditions' => array('onlinePhotos' => -1)

            ));

            if(!empty($photo)){

                $id = $photo->id;

            }else{

            $this->Photo->save(array(

                'onlinePhotos' => -1

            ));

            $id = $this->Photo->id;

            } 

        }

        $d['id'] = $id;

        $conditions = array('id' => $id);

        $d['photo'] = $this->Photo->findFirst(array(
			'fields' =>  'filePhotos',
            'conditions' =>  $conditions
        ));

        if($this->request->data){
            
            if($this->Photo->validates($this->request->data)){
                
                if($d['photo']->filePhotos === '' || $_FILES['filePhotos']['name'] != $d['photo']->filePhotos){

                    if($_FILES['filePhotos']['name'] != ''){

                        $repertoire = "img/galerie/".date_format(date_create($this->request->data->datePhotos),'Y');

                        $upload = new UploadFile();                 //Instanciation
                        $upload->setPostFile("filePhotos");               //Nom du INPUT FILE (name)
                        $upload->setType("jpg/jpeg/png/gif");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
                        $upload->setPath($repertoire);                    //Chemin d'upload - les retours avec "../" sont acceptes
                        $upload->upload();

                        //Création du dossier des différents dossiers
                        $dossier = new CreateDir();

                        $dossier->crea_rep('thumbs', $repertoire);

                        $image = $_FILES['filePhotos']['name'];

                        //Crée les thumbnails
                        $Img=new create_thumbnail($repertoire.DS.$image);
                        $Img->resize($repertoire.DS.'thumbs'.DS.'thumb_'.$image,150,90,0);//Si vous vouler conserver les proportions, le dernier
                        
                        $imageThumb = "thumb_{$image}";
    
                        $this->request->data->filePhotos = $image;
    
                        $this->request->data->file_thumbsPhotos = $imageThumb;
    
                        $msg = $upload->getErrorUpload();

                    }

                }else{


                    $msg = 'L\'enregistrement éffectué avec succès' ;
                }

                $this->request->data->createdPhotos = date('Y-m-d H:i:s');

                $this->Photo->save($this->request->data);

                $this->Session->setFlash($msg);

                $this->redirect('admin/photos/index');

            }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

            }

		}else{

            $this->request->data = $this->Photo->findFirst(array(
                'conditions' => array('id' => $id)
            ));
        }

        $this->set($d);

    }



    function admin_delete($id){

        $this->loadModel('Photo');

        $image = $this->Photo->findFirst(array(

            'conditions' => array('id' => $id)
        ));

        unlink(WEBROOT.DS.'img/galerie/'.date_format(date_create($image->datePhotos),'Y').DS.$image->filePhotos);

        unlink(WEBROOT.DS.'img/galerie/'.date_format(date_create($image->datePhotos),'Y').'/thumbs'.DS.$image->file_thumbsPhotos);

        $this->Photo->delete($id);

        $this->Session->setFlash('La photo a bien été supprimée');

        $this->redirect('admin/photos/index/'.$image->id);
        
    }


    function admin_deleteAlbum($id){
		
		$this->loadModel('Album');

        $this->loadModel('Photo');

        //Récuperation des pages
        $conditionPhotos = array('album_ID' => $id);

        $photos = $this->Photo->find(array(
            'JOIN' => 'albums a',
            'ON' => 'album_ID = a.id',
            'conditions' => $conditionPhotos
        ));

        if(!empty($photos)){
		
            $this->Session->setFlash('Impossible de supprimer cette album, car il contient des photos.');

        }else{

            $this->Album->delete($id);
            
            $this->Session->setFlash('Le contenu a bien été supprimé');

        }

		return $this->redirect('admin/photos/index/'.$id);
		
	}

}