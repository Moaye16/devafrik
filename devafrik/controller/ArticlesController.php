<?php

class ArticlesController extends Controller
{   
	
	
	/**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Menu');

        $this->loadModel('Article');

        $this->loadModel('FontIcon');

        //Récuperation des pages
        $conditionMenu = array('onlineMenu !' => -1);

        $d['menus'] = $this->Menu->find(array(
            'field'  =>  'id, nameMenu',
            'conditions' => $conditionMenu,
        ));

        
        //Récuperation des icones
        $conditionFont = array('onlineFont!' => -1);

        $d['FontIcons'] = $this->FontIcon->find(array(
            'field'  =>  'name, code',
            'conditions' => $conditionFont
        ));


        //Recupération des articles
        $conditions = array('onlineArticles !' => -1);

        $d['articles'] = $this->Article->find(array(
            'field'  =>  'id, nameArticles, onlineArticles, menu_ID',
            'conditions' => $conditions,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Article->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Article');

        $this->loadModel('Menu');

        $this->loadModel('FontIcon');

        $d['pages'] = $this->Menu->find(array('fields' =>  'id, nameMenu'));

        $d['icons'] = $this->FontIcon->find(array('fields' =>  'name, code'));

        if($id === null){

            $post = $this->Article->findFirst(array(

                'conditions' => array('onlineArticles' => -1)

            ));

            if(!empty($post)){

                $id = $post->id;

            }else{

            $this->Article->save(array(

                'onlineArticles' => -1

            ));

            $id = $this->Article->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Article->validates($this->request->data)){

                    $this->request->data->createdArticles = date('Y-m-d H:i:s');

                    $this->Article->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/articles/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Article->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}
	
	
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('Article');
		
		$this->Article->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/articles/index');
		
	}
}