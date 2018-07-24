<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->Model('Model', '', TRUE);
        $dados['empresa'] = $this->Model->puxaEmpresa();
        $dados['script'] = "<script>"
                . "var hidden = false;"
                . "document.getElementById('salvar').style.visibility = 'hidden';"
                . "function action() {"
                . "hidden = !hidden;"
                . "if(hidden) {"
                . "document.getElementById('salvar').style.visibility = 'visible';"
                . "document.getElementById('telEmpresa').removeAttribute('disabled');"
                . "document.getElementById('nomeEmpresa').removeAttribute('disabled');"
                . "document.getElementById('enderecoEmpresa').removeAttribute('disabled');"
                . "document.getElementById('cidadeEmpresa').removeAttribute('disabled');"
                
                . "} "
                . "}"
                . ""
                . "</script>";
        
        echo '<script>alert("toaq");</script>';
        
        $this->load->view('commons/cabecalho');
        $this->load->view('index', $dados);
        $this->load->view('commons/rodape');
    }

    public function gerarCarne() {

        $dados = array(
            'nome_empresa' => $this->input->post('nome_empresa'),
            'endereco_empresa' => $this->input->post('endereco_empresa'),
            'tel_empresa' => $this->input->post('tel_empresa'),
            'logo' => $this->input->post('logo'),
            'obs' => $this->input->post('obs'),
            'nome' => $this->input->post('nome'),
            'endereco' => $this->input->post('endereco'),
            'cpf' => $this->input->post('cpf'),
            'valor' => $this->input->post('valor'),
            'qtd' => $this->input->post('qtd'),
            'vence' => $this->input->post('vence'),
            'primeiro_mes' => $this->input->post('primeiromes'),
            'primeiro_ano' => $this->input->post('primeiroano'),
            'hoje' => date("d/m/Y")
        );





        if ($dados['qtd'] > 212) {
            header("Location: index.php?error=qtd_limite");
        }


        $this->load->view('carne', $dados);
    }

    public function teste() {
        $this->load->view('commons/cabecalho');
        $this->load->view('index');
        $this->load->view('commons/rodape');
    }

    public function teste2() {
        $this->load->view('commons/cabecalho');
        $this->load->view('forms');
        $this->load->view('commons/rodape');
    }
    public function editarEmpresa($idEmpresa){
        $this->load->Model('Model', '', TRUE);
                
        
echo "<script>alert('teste');</script>";
        $dados = array (
            'empresa'=>$this->Model->buscaEmpresa($idEmpresa),
        );
        
        
        $this->load->view('commons/cabecalho');
        
        $this->load->view('index',$dados);
        
        $this->load->view('commons/rodape');
    }
    
    public function cadastrarEmpresa(){
        $this->load->Model('Model', '', TRUE);
        $idEmpresa = $this->input->post('idEmpresa');
        $dados = array (
            'telEmpresa'=>$this->input->post('telEmpresa'),
            'enderecoEmpresa'=>$this->input->post('enderecoEmpresa'),
            'cidadeEmpresa'=>$this->input->post('cidadeEmpresa')
        );
        $this->Model->atualizar($dados, $idEmpresa);
        $this->index();
    }
    
    
    public function cadastrarCliente() {
        $this->load->Model('Model', '', TRUE);
        $dados = array (
            'nomeCliente'=> $this->input->post('nomeCliente'),
            'rgCliente'=> $this->input->post('rgCliente'),
            'cpfCliente'=>$this->input->post('cpfCliente'),
            'telCliente'=>$this->input->post('telCliente'),
            'dataNascCliente'=>$this->input->post('dataNascCliente'),
            'enderecoCliente'=>$this->input->post('enderecoCliente'),
            'cidadeCliente'=>$this->input->post('cidadeCliente')
        );
        $this->Model->inserirCliente($dados);
        
        $this->load->view('commons/cabecalho');
        $this->load->view('listaClientes');
        $this->load->view('commons/rodape');
    }

    public function teste3() {
        $this->load->Model('Model', '', TRUE);
        $dados['cliente'] = $this->Model->listCliente();
        
        $this->load->view('commons/cabecalho');
        $this->load->view('listaClientes',$dados);
        $this->load->view('commons/rodape');
    }

    public function teste4() {
        $this->load->Model('Model', '', TRUE);
        $dados['cliente'] = $this->Model->listCliente();
        
        $this->load->view('commons/cabecalho');
        $this->load->view('gerarCarne',$dados);
        $this->load->view('commons/rodape');
    }
    
    public function atualizarCLiente(){
        $this->load->Model('Model', '', TRUE);
        $idCliente = $this->input->post(idCliente);
        
        $dados = array (
            'nomeCliente'=> $this->input->post('nomeCliente'),
            'rgCliente'=> $this->input->post('rgCliente'),
            'cpfCliente'=>$this->input->post('cpfCliente'),
            'telCliente'=>$this->input->post('telCliente'),
            'dataNascCliente'=>$this->input->post('dataNascCliente'),
            'enderecoCliente'=>$this->input->post('enderecoCliente'),
            'cidadeCliente'=>$this->input->post('cidadeCliente')
        );
        
        $this->Model->alterarCliente($dados,$idCliente);
    }

}
