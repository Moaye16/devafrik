<?php


class Article extends Model
{

   var $validate = array(
        'nameArticles' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser le titre de l\'article'
        ),

        'contentArticles' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser le contenu de l\article'
        ),

        'menu_ID' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser une page'
        ),

        'ordreArticles' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez saisir un ordre'
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