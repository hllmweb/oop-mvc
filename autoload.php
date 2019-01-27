<?php
/*require("core/Core.php");
include("core/Controller.php");
include("controllers/homeController.php");
include("controllers/clienteController.php");
include("views/cliente.php");
*/



define("CAMINHO", realpath(dirname(__FILE__)));

$diretorios = array(
				CAMINHO.PATH_SEPARATOR."controllers".PATH_SEPARATOR,
				CAMINHO.PATH_SEPARATOR."core".PATH_SEPARATOR,
				CAMINHO.PATH_SEPARATOR."models".PATH_SEPARATOR,
				CAMINHO.PATH_SEPARATOR."views".PATH_SEPARATOR,
				get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $diretorios));


function __autoload($classe){
	require $classe.".php";
}


?>