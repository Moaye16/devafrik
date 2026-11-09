<?php

class MenusController extends Controller
{

    function view($id){

            $this->loadModel('Menu');
    
            $d['menu'] = $this->Menu->findFirst(array(
                'conditions' =>  array('online' => 1, 'id' =>  $id)
            ));
    
            if(empty($d['menu'])){
    
                $this->e404('Page introuvable');
    
            }
    
            $this->set($d);
    
    }


    /*
     * Permet de récupérer les pages pour le menu
     */
    function getMenu(){

        $this->loadModel('Menu');

        return $this->Menu->find(array(

            'conditions' => array('onlineMenu' => 1),
            
            'ORDER' => 'ordreMenu ASC'

        ));

    }

    /*
     * Permet de récupérer le logo
     */
    function getLogo(){

        $this->loadModel('Media');

        return $this->Media->findFirst(array(

            'conditions' => array('online' => 1, 'type' => 'img', 'Category' => 'Accueil', 'ordre' => 1)

        ));

    }

    /*
     * Permet de récupérer le contact pour la page d'accueil
     */
    function getContact(){

        $this->loadModel('Post');

        return $this->Post->findFirst(array(

            'conditions' => array('online' => 1, 'type' => 'page', 'id' => 7)

        ));

    }
	
	
	/**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Menu');

        $conditions = array('onlineMenu !' => -1);

        $d['pages'] = $this->Menu->find(array(
			'fields' =>  'id, nameMenu, onlineMenu, ordreMenu',
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage,
            'conditions' => $conditions
        ));

        $d['total'] = $this->Menu->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Menu');

        if($id === null){

            $page = $this->Menu->findFirst(array(

                'conditions' => array('onlineMenu' => -1)

            ));

            if(!empty($page)){

                $id = $page->id;

            }else{

            $this->Menu->save(array(

                'onlineMenu' => -1

            ));

            $id = $this->Menu->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Menu->validates($this->request->data)){

                    $this->request->data->createdMenu = date('Y-m-d H:i:s');

                    $this->Menu->save($this->request->data);

                    $d['message'] = $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/menus');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Menu->findFirst(array(
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
		
		$this->loadModel('Menu');
		
		$this->Menu->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/menus/index');
		
	}
}