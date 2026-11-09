<?php


class MembersController extends Controller
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

        $this->loadModel('Member');

        $this->loadModel('User');

        $member= $this->Member->findFirst(array(

            'conditions' => array('active' => -1)

        ));

        if($id === null){

            if(!empty($member)){

                $id = $member->id;

            }else{

            $this->Member->save(array(

                'active' => -1

            ));

            $id = $this->Member->id;

            } 

        }

        $d['id'] = $id;

        $d['memberActivator']= $this->Member->findFirst(array(

            'conditions' => array('id' => $id)

        ));
		
		if($this->request->data){

            if($this->Member->validates($this->request->data)){

                    //$this->request->data->createdArticles = date('Y-m-d H:i:s');

                        if($member->id === $id){

                            $memberCodeExist= $this->Member->findFirst(array(

                                'conditions' => array('code' => $this->request->data->code)
                    
                            ));

                            $memberExist= $this->Member->findFirst(array(

                                'conditions' => array('account' => $this->request->data->account)
                    
                            ));

                            $userExist = $this->User->findFirst(array(

                                'conditions' => array('login' => $this->request->data->account)
                    
                            ));

                            if(!empty($memberCodeExist)){

                                $this->Session->setFlash('Ce code existe déjà');

                            }elseif(!empty($memberExist) || !empty($userExist)){

                                $this->Session->setFlash('Ce compte existe déjà');

                            }elseif(empty($memberExist) && empty($userExist) && empty($memberCodeExist)){

                                $cle = rand(1000000, 9000000);
    
                                $token = sha1($cle);
    
                                $this->request->data->created = date('Y-m-d H:i:s');
    
                                $this->request->data->password = $token;
    
                                $this->request->data->token = $token;
    
                                $this->request->data->role = 'membre';
    
                                $this->request->data->active = 0;

                                $this->Member->save($this->request->data);
        
                                $mailDest = $this->request->data->emailMembers;//$d['contacts']->email;  
                                $fullname = $this->request->data->firstnameMember.' '.$this->request->data->lastnameMember;
                                $contact = $this->request->data->contact;
                                $Email = 'adje20032002@gmail.com';
                                $subject = 'Email de confirmation de compte';
                                $message = 'Votre mot de passe est : '.$cle.' Pour activer votre compte <a href=https://localhost/A2GC/members/verification/'.$id.'/'.$token.'>cliquer ici</a>';
                                $this->Session->setFlash(sendMail($fullname, $contact, $Email, $subject, $message, 'Contact A2GC',$mailDest, false), 'alert-danger');
                                
                                $this->Session->setFlash('Le compte a bien été crée');
            
                                $this->redirect('admin/members/index');

                            }
                            
                        }else{

                            $this->Member->save($this->request->data);

                            $this->Session->setFlash('Le compte a bien été modifié');
        
                            $this->redirect('admin/members/index');

                        }

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}else{

                    $this->request->data = $this->Member->findFirst(array(
                        'conditions' => array('id' => $id)
                    ));
        }

        $this->set($d);

    }


    function admin_index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Member');

        $conditions = array('role'=>'membre', 'active !'=> -1);

        $d['members'] = $this->Member->find(array(
			'fields' =>  'id, firstnameMembers, lastnameMembers, account, role, active',
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage,
            'conditions' =>  $conditions
        ));

        $d['total'] = $this->Member->findCount($conditions);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}


    function verification($id, $token){

        $this->loadModel('Member');

        $member= $this->Member->findFirst(array(

            'conditions' => array('active' => 0, 'id' => $id, 'token' => $token)

        ));
		
        if($member){

            $member->createdActivator = date('Y-m-d H:i:s');
		
            $member->active = 1;

            $this->Member->save($member);
                        
            $this->Session->setFlash('Le compte a bien été crée');

        }else{

            $this->redirect('users/login');

        }              

        //$this->set($d);

    }

}