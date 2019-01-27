<?php 

class clienteController extends Controller{
	public function index(){
		//echo "Oi eu sou o controller cliente";
		$this->load("cliente");
	}

	public function cadastrar(){
		$curso = new Curso();
		$curso->setDescricao("Curso de Java");
		$curso->setValor(297);

		$dados["curso"] = $curso->getDescricao();
		$dados["valor"] = $curso->getValor();
		$this->load("cliente",$dados);

	}
}
?>