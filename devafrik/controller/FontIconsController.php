<?php

class FontIconsController extends Controller
{   
	
	
	/**
	* ADMIN
	**/
	
	function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('FontIcon');

        //Recupération des articles
        $conditions = array('onlineFont !' => -1);

        $d['FontIcons'] = $this->FontIcon->find(array(
            'field'  =>  'id, name, code, onlineFont',
            'conditions' => $conditions,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->FontIcon->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('FontIcon');

        if($id === null){

            $fontIcon = $this->FontIcon->findFirst(array(

                'conditions' => array('onlineFont' => -1)

            ));

            if(!empty($fontIcon)){

                $id = $fontIcon->id;

            }else{

            $this->FontIcon->save(array(

                'onlineFont' => -1

            ));

            $id = $this->FontIcon->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->FontIcon->validates($this->request->data)){

                    $this->FontIcon->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/fonticons/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->FontIcon->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}
	
	
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('FontIcon');
		
		$this->FontIcon->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/fonticons/index');
		
	}
}