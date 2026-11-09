 <?php


class GaleriesController extends Controller
{   

    /**
	* ADMIN
	**/
	
	function index(){
		
		$perPage = 10; //nombre d'article a afficher

        $this->loadModel('Photo');
        
        $this->loadModel('Menu');

        $controller = $this->Menu->findFirst(array(
            'conditions' =>  array('slugMenu' =>  $this->request->controller)
        ));

        $conditionPhotos = array('onlinePhotos' => 1, 'page_id' => $controller->id);

        $d['photos'] = $this->Photo->find(array(
            'conditions' => $conditionPhotos,
            'limit' =>  ($perPage * ($this->request->page-1)).','.$perPage
        ));

        $d['total'] = $this->Photo->findCount($conditionPhotos);

        $d['page'] = ceil($d['total'] / $perPage);

        $this->set($d);
		
	}

    function Album(){
        
        $this->loadModel('Album');

        global $GLOBALS;

        return $this->Album->findFirst(array(

            'conditions' => array('id' => $GLOBALS['album_ID'])

        ));
    }


}