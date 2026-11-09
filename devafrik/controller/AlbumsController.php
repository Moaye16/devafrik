<?php

class AlbumsController extends Controller
{   
	
	
	/**
	* Permet d'éditer un article
	**/
	
	function admin_edit($id = null){
		
		$this->loadModel('Album');

        if($id === null){

            $album = $this->Album->findFirst(array(

                'conditions' => array('onlineAlbum' => -1)

            ));

            if(!empty($album)){

                $id = $album->id;

            }else{

            $this->Album->save(array(

                'onlineAlbum' => -1

            ));

            $id = $this->Album->id;

            } 

        }

        $d['id'] = $id;
		
		if($this->request->data){

            if($this->Album->validates($this->request->data)){

                    $this->request->data->createdAlbum = date('Y-m-d H:i:s');

                    $this->Album->save($this->request->data);

                    $this->Session->setFlash('Le contenu a bien été modifié');

                    $this->redirect('admin/photos/index');

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Album->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);
		
	}
	
	
}