<?php

class Contactez_nousController extends Controller
{

    function index(){

        $d['contact'] = $this->request('Dashboards', 'contact');
    
        if($this->request->data){  
            //debug($this->request->data);die();
            $fullname = $this->request->data->nom;
            $contact = $this->request->data->contact;
            $Email = $this->request->data->email;
            $subject = "Formulaire de contact du site Web : $fullname";
            $message = "Vous avez reçu un nouveau message du formulaire de contact de votre site Web.<br>"."Voici les détails :<p><b>Message:</b><br>".$this->request->data->message."<p>";
            $nameDest = $d['contact']->denomination;
            $mailDest = $d['contact']->email;      //$d['contacts']->email;
            $replyTo = true;
            $this->Session->setFlash(sendMail($fullname, $contact, $Email, $subject, $message, $nameDest ,$mailDest,'',$replyTo), 'alert-danger');
            
        }

        if(empty($d)){

            $this->e404('Page introuvable');

        }

        $this->set($d);
        
}
    

    function getContact(){

        $this->loadModel('Contact');

        return $this->Contact->findFirst(array(

            'conditions' => array('online' => 1)

        ));

    }
	
	/**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Contact');

        $conditions = array('online !' => -1);

        $d['contacts'] = $this->Contact->find(array(
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage,
            'conditions' => $conditions
        ));

        $d['total'] = $this->Contact->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Contact');

        if($id === null){

            $contact = $this->Contact->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($contact)){

                $id = $contact->id;

            }else{

            $this->Contact->save(array(

                'online' => -1

            ));

            $id = $this->Contact->id;

            } 

        }

        $d['id'] = $id;
        
        $conditions = array('id' => $id);

        $d['logo'] = $this->Contact->findFirst(array(
			'fields' =>  'file',
            'conditions' =>  $conditions
        ));
		
		if($this->request->data){

            if($this->Contact->validates($this->request->data)){

                if($d['logo']->file === '' || $_FILES['file']['name'] != $d['logo']->file){

                    if($_FILES['file']['name'] != ''){

                        $upload = new UploadFile();                 //Instanciation
                        $upload->setPostFile("file");               //Nom du INPUT FILE (name)
                        $upload->setType("jpg/jpeg/png/gif");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
                        $upload->setPath("img/logo");                    //Chemin d'upload - les retours avec "../" sont acceptes
                        $upload->upload();

                        $image = $_FILES['file']['name'];

                        //Crée les thumbnails
                        
                        $Img=new create_thumbnail("img/logo/{$image}");
                        $Img->resize("img/logo/thumbs/thumb_{$image}",150,90,0);//Si vous vouler conserver les proportions, le dernier
                        
                        $imageThumb = "thumb_{$image}";

                        //Crée les icones
                        $extension = substr(strrchr("img/logo/{$image}",'.'),1);    //Recuperation de l'extension 

                        /* Récupération du nom de l'image sans l'extension */
                        $nameFile = basename($_FILES['file']['name'], ".$extension");

                        $ico_image = new PHP_ICO( "img/logo/{$image}", array(array( 32, 32 )) );
                        
                        $ico_image->save_ico( "img/logo/ico/ico_{$nameFile}.ico");

                        $imageico = "ico_{$nameFile}.ico";
                        
    
                        $this->request->data->file = $image;
    
                        $this->request->data->file_thumbs = $imageThumb;

                        $this->request->data->ico_file = $imageico;


    
                        $msg = $upload->getErrorUpload();

                    }

                }else{


                    $msg = 'L\'enregistrement éffectué avec succès' ;
                }

                    $this->request->data->created = date('Y-m-d H:i:s');
                
                    $this->Contact->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('cockpit/contactez-nous/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Contact->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));

                    $d['page'] = $this->request->data;
        }

        $this->set($d);
		
	}
	
	
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('Contact');

        unlink(WEBROOT.DS.'img/logo'.DS.$image->file);

        unlink(WEBROOT.DS.'img/logo/thumbs'.DS.$image->file_thumbs);

        unlink(WEBROOT.DS.'img/logo/ico'.DS.$image->ico_file);
		
		$this->Contact->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('cockpit/contactez-nous/index');
		
	}
}