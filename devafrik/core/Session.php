<?php
/**
 * Created by PhpStorm.
 * User: Jean-Francois
 * Date: 11/07/2017
 * Time: 10:05
 */

class Session
{
	
	public function __construct(){
		
		if(!isset($_SESSION)){
			
			session_start();
			
		}
		
	}
	
	
	public function setFlash($message, $type = 'alert-success'){
		
		$type = 'au-alert-success alert-dismissible fade show au-alert au-alert--70per';

		$_SESSION['flash'] = array(
				'message' => $message,
				'type' => $type
				);
		
	}

	/** @noinspection PhpInconsistentReturnPointsInspection */
	public function flash(){
		
		if(isset($_SESSION['flash']['message'])){
			
			$html = '<div class="alert  '.$_SESSION['flash']['type'].'" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">'.$_SESSION['flash']['message'].'</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                            
                        </button>
                    </div>';

			 //'<div class="alert '.$_SESSION['flash']['type'].'"><p>'.$_SESSION['flash']['message'].'</p></div>'; au-alert-success alert-dismissible fade show au-alert au-alert--70per
			
			$_SESSION['flash'] = array();
			
			return $html;
			
			}
		
	}

	public function write($key, $value){

		$_SESSION[$key] = $value;

	}

	public function read($key = null){

		if ($key){

			if(isset($_SESSION[$key])) {

				return $_SESSION[$key];

			}else{

				return false;

			}


		}else{

			return $_SESSION;

		}

	}


	public function isLogged(){

		return isset($_SESSION['User']->role);

	}

	public function user($key){

		if($this->read('User')){

			if(isset($this->read('User')->$key)){

				return $this->read('User')->$key;

			}else{

				return false;

			}

		}

		return false;

	}


}
