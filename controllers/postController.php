<?php

class postController extends Controller{
	public function index(){
		//echo "Oi eu sou o controller cliente";
		$dados["view"] = "post";
		$this->load("templete",$dados);
    }
}

?>