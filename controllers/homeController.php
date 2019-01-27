<?php 

class homeController extends Controller{

	//chamando o constructor	
	/*public function __construct(){
		parent::__construct();
	}*/

	public function index(){
		/*echo "Ola eu sou o controller home";
		$this->load("home");
		$qry = $this->db->query("SELECT * FROM categoria");
		$result = $qry->fetchAll();*/


		//$categorias = new categoria();
		//$dados["categorias"] = $categorias->listarTodos();
		$dados["view"] = "home";
		//$this->load("templete",$dados);
		$this->load("templete",$dados);
	}
}
?>