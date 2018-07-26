<?php

class Model extends CI_Model {

    public function inserirCliente($cliente) {
        $this->db->insert('cliente', $cliente);
    }

    public function inserirCarne($carne) {
        $this->db->insert('carne', $carne);
    }

    public function inserirEmpresa($empresa) {
        $this->db->insert('empresa', $empresa);
    }

    public function puxaEmpresa() {
        $query = $this->db->get('empresa', 1);
        return $query->result();
    }

    public function puxaCliente($idCliente) {
        
        $query = $this->db->get('cliente', $idCliente);
        
        return $query->result();
    }

    public function listCliente() {
        $resultado = $this->db->get('cliente');
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function alterarCliente($cliente, $idCliente) {
        $this->db->where('idCliente', $idCliente);
        return $this->db->update('cliente', $cliente);
    }

    public function atualizar($empresa, $idEmpresa) {
        $this->db->where('idEmpresa', $idEmpresa);
        return $this->db->update('empresa', $empresa);
    }

    public function buscaEmpresa($idEmpresa) {
        $resultado = $this->db->query("select * from empresa where idEmpresa = '$idEmpresa'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function buscaClientes($idCliente) {
        $query = $this->db->select('cliente.*')
                ->where('idCliente', $idCliente)
                ->from('cliente')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function ultimos7dias() {
        $dataFim = date("Y-m-d");
        $dataIni = date('Y-m-d', (strtotime('-7 day', strtotime($dataFim))));
        $this->db->select();
        $this->db->from('cliente');
        $this->db->where(' data_cadastro >= date("' . $dataIni . '")');
        $this->db->where('data_cadastro <= date("' . $dataFim . '")');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function totalCliente() {
        $query = $this->db->query('SELECT * FROM cliente');
        return $query->num_rows();
    }

    public function totalCarne() {
        $query = $this->db->query('SELECT * FROM carne');
        return $query->num_rows();
    }

    public function buscaCliente($idCliente) {
        $resultado = $this->db->query("select * from cliente where idCliente = '$idCliente'");
        if ($resultado->num_rows() > 0) {
            return $resultado->result();
        }
        return;
    }

    public function ultID() {

        return $this->db->insert_id();
    }

    public function puxarCarne($idCarne) { {
            $this->db->select('carne.*,cliente.*,empresa.*');
            $this->db->from('carne')->join('cliente', 'cliente.idCliente = carne.cliente_idCliente')
                    ->join('empresa', 'empresa.idEmpresa = carne.empresa_idEmpresa');
            $query = $this->db->get();
            return $query->result();
        }
    }
    
    function validate() {
        $this->db->where('nomeUsuario', $this->input->post('nomeUsuario')); 
        $this->db->where('senhaUsuario', md5($this->input->post('senhaUsuario')));
        $this->db->where('statusUsuario', 1); // Verifica o status do usuário

        $query = $this->db->get('usuario'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }
    
    public function login($usuario, $senha){
        
        $this->db->select('nomeUsuario, senhaUsuario');
        $this->db->from('usuario');
        $this->db->where('nomeUsuario', $usuario);
        $this->db->where('senhaUsuario', $senha);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina. <a href="http://oficina2015/login">Efetuar Login</a>';
            die();
        }
    }

}
