<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action {

	

	public function index(){

		$this->view->dados = array('teste', 'teste2');
		$this->render('index');
	}

	public function sobreNos(){
		$this->render('sobreNos');
	}


	
}

?>