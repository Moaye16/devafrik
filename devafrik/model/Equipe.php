<?php


class Equipe extends Model
{

  
    var $validate = array(
        'firstname' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un nom'
        ),

        'lastname' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un prénom'
        ),

        'phone' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un contact'
        ),

        'content' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser la description'
        ),

        
    );

    function validates($data){

        $errors = array();

        foreach($this->validate as $k => $v){

            if(!isset($data->$k)){

                $errors[$k] = $v['message'];

            }else{

                if($v['rule'] == 'notEmpty'){

                    if(empty($data->$k)){

                        $errors[$k] = $v['message'];
                    }
                    
                }elseif(!preg_match('/^'.$v['rule'].'$/', $data->$k)){

                    $errors[$k] = $v['message'];

                }

            }

        }
        $this->errors = $errors;

        if (isset($this->Form)){

            $this->Form->errors = $errors;

        }

        if (empty($errors)){

            return true;

        }

        return false;

    }

}