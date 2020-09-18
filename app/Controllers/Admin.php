<?php namespace App\Controllers;

use CodeIgniter\Database\Query;

class Admin extends BaseController{

	public function index(){

        $db = \Config\Database::connect();

        $db-> connect();

            $busca = $db->query('SELECT * FROM user where id=1');
            

        $db->close();

           echo $busca->getResult(
               'nome', $busca->nome
           );
                                  
		}

}

