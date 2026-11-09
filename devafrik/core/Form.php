<?php
/**
 * Created by PhpStorm.
 * User: Jean-Francois
 * Date: 11/07/2017
 * Time: 10:05
 */

class Form
{
	public $controller;

	public $errors;
	
	
	public function __construct($controller){
		
		$this -> controller = $controller;
		
	}
	
	
	public function input($name, $label, $options = array(), $option = array(), $msg=null){

		$error = false;

		$classError = '';

		if(isset($this->errors[$name])){

			$error = $this->errors[$name];

			$classError = ' alert-danger';

		}

		if(!isset($this->controller->request->data->$name)){

			$value = '';

		}else{

			$value = $this->controller->request->data->$name;

		}

		if($label == 'hidden'){
			
			return '<input type="hidden" name="'.$name.'" value="'.$value.'">';
			
			}
		
		$html = '<div class="clearfix'.$classError.'">
        				<div class="input">';
						
			$attr = ' ';
			
			foreach($options as $k => $v){
				
				if($k != 'type'){
				
					$attr .= "$k=\"$v\"";
				
				}
				
			}
						
			if(!isset($options['type'])){
				
				$html .= '<input type="text" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'">';
				
			}elseif($options['type'] == 'textarea'){
				
				$html .= '<textarea id="input'.$name.'" name="'.$name.'" '.$attr.'>'.$value.'</textarea>';
				
			}elseif($options['type'] == 'checkbox'){
				
				$html .= '<input type="hidden" name="'.$name.'" value="0"><input type="checkbox" name="'.$name.'" value="1" '.(empty($value)?' ':'checked').'>';
				
			}elseif($options['type'] == 'file'){

			$html .= '<input type="file" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';

			}elseif($options['type'] == 'password'){

				$html .= '<input type="password" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';

			}elseif($options['type'] == 'tel'){

				$html .= '<input type="tel" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';

			}elseif($options['type'] == 'email'){

				$html .= '<input type="email" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';

			}elseif($options['type'] == 'date'){

				$html .= '<input type="date" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.'>';

			}elseif($options['type'] == 'radio'){

				$select = '';

				if(isset($option[$name]) && $value === $option[$name]){

					$select = 'checked';

				}

				$html .= '<input type="radio" id="input'.$name.'" name="'.$name.'" value="'.$value.'" '.$attr.' '.$select.'>';

			}elseif($options['type'] == 'select'){

				$html_options = [];

				$html_options[] = '<option value = 0 >'.$msg.'</option>';

				foreach($option as $f=>$e){

					$select = $f == $value ? 'selected' : '';

					//$icons = $icon == false ? '' : 'data-icon='.$f;
				
					$html_options[] = '<option value='.$f.' '.$select.'>'.$e.'</option>';
				
				}

				$html .= '<select id="input'.$name.'" name="'.$name.'" '.$attr.'>'.implode($html_options).'</select>';

			}

			if($error){

				$html .='<span class="help-block">'.$error.'</span>';

			}
					
        	$html .= '</div></div>';			
			
			return $html;
			
	}
	
}
