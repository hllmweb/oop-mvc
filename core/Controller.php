<?php

class Controller{
	/*
	protected $db;
	
	public function __construct(){
		$this->db = new PDO("mysql:dbname=".BANCO.";
		host=".SERVIDOR,
		USUARIO,
		SENHA);
	}*/

	public function load($nomeDaView,$dadosDaView = array()){
		extract($dadosDaView);
		include "views/".$nomeDaView.".php";
	}
}

?>