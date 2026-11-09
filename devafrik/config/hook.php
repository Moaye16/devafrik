<?php

//Changer de template en fonction des zones

if($this->request->prefix == 'admin'){

    $this->layout = 'admin';

    if (!$this->Session->isLogged() || $this->Session->user('role') != 'admin' || $this->Session->user('active') != 1){
        
        $this->redirect("users/login");  //users/login

    }
}

if($this->request->prefix == 'modal'){

    $this->layout = 'modal';
    
}
