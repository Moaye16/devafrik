<?php

class BlogsController extends Controller
{

    function index(){

        $GLOBALS['pages'] = ($this->request->page-1);

        $GLOBALS['perPage'] = 10;

        $GLOBALS['model'] = 'Post';

        $GLOBALS['ordre'] ='datepublication ASC';

        $GLOBALS['conditions'] = array('online !' => -1);
        
        $d['posts'] = $this->request('Blogs', 'allModel');

        $d['total'] = $this->request('Blogs', 'counterModel');
        
        $d['page'] = ceil($d['total'] / $GLOBALS['perPage']);


        /**
         * Liste toutes les categories
         */
		
        $GLOBALS['model'] = 'Postcategorie';

        $GLOBALS['ordre'] ='createdcategory DESC';
        
        $GLOBALS['conditions'] = array('onlinecategory ' => 1);
        
        $d['categories'] = $this->request('Blogs', 'allModelOrder');


        if(empty($d)){

            $this->e404('Page introuvable');
    
        }

        $this->set($d);
    }




    function view($id, $slug){

        /**
         * Liste toutes les categories
         */
		
        $GLOBALS['model'] = 'Postcategorie';

        $GLOBALS['ordre'] ='createdcategory DESC';
        
        $GLOBALS['conditions'] = array('onlinecategory ' => 1);
        
        $d['categories'] = $this->request('Blogs', 'allModelOrder');


        $this->loadModel('Post');

        $d['post'] = $this->Post->findFirst(array(
            'conditions' =>  array('online' => 1, 'id' =>  $id)
        ));


        if(empty($d['post'])){

            $this->e404('Page introuvable');

        }

        if($slug != $d['post'] -> slugtopic){

            $this->redirect("blogs/view/id:$id/slug:".$d['post'] ->  slugtopic, 301);

        }
        //debug($d); die();
        $this->set($d);

    }
	
	
	/**
	* ADMIN
	**/
	
	function admin_index(){

        $GLOBALS['pages'] = ($this->request->page-1);

        $GLOBALS['perPage'] = 10;

        
        /**
         * Affiche des 10 premiers post d'un blog
         */

        $GLOBALS['model'] = 'Post';

        $GLOBALS['ordre'] ='datepublication ASC';

        $GLOBALS['conditions'] = array('online !' => -1);
        
        $d['posts'] = $this->request('Blogs', 'allModel');

        $d['total'] = $this->request('Blogs', 'counterModel');
        
        $d['page'] = ceil($d['total'] / $GLOBALS['perPage']);



        /**
         * Affiche des 10 premieres categorie d'un blog
         */
		
        $GLOBALS['model'] = 'Postcategorie';

        $GLOBALS['ordre'] ='createdcategory ASC';
        
        $GLOBALS['conditions'] = array('onlinecategory !' => -1);
        
        $d['categories'] = $this->request('Blogs', 'allModel');

        $d['totalCategory'] = $this->request('Blogs', 'counterModel');
        
        $d['page'] = ceil($d['total'] / $GLOBALS['perPage']);

        if(empty($d)){

            $this->e404('Page introuvable');
    
        }

        $this->set($d);
		
	}


    /**
     * Lister toutes les categories des posts
     */

     function allModel(){

        $this->loadModel($GLOBALS['model']);

        return $this->{$GLOBALS['model']}->find(array(
            'conditions' => $GLOBALS['conditions'],
            'ORDER' => $GLOBALS['ordre'],
            'limit' =>  ($GLOBALS['perPage'] * $GLOBALS['pages']).','.$GLOBALS['perPage']
        ));

     }

      /**
     * Lister toutes les categories sans pagination
     */

    function allModelOrder(){

        $this->loadModel($GLOBALS['model']);

        return $this->{$GLOBALS['model']}->find(array(
            'conditions' => $GLOBALS['conditions'],
            'ORDER' => $GLOBALS['ordre']
        ));

     }

     /**
     * Lister toutes les categories des posts
     */

    function firstModel(){

        $this->loadModel($GLOBALS['model']);

        return $this->{$GLOBALS['model']}->findFirst(array(
            'conditions' => array('id'=>$GLOBALS['id'])
        ));

     }

     function allModelJoin(){

        $this->loadModel($GLOBALS['model']);

        return $this->{$GLOBALS['model']}->find(array(
            'fields' => $GLOBALS['fields'],
            'conditions' => $GLOBALS['conditions'],
            'JOIN' => $GLOBALS['join'],
            'ON' => $GLOBALS['on'],
            'ORDER' => $GLOBALS['ordre'],
            'limit' =>  ($GLOBALS['perPage'] * $GLOBALS['pages']).','.$GLOBALS['perPage']
        ));

     }


      /**
     * Compter le nombre de categories de post
     */
    function counterModel(){

        $this->loadModel($GLOBALS['model']);

        return $this->{$GLOBALS['model']}->findCount($GLOBALS['conditions']);

    }


    /**
     * Ajouter un commentaire
     */
    function addComment($id, $slug){

        $d['id'] = $id;

        $this->loadModel('Comment');
		
		if($this->request->data){

            if($this->Comment->validates($this->request->data)){

                    $this->request->data->created = date('Y-m-d H:i:s');
                    
                    $this->request->data->onlineComment = 0;

                    $this->request->data->post_id = substr($id,3);

                    $this->Comment->save($this->request->data);

                    $this->Session->setFlash('Le commentaire a été envoyé');



                        $this->redirect("index.php/blogs/view/{$id}/{$slug}"); 

                }else{

                $this->Session->setFlash('Merci de corriger vos informations', 'alert-danger');

                }

			}

        $this->set($d);

    }

}