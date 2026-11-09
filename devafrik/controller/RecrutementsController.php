<?php

class RecrutementsController extends Controller
{

    function index(){

        $GLOBALS['perPage'] = 10;

        $GLOBALS['pages'] = ($this->request->page-1);

        $GLOBALS['admin'] = false;

        $d['listrecrutements'] = $this->request('Recrutements', 'listrecrutement');

        $d['total'] = $this->request('Recrutements', 'counter');
        
        $d['page'] = ceil($d['total'] / $GLOBALS['perPage']);
        
        /**
         * 
         $this->loadModel('Contact');

        $condition = array('online' => 1);

        //Mon equipe
        $d['contacts'] = $this->Contact->findFirst(array(
            'conditions' =>  $condition
        ));

        if($this->request->data){
            $mailDest = 'adje20032002@gmail.com';//$d['contacts']->email;  
            $fullname = $this->request->data->fullname;
            $contact = $this->request->data->phone;
            $Email = $this->request->data->email;
            $subject = $this->request->data->filiere.' '.$this->request->data->diplome;

            //Uploader un fichier sur le serveur
            $upload = new UploadFile();                 //Instanciation
            $upload->setPostFile("file");               //Nom du INPUT FILE (name)
            $upload->setType("docx/doc/pdf");       //Extension(s) autorisee(s) - string, separer par / les differentes extensions ex:"doc/gif/jpeg"
            $upload->setPath("img/temp");                    //Chemin d'upload - les retours avec "../" sont acceptes
            $upload->upload();

            $file = 'img/temp/'.$_FILES['file']['name'];

            $message = 'Bonjour ou Bonsoir M./Mme,<p>Vous trouverez ci-joint mon cv</p>';
            $this->Session->setFlash(sendMail($fullname, $contact, $Email, $subject, $message, 'Contact A2GC',$mailDest,$file), 'alert-danger');

            //unlink(WEBROOT.DS.'img/temp'.DS.$_FILES['file']['name']);

        }
        */

        if(empty($d)){

            $this->e404('Page introuvable');

        }

        $this->set($d);
        
}

function view($id){

    $GLOBALS['id'] = $id;

    $GLOBALS['perPage'] = 10;

    $GLOBALS['pages'] = ($this->request->page-1);

    $GLOBALS['admin'] = false;

    $d['listrecrutements'] = $this->request('Recrutements', 'listrecrutement');

    $d['total'] = $this->request('Recrutements', 'counter');
        
    $d['page'] = ceil($d['total'] / $GLOBALS['perPage']);

    $d['recrutement'] = $this->request('Recrutements', 'recrutementFirst');

    if(empty($d)){

        $this->e404('Page introuvable');

    }

    $this->set($d);

}


//Fenêtre modal permetant de postuler à l'offre 
function modal_view($id){
debug($this->request); die();
    $GLOBALS['id'] = $id;

    $d['recrutement'] = $this->request('Recrutements', 'recrutementFirst');

    if(empty($d)){

        $this->e404('Page introuvable');

    }

    $this->set($d);

}



/**
	* ADMIN
	**/
	
	function admin_index(){

        $GLOBALS['perPage'] = 10;
        
        $GLOBALS['pages'] = ($this->request->page-1);

        $GLOBALS['admin'] = true;

        $d['recrutements'] = $this->request('Recrutements', 'listrecrutement');

        $d['total'] = $this->request('Recrutements', 'counter');
        
        $d['page'] = ceil($d['total'] / $GLOBALS['perPage']);
        
        if(empty($d)){

            $this->e404('Page introuvable');

        }

        $this->set($d);
		
	}
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Recrutement');

        if($id === null){

            $recrutement = $this->Recrutement->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($recrutement)){

                $id = $recrutement->id;

            }else{

            $this->Recrutement->save(array(

                'online' => -1

            ));

            $id = $this->Recrutement->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Recrutement->validates($this->request->data)){

                    $this->request->data->created = date('Y-m-d H:i:s');

                    if($this->request->data->permanent==false){

                        $this->request->data->datepriseposte = "";

                    }

                    $this->Recrutement->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/recrutements/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Recrutement->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}
	
	
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('Recrutement');
		
		$this->Recrutement->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/articles/index');
		
	}

    function listrecrutement(){

        global $GLOBALS;

        $this->loadModel('Recrutement');

        $GLOBALS['condition'] = $this->request('Recrutements', 'condition');

        return $this->Recrutement->find(array(
            'conditions' => $GLOBALS['condition'],
            'ORDER' => 'datepublication DESC',
            'limit' =>  ($GLOBALS['perPage'] * $GLOBALS['pages']).','.$GLOBALS['perPage']
        ));

    }

    function listrecrutements(){

        global $GLOBALS;

        $this->loadModel('Recrutement');

        return $this->Recrutement->find(array(
            'conditions' => $GLOBALS['condition']
        ));

    }

    function counter(){

        $this->loadModel('Recrutement');

        $conditions = $this->request('Recrutements', 'condition');

        return $this->Recrutement->findCount($conditions);

    }

    function condition(){

        global $GLOBALS;

        return ($GLOBALS['admin'] == true) ? array('online!' => -1) : array('online' => 1);

    }

    function recrutementFirst(){

        global $GLOBALS;

        $this->loadModel('Recrutement');

        $conditions = array('online ' => 1, 'id' => $GLOBALS['id']);
        
        return $this->Recrutement->findFirst(array(
            'conditions' => $conditions
        ));

    }

    function ActiveRecrutement(){

        global $GLOBALS;

        $this->loadModel('Recrutement');

        $recrutement = $this->Recrutement->findFirst(array(

            'conditions' => array('online ' => 1, 'id' => $GLOBALS['id'])

        ));

        debug($this->request->data); die();

        /**if($this->request->data){
            
            $this->request->data->online = 1;

            $this->Recrutement->save($this->request->data);

        }*/

        /*if($this->request->data->created == DateUTC()){
            $this->request->data->online = 1;
        }*/


    }
    
	
	
}