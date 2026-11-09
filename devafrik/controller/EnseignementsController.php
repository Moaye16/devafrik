<?php

class EnseignementsController extends Controller
{

    function index(){

            $this->loadModel('Article');

            $this->loadModel('Image');  //, name, file, articles_ID

            $conditions = array('onlineArticles' => 1, 'a.menu_ID' => 3);
            
            $d['Articles'] = $this->Image->find(array(
                'fields' =>  'nameArticles, contentArticles, menu_ID, ordreArticles, name, file, articles_ID',
                'conditions' =>  $conditions,
                'JOIN' =>  'articles a',
                'ON' => 'a.id = articles_ID',
                    
            ));

            if(empty($d)){
    
                $this->e404('Page introuvable');
    
            }
            
            $this->set($d);
            
    }

}