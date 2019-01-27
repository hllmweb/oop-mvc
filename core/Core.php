<?php

class Core{
	public function run(){
		
		$parametros = array();
		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);

		if($url != ""){
			$url = explode("/", $url);
			array_shift($url);

			$controllerAtual = $url[0]."Controller";
			array_shift($url);

			if(isset($url[0]) && $url[0] != ""){
				$actionAtual = $url[0];
				array_shift($url);
			}else{
				$actionAtual = "index";
			}

			if(count($url) > 0){
				$parametros = array_filter($url);
			}
			// echo "nao estar no raiz";
		}else{
			$controllerAtual 	= "homeController";
			$actionAtual 		= "index";
			// echo "ta no raiz";
		}
		// echo "Controller Atual: ".$controllerAtual;
		// echo "<br>Action Atual: ".$actionAtual;
	
	require_once ("core/Controller.php");
	$obj = new $controllerAtual();
	call_user_func_array(array($obj, $actionAtual), $parametros);


	}

}