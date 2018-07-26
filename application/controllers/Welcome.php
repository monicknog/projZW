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

        if (isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('nomeUsuario', 'nomeUsuario', 'required');
            $this->form_validation->set_rules('senhaUsuario', 'senhaUsuario', 'required|callback_verificarUsuario');
            if ($this->form_validation->run() == false) {
                $this->load->view('login');
            } else {
                $this->load->Model('Model', '', TRUE);
                $nomeUsuario = $this->input->post('nomeUsuario');

                $_SESSION['nomeUsuario'] = (string) $nomeUsuario;
                $_SESSION['logged_in'] = (bool) true;

                redirect('welcome/area_restrita');
            }
        }
    }

    public function logout() {

// create the data object
        if (isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true) {

// remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            $this->load->view('login');
        } else {
            redirect('/');
        }
    }

    public function verificarUsuario() {
        $nomeUsuario = $this->input->post('nomeUsuario');
        $senhaUsuario = /* colocar o md5 aqui */md5($this->input->post('senhaUsuario'));
        $this->load->Model('Model', '', TRUE);
        if ($this->Model->login($nomeUsuario, $senhaUsuario)) {
            return true;
        } else {
            $this->form_validation->set_message('verificarUsuario', 'Usuário ou senha Incorreto.');
            return false;
        }
    }

    public function area_restrita() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('/');
        } else {

            $this->load->Model('Model', '', TRUE);
            $dados['empresa'] = $this->Model->puxaEmpresa();
            $dados['totalCliente'] = $this->Model->totalCliente();
            $dados['totalCarne'] = $this->Model->totalCarne();
            $dados['ultimos7dias'] = $this->Model->ultimos7dias();
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


            $this->load->view('commons/cabecalho');
            $this->load->view('index', $dados);
            $this->load->view('commons/rodape');
        }
    }

    public function gerarCarne() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

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
    }

    public function login() {
        $this->load->view('login');
    }

    public function teste() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('/');
        } else {

            $this->load->view('commons/cabecalho');
            $this->load->view('index');
            $this->load->view('commons/rodape');
        }
    }

    public function teste2($idCliente) {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else{ 
            $this->load->view('commons/cabecalho');
            $this->load->view('forms');
            $this->load->view('commons/rodape');   
          
            $this->load->Model('Model', '', TRUE);

            
        }
    }

    public function editarEmpresa($idEmpresa) {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);


            echo "<script>alert('teste');</script>";
            $dados = array(
                'empresa' => $this->Model->buscaEmpresa($idEmpresa),
            );


            $this->load->view('commons/cabecalho');

            $this->load->view('index', $dados);

            $this->load->view('commons/rodape');
        }
    }

    public function cadastrarEmpresa() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);
            $idEmpresa = $this->input->post('idEmpresa');

            $dados = array(
                'telEmpresa' => $this->input->post('telEmpresa'),
                'enderecoEmpresa' => $this->input->post('enderecoEmpresa'),
                'cidadeEmpresa' => $this->input->post('cidadeEmpresa')
            );
            $this->Model->atualizar($dados, $idEmpresa);
            $this->index();
        }
    }

    public function cadastrarCliente() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);
            $dados = array(
                'nomeCliente' => $this->input->post('nomeCliente'),
                'rgCliente' => $this->input->post('rgCliente'),
                'cpfCliente' => $this->input->post('cpfCliente'),
                'telCliente' => $this->input->post('telCliente'),
                'dataNascCliente' => $this->input->post('dataNascCliente'),
                'enderecoCliente' => $this->input->post('enderecoCliente'),
                'cidadeCliente' => $this->input->post('cidadeCliente'),
                'data_cadastro' => date("Y-m-d")
            );
            if($this->input->post('idCliente')== null){
                            $this->Model->inserirCliente($dados);

            }else{
                $this->Model->alterarCliente($dados,$this->input->post('idCliente'));
            }
            $dados['cliente'] = $this->Model->listCliente();

            $this->load->view('commons/cabecalho');
            $this->load->view('listaClientes', $dados);
            $this->load->view('commons/rodape');
        }
    }
    
    

    public function teste3() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);
            $dados['cliente'] = $this->Model->listCliente();

            $this->load->view('commons/cabecalho');
            $this->load->view('listaClientes', $dados);
            $this->load->view('commons/rodape');
        }
    }

    public function teste4() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);
            $dados['cliente'] = $this->Model->listCliente();
            $dados['empresa'] = $this->Model->puxaEmpresa();
            $this->load->view('commons/cabecalho');
            $this->load->view('gerarCarne', $dados);
            $this->load->view('commons/rodape');
        }
    }

    public function carneF() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);
            $idCliente = $this->input->post('cliente_idCliente');
            $idEmpresa = $this->input->post('empresa_idEmpresa');
            $cliente['cliente'] = $this->Model->buscaCliente($idCliente);
//$empresa['empresa']=$this->Model->buscaEmpresa($idEmpresa);


            $carne = array(
                'cliente_idCliente' => $idCliente,
                'empresa_idEmpresa' => $idEmpresa,
                'primeiroMesCarne' => $this->input->post('primeiroMesCarne'),
                'primeiroAnoCarne' => $this->input->post('primeiroAnoCarne'),
                'qtdCarne' => $this->input->post('qtdCarne'),
                'vencimentoDiaCarne' => $this->input->post('vencimentoDiaCarne'),
                'valorCarne' => $this->input->post('valorCarne'),
                'dataHoje' => date("Y-m-d")
            );



            $this->Model->inserirCarne($carne);
            $empresa['empresa'] = $this->Model->puxarCarne($idCliente);
            $this->load->view('commons/cabecalho');
            $this->load->view('carne2', $empresa);
            $this->load->view('commons/rodape');
        }
    }

    public function atualizarCLiente($idCliente=null) {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->Model('Model', '', TRUE);

            $dados = array(
                'cliente'=>$this->Model->buscaClientes($idCliente)
            );

            $this->load->view('commons/cabecalho');
            $this->load->view('forms', $dados);
            $this->load->view('commons/rodape');
        }
    }

    public function forms() {
        if (!(isset($_SESSION['nomeUsuario']) && $_SESSION['logged_in'] === true)) {
            redirect('welcome/area_restrita');
        } else {

            $this->load->view('commons/cabecalho');
            $this->load->view('forms.html');
            $this->load->view('commons/rodape');
        }
    }

}
