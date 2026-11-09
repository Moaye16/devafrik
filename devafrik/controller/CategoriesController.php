<?php

class CategoriesController extends Controller
{   
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Postcategorie');

        if($id === null){

            $Postcategory = $this->Postcategorie->findFirst(array(

                'conditions' => array('onlinecategory' => -1)

            ));

            if(!empty($Postcategory)){

                $id = $Postcategory->id;

            }else{

            $this->Postcategorie->save(array(

                'onlinecategory' => -1

            ));

            $id = $this->Postcategorie->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Postcategorie->validates($this->request->data)){

                    $this->request->data->createdcategory = date('Y-m-d H:i:s');

                    $this->Postcategorie->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/blogs/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Postcategorie->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}
	
		
	/**
	* Permet de supprimer un article
	**/
	
	function admin_delete($id){
		
		$this->loadModel('Postcategorie');
		
		$this->Postcategorie->delete($id);
		
		$this->Session->setFlash('Le contenu a bien été supprimé');

		return $this->redirect('admin/blogs/index');
		
	}
	
}