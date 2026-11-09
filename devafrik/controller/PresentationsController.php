<?php

class PresentationsController extends Controller
{

    function index(){

            $this->loadModel('Image');

            $this->loadModel('Article');

           $conditions = array('onlineArticles' => 1, 'online' => 1, 'a.ordreArticles' => 3);

            //Mon premier article de qui sommes nous
            $d['article'] = $this->Image->findFirst(array(
                'fields' =>  'nameArticles, contentArticles, ordreArticles, name, file, articles_ID',
                'JOIN' =>  'articles a',
                'ON' => 'a.id = articles_ID',
                'conditions' => $conditions
            ));

    
            if(empty($d)){
    
                $this->e404('Page introuvable');
    
            }
            //debug($d);
            $this->set($d);
    
    }

}