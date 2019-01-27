<?php

class categoriaController extends Controller{
	public function index(){
        //echo "Oi eu sou o controller cliente";
        $dados["view"] = "categoria";
		$this->load("templete",$dados);
    }
}

?>