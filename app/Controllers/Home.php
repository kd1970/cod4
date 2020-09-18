<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();

			$db->connect();

				$dados = $db->query("SELECT * FROM user");
					
			$db->close();
			
			foreach($dados->getResult() as $linhas){

				echo "Usuário : $linhas->nome ";
				echo '<br>';
				echo '<br>';
				echo "E-mai1 : $linhas->email <hr>";
				echo '<br>';

			}

	}

	

}
