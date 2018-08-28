<?php

class Controller{
	public function load($nomeDaView,$dadosDaView = array()){
		include "/views/".$nomeDaView.".php";
	}
}

?>