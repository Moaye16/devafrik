<?php

class PostsController extends Controller
{
		
	
	/**
	* Permet d'éditer un post
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Post');

        $d['categories'] = $this->request('Posts', 'allCategories');

        $d['pages'] = $this->Post->find();

        if($id === null){

            $post = $this->Post->findFirst(array(

                'conditions' => array('online' => -1)

            ));

            if(!empty($post)){

                $id = $post->id;

            }else{

            $this->Post->save(array(

                'online' => -1

            ));

            $id = $this->Post->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Post->validates($this->request->data)){

                    $this->request->data->createdpost = date('Y-m-d H:i:s');

                    $this->request->data->user_id = $this->Session->user('id');

                    $this->Post->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/blogs/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Post->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}

    
		
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('Post');
		
		$this->Post->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/blogs/index');
		
	}


    function allCategories(){
        /**
         * Affiche toutes les catégories en ligne
         */

        $GLOBALS['model'] = 'Postcategorie';

        $GLOBALS['ordre'] ='titlecategory ASC';

        $GLOBALS['conditions'] = array('onlinecategory ' => 1);
        
        return $this->request('Blogs', 'allModelOrder');
    }
	
	
}