<?php

class Model extends CI_Model {

        public function inserirCliente($cliente) {
            $this->db->insert('cliente', $cliente);
    }
    
    public function inserirEmpresa($empresa) {
            $this->db->insert('empresa', $empresa);
    }
    
    public function puxaEmpresa(){
        $query = $this->db->get('empresa',1);
        return $query->result();
    }
    
    public function listCliente(){
	$resultado = $this->db->get('cliente');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
    
    public function alterarCliente($cliente, $idCliente) {
        $this->db->where('idCliene', $idCliente);
        return $this->db->update('cliente', $cliente);
    }
    
    public function atualizar($empresa, $idEmpresa) {
        $this->db->where('idEmpresa', $idEmpresa);
        return $this->db->update('empresa', $empresa);
    }
    
    public function buscaEmpresa($idEmpresa){
         $resultado = $this->db->query("select * from empresa where idEmpresa = '$idEmpresa'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }
}