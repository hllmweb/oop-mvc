<?php

class categoria extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function listarTodos(){
        $sql = "SELECT * FROM categoria";
        $qry = $this->db->query($sql);
        
        $retorno = array();
        $retorno = $qry->fetchAll();

        return $retorno;
    }
}


?>