<?php

class CommentsController extends Controller
{   
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Comment');

        if($id === null){

            $Comments = $this->Comment->findFirst(array(

                'conditions' => array('onlineComment' => -1)

            ));

            if(!empty($Comments)){

                $id = $Comments->id;

            }else{

            $this->Comment->save(array(

                'onlineComment' => -1

            ));

            $id = $this->Comment->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Comment->validates($this->request->data)){

                    $this->request->data->created = date('Y-m-d H:i:s');
                    
                    $this->request->data->onlineComment = 0;

                    $this->request->data->post_id = $this->request-> params[0];

                    $this->Comment->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    if($this->Comment->onlineComment == 0){

                        $this->redirect("index.php/blogs/view/id:{$this->request-> params[0]}/slug:{$this->request-> params[1]}"); 

                    }else{

                        $this->redirect('admin/blogs/index');

                    }

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Comment->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}
	
		
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('Comment');
		
		$this->Comment->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/blogs/index');
		
	}


    /**
     * Verifier si c'est un nouveau commentaire ou pas
     */

     function EditComment(){

        $this->loadModel($GLOBALS['model']);

        if($GLOBALS['id'] === null){

            $Comments = $this->{$GLOBALS['model']}->findFirst(array(

                'conditions' => $GLOBALS['condition']

            ));

            if(!empty($Comments)){

                $id = $Comments->id;

            }else{

            $this->{$GLOBALS['model']}->save($GLOBALS['condition']);

            $id = $this->{$GLOBALS['model']}->id;

            } 

        }
        debug($id); die();
        return $id;
     }
	
}