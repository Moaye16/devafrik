<?php

class AccueilsController extends Controller
{

    function index(){

        $perPage = 10;

            $this->loadModel('Article');

            $this->loadModel('Image');  //, name, file, articles_ID

            $this->loadModel('Menu');

            $conditions = array('onlineArticles' => 1);

            $d['ArticleBienvenue'] = $this->Article->findFirst(array(
                'fields' =>  'nameArticles, contentArticles, ordreArticles',
                'conditions' => $conditions
            ));

            $d['ArticleAccueil'] = $this->Image->find(array(
                'fields' =>  'nameArticles, contentArticles, ordreArticles, name, file, articles_ID',
                'JOIN' =>  'articles a',
                'ON' => 'a.id = articles_ID',
            ));

            //Nos services
            $d['nosServices'] = $this->request('Nos-services', 'QlqServices');
            
            //Image pour le slideshow
            $d['slideshows'] = $this->request('Slideshows', 'getSlideshow');

            //Partenaires
            $d['partenaires'] = $this->request('Partenaires', 'listPartenaire');
            
            if(empty($d)){
    
                $this->e404('Page introuvable');
    
            }

            $this->set($d);
            
    }

}