<?php

class Nos_servicesController extends Controller
{

    function index(){

            //Nos services
            $d['nosServices'] = $this->request('Nos-services', 'NosServices');

            if(empty($d)){
    
                $this->e404('Page introuvable');
    
            }
            
            $this->set($d);
            
    }

    //Nos services
    function NosServices(){

            $this->loadModel('Image');  // Article

            /**$conditions = array('onlineArticles' => 1, 'menu_ID' => 3);

            return $this->Article->find(array(
                'ORDER' => 'ordreArticles ASC', 
                'conditions' =>  $conditions   
            ));*/

             
            $conditions = array('onlineArticles' => 1, 'menu_ID' => 3);
            
            return $this->Image->find(array(
                'fields' =>  'nameArticles, contentArticles, ordreArticles, fontIcon, name, file, articles_ID',
                'conditions' =>  $conditions,
                'JOIN' =>  'articles a',
                'ON' => 'a.id = articles_ID',
                'ORDER' => 'ordreArticles ASC',   
            ));
            
    }

    function QlqServices(){

        $this->loadModel('Article');  // Image

            $conditions = array('onlineArticles' => 1, 'menu_ID' => 3);

            return $this->Article->find(array(
                'conditions' =>  $conditions,
                'ORDER' => 'ordreArticles ASC', 
                'limit' =>  4 
            ));

    }

}