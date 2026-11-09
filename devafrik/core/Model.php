<?php
/**
 * Created by PhpStorm.
 * User: Jean-Francois
 * Date: 11/07/2017
 * Time: 14:02
 */

class Model
{

    static $connections = array();

    public $conf = 'default';

    public $table = false;

    public $db;

    public $primarykey = 'id';

    public $id;

    public $errors = array();

    public $form;



    public function __construct()
    {
        // J'initialise quelques variables

        if($this->table === false){

            $this->table = strtolower(get_class($this)).'s';

        }

        // Je me connecte à la base de données

        $conf = Conf::$databases[$this->conf];

        if(isset(Model::$connections[$this->conf])){

            $this->db = Model::$connections[$this->conf];

            return true;
        }

        try{

            $pdo = new PDO(
                'mysql:host='.$conf['host'].'; dbname='.$conf['database'].';',
                    $conf['login'],
                    $conf['password'],
                    array(PDO::MYSQL_ATTR_INIT_COMMAND =>  'SET NAMES utf8')
                            );

            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            Model::$connections[$this->conf] = $pdo;

            $this->db = $pdo;

        }catch(PDOException $e){

            if(Conf::$debug >= 1){

                die($e->getMessage());

            }else{

                die('Impossible de se connecter à la base de données');

            }

        }

    }

    public function find($req = array()){

        $sql = 'SELECT ';

        if(isset($req['fields'])) {

            if (is_array($req['fields'])) {

                $sql .= implode(', ', $req['fields']);

            } else {

                $sql .= $req['fields'];

            }
        } else {

               $sql .= '*';

            }


        $sql .= ' FROM '.$this->table.' as '.get_class($this).' ';



        // Liaison

        

        if(isset($req['JOIN'])){
            
            $sql .= ' INNER JOIN ';

            if (is_array($req['JOIN'])) {

                $sql .= implode(', ', $req['JOIN']);

            } else {

                $sql .= $req['JOIN'];

            }


        }



        if(isset($req['ON'])){

            $sql .= ' ON ';

            if(!is_array($req['ON'])){

                $sql .= $req['ON'];

            }else{

                $cond = array();

                foreach ($req['ON'] as $k => $v){

                    if(!is_numeric($v)){

                        $v = '"'.htmlentities($v,ENT_QUOTES).'"';

                    }

                    $cond[] = "$k=$v";

                }

                $sql .= implode(' AND ', $cond);

            }


        }
		
		


        // Construction de la condition

        if(isset($req['conditions'])){

            $sql .= ' WHERE ';

            if(!is_array($req['conditions'])){

                $sql .= $req['conditions'];

            }else{

                $cond = array();

                foreach ($req['conditions'] as $k => $v){

                    if(!is_numeric($v)){

                        $v = '"'.htmlentities($v,ENT_QUOTES).'"';

                    }

                    $cond[] = "$k=$v";

                }

                $sql .= implode(' AND ', $cond);

            }

        }
		
        if(isset($req['ORDER'])){
		
			$sql .= ' ORDER BY '.$req['ORDER'];
            
		}

        if(isset($req['limit'])){

            $sql .= ' LIMIT '.$req['limit'];

        }

        $pre = $this -> db -> prepare($sql);

        $pre -> execute();

       return $pre -> fetchall(PDO::FETCH_OBJ);

    }


    public function findFirst($req){

        return current($this->find($req));

    }


    public function findCount($conditions=null){

       $res = $this->findFirst(array(

            'fields' => 'COUNT('.$this->primarykey.') as count',
            'conditions' => $conditions

        ));

       return $res->count;
    }
	
	
	
	/**
	* Permet de supprimer un article
	**/
	public function delete($id){
		
		$sql = "DELETE FROM {$this->table} WHERE {$this->primarykey} = $id";
		
		$this->db->query($sql);
		
	}
	
	
	/**
	* Permet d'ajouter ou modifier un article
	**/
	public function save($data){

		$key = $this->primarykey;

		$fields = array();
		
		$d = array();

		foreach($data as $k => $v){

                if($k != $this->primarykey){

                    $fields[] = "$k=:$k";

                    $d[":$k"] = $v;

                }elseif (!empty($v)){

                    $d[":$k"] = $v;

                }

			}

		if(isset($data->$key) && !empty($data->$key)){

			$sql = 'UPDATE '.$this->table.' SET '.implode(',', $fields).' WHERE '.$key.'=:'.$key;

			$this->id = $data->$key;

            $action = 'update';
			
		}else{

            $sql = 'INSERT INTO '.$this->table.' SET '.implode(',', $fields);

            $action = 'insert';

        }
        //debug($sql); debug($data); die();
        $pre = $this -> db -> prepare($sql);

        $pre -> execute($d);

        if($action == 'insert'){

            $this->id = $this->db->lastInsertId();

        }

		
	}

	
}