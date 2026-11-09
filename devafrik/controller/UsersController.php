<?php


class UsersController extends Controller
{

    /**
     * Permet de se connecter
     */
    function login(){

        if($this->request->data){ //si les données sont envoyées

            $data = $this->request->data;

            $data->password = sha1($data->password);

            $this->loadModel('User');

            $user = $this->User->findFirst(array(
                'conditions' => array('login' => $data->login, 'password' => $data->password, 'active' => 1 )
            ));

            if(!empty($user)){

                $this->Session->write('User', $user);

            }

            $this->request->data->password = "";

        }

        if($this->Session->isLogged()){

            if($this->Session->user('role') == 'admin'){

                $this->redirect('cockpit');

            }else{

                $this->redirect('users/login');

            }

        }

    }

    /**
     * Permet de se deconnecter
     */
    function logout(){

        unset($_SESSION['User']);
        $this->Session->setFlash('Vous êtes maintenant déconnecté');
        $this->redirect('');
    }



     /**
     * Permet de se connecter
     */
    function admin_edit($id = null){

        $this->loadModel('User');

        $this->loadModel('Member');

        $user= $this->User->findFirst(array(

            'conditions' => array('active' => -1)

        ));

        if($id === null){

            if(!empty($user)){

                $id = $user->id;

            }else{

            $this->User->save(array(

                'active' => -1

            ));

            $id = $this->User->id;

            } 

        }

        $d['id'] = $id;
		
		    if($this->request->data){

                if($this->User->validates($this->request->data)){

                    //$this->request->data->createdArticles = date('Y-m-d H:i:s');

                    if($this->request->data->password != $this->request->data->repeatpassword){

                        $this->Session->setFlash('Les mots de passes saisis ne sont pas identiques', 'alert-danger');

                    }else{

                        if($user->id === $id){

                            $memberExist= $this->Member->findFirst(array(

                                'conditions' => array('account' => $this->request->data->login)
                    
                            ));

                            $userExist = $this->User->findFirst(array(

                                'conditions' => array('login' => $this->request->data->login)
                    
                            ));

                            if(!empty($memberExist) || !empty($userExist)){

                                $this->Session->setFlash('Ce compte existe déjà');

                            }elseif(empty($memberExist) && empty($userExist)){

                                $this->request->data->created = date('Y-m-d H:i:s');

                                $this->request->data->role = 'admin';

                                $this->request->data->password = sha1($this->request->data->password);
        
                                $this->request->data->repeatpassword = sha1($this->request->data->repeatpassword);

                                $this->User->save($this->request->data);
            
                                $this->Session->setFlash('Le compte a bien été crée ');
            
                                $this->redirect('admin/users/index');

                            }
                            
                        }else{

                            $this->User->save($this->request->data);
        
                            $this->Session->setFlash('Le compte a bien été modifié ');
        
                            $this->redirect('admin/users/index');

                        }

                    }

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->User->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);

    }


    function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('User');

        $conditions = array('active !'=> -1);

        $d['users'] = $this->User->find(array(
			'fields' =>  'id, firstname, lastname, login, role, active',
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage,
            'conditions' =>  $conditions
        ));

        $d['total'] = $this->User->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}

}