<?php

class Qui_sommes_nousController extends Controller
{

    function index(){

            $this->loadModel('Image');

            $this->loadModel('Article');

           $conditions = array('onlineArticles' => 1, 'online' => 1, 'a.menu_ID' => 2);

            //Mon premier article de qui sommes nous
            $d['articles'] = $this->Image->find(array(
                'fields' =>  'nameArticles, contentArticles, ordreArticles, name, file, articles_ID',
                'JOIN' =>  'articles a',
                'ON' => 'a.id = articles_ID',
                'ORDER' => 'ordreArticles ASC',
                'conditions' => $conditions
            ));
            //debug($d); die();

            //Liste de l'equipe
            $d['equipes'] = $this->request('Equipes', 'listEquipe');
    
            if(empty($d)){
    
                $this->e404('Page introuvable');
    
            }
    
            $this->set($d);
    
    }

}