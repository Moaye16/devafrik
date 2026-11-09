 <?php


class PartenairesController extends Controller
{   

    /**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Partenaire');

        $condition = array('online !' => -1);

        $d['partenaires'] = $this->Partenaire->find(array(
			'fields' => 'id, name, file, file_thumbs, siteweb, online',
            'conditions' => $condition,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Partenaire->findCount($condition);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function admin_edit($id = null){

        $this->loadModel('Partenaire');

        if($id === null){

            $partenaire = $this->Partenaire->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($partenaire)){

                $id = $partenaire->id;

            }else{

            $this->Partenaire->save(array(

                'online' => -1

            ));

            $id = $this->Partenaire->id;

            } 

        }

        $d['id'] = $id;

        $conditions = array('id' => $id);

        $d['partenaires'] = $this->Partenaire->findFirst(array(
			'fields' =>  'file',
            'conditions' =>  $conditions
        ));

        if($this->request->data){
            
            if($this->Partenaire->validates($this->request->data)){
                
                if($d['partenaires']->file === '' || $_FILES['file']['name'] != $d['partenaires']->file){

                    if($_FILES['file']['name'] != ''){

                         //Uploader un fichier sur le serveur
                        $upload = new UploadFile();                 //Instanciation
                        $upload->setPostFile("file");               //Nom du INPUT FILE (name)
                        $upload->setType("jpg/jpeg/png/gif");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
                        $upload->setPath("img/partenaires");                    //Chemin d'upload - les retours avec "../" sont acceptes
                        $upload->upload();

                        $image = $_FILES['file']['name'];

                        //Crée les thumbnails
                        
                        $Img=new create_thumbnail("img/partenaires/{$image}");
                        $Img->resize("img/partenaires/thumbs/thumb_{$image}",150,90,0);//Si vous vouler conserver les proportions, le dernier
                        
                        $imageThumb = "thumb_{$image}";
                        

                        $this->request->data->file = $image;

                        $this->request->data->file_thumbs = $imageThumb;
    
                        $msg = $upload->getErrorUpload();

                    }

                }else{


                    $msg = 'L\'enregistrement éffectué avec succès' ;
                }

                $this->request->data->created = date('Y-m-d H:i:s');

                $this->Partenaire->save($this->request->data);

                $this->Session->setFlash($msg);

                $this->redirect('admin/partenaires/index');

            }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

            }

		}else{

            $this->request->data = $this->Partenaire->findFirst(array(
                'conditions' => array('id' => $id)
            ));
        }

        $this->set($d);


    }



    function admin_delete($id){

        $this->loadModel('Partenaire');

        $image = $this->Partenaire->findFirst(array('conditions' => array('id' => $id)));

        unlink(WEBROOT.DS.'img/partenaires'.DS.$image->file);

        unlink(WEBROOT.DS.'img/partenaires/thumbs'.DS.$image->file_thumbs);

        $this->Partenaire->delete($id);

        $this->Session->setFlash('Le média a bien été supprimé');

        $this->redirect('admin/partenaires/index/'.$image->id);
        
    }

    function listPartenaire(){

        $this->loadModel('Partenaire');

        $condition = array('online ' => 1);

        return $this->Partenaire->find(array(
			'fields' => 'file',
            'conditions' => $condition
        ));

        $this->set($d);
    }

}