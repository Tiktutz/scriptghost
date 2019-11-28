<?php

class Users extends CI_Controller {

    public $UserDAO;
    public $EventDAO;

    public function __construct() {

        parent::__construct();

        $this->load->model('usuario/User');
        $this->load->model('usuario/UserDAO');
        $this->load->model('evento/Event');
        $this->load->model('evento/EventDAO');
    }

    public function checkAcess() {

        if ($this->session->userdata('online') == TRUE) {

            return true;
        } else {
            return false;
        }
    }

    public function authenticate() {
        if ($this->checkAcess()) {
            redirect('logout');
        } else {

            $login = $this->input->post('login');
            $senha = $this->input->post('senha');

            if ($this->UserDAO->getByLogin($login, $senha)) {

                $user = $this->UserDAO->getByLogin($login, $senha);

                $this->session->set_userdata('id', $user->getId());
                $this->session->set_userdata('nome', $user->getNome());
                $this->session->set_userdata('sobrenome', $user->getSobrenome());
                $this->session->set_userdata('genero', $user->getGenero());
                $this->session->set_userdata('datanascimento', $user->getDataNascimento());
                $this->session->set_userdata('endereco', $user->getEndereco());
                $this->session->set_userdata('bairro', $user->getBairro());
                $this->session->set_userdata('cidade', $user->getCidade());
                $this->session->set_userdata('estado', $user->getEstado());
                $this->session->set_userdata('cep', $user->getCEP());
                $this->session->set_userdata('email', $user->getEmail());
                $this->session->set_userdata('login', $user->getLogin());
                $this->session->set_userdata('senha', $user->getSenha());
                $this->session->set_userdata('perfilimg', $user->getPerfilIMG());
                $this->session->set_userdata('online', TRUE);
                $this->session->set_userdata('private', $user->getPrivate());
                $this->session->set_userdata('datacadastro', $user->getDataCadastro());

                redirect('/');
            } else {
                redirect('/logout');
            }
        }
    }

    public function login() {
        if ($this->checkAcess()) {
            redirect('logout');
        } else {

            $this->load->view('templates/header_none');
            $this->load->view('pages/login');
            $this->load->view('templates/footer_none');
        }
    }

    public function logout() {

        $this->session->sess_destroy();

        redirect('login');
    }

    public function cadastro() {
        if ($this->checkAcess()) {
            redirect('logout');
        } else {

            $this->data['result'] = NULL;
            $this->data['erros'] = NULL;

            $user = new User();

            if (!empty($this->input->post('usuario'))) {

                $this->form_validation->set_rules('usuario[login]', 'Login', 'required', array('required' => 'Você deixou o campo login em branco.'));

                if ($this->form_validation->run() == FALSE) {
                    $this->data['result'] = 'error';
                    $this->data['erros'] = validation_errors('<li>', '</li>');
                } else {

                    $post = $this->input->post('usuario');

                    $user->setNome($post['nome']);
                    $user->setSobrenome($post['sobrenome']);
                    $user->setGenero($post['genero']);
                    $user->setDataNascimento($post['data']);
                    $user->setEndereco($post['endereco']);
                    $user->setBairro($post['bairro']);
                    $user->setCidade($post['cidade']);
                    $user->setEstado($post['estado']);
                    $user->setCEP($post['cep']);
                    $user->setEmail($post['email']);
                    $user->setLogin($post['login']);
                    $user->setSenha($post['senha']);
                    if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {

                        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
                        $novo_nome = md5(time()) . $extensao;
                        $diretorio = "perfilimg/";

                        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

                        $user->setPerfilIMG($diretorio . $novo_nome);
                    }if (($_FILES['arquivo']['name'] == "" || $_FILES['arquivo']['name'] == " ") && $user->getGenero() === "masculino") {
                        $user->setPerfilIMG('assets/img/anime3.png');
                    }if (($_FILES['arquivo']['name'] == "" || $_FILES['arquivo']['name'] == " ") && $user->getGenero() === "feminino") {
                        $user->setPerfilIMG('assets/img/anime6.png');
                    }

                    $add = $this->UserDAO->add($user);

                    if ($add) {

                        $this->data['result'] = 'success';

                        $user = new User();
                    } else {

                        $this->data['result'] = 'error';
                    }
                }
            }

            $this->data['user'] = $user;

            $this->load->view('templates/header_none', $this->data);
            $this->load->view('pages/cadastro', $this->data);
            $this->load->view('templates/footer_none', $this->data);
        }
    }

    public function cadastro_evento() {
        if ($this->checkAcess()) {

            $this->data['result'] = NULL;
            $this->data['erros'] = NULL;
            $this->data['logado'] = TRUE;

            $event = new Event();

            if (!empty($this->input->post('evento'))) {

                $this->form_validation->set_rules('evento[nome]', 'Nome', 'required', array('required' => 'Você deixou o campo nome em branco.'));

                if ($this->form_validation->run() == FALSE) {
                    $this->data['result'] = 'error';
                    $this->data['erros'] = validation_errors('<li>', '</li>');
                } else {

                    $post = $this->input->post('evento');

                    $event->setNome($post['nome']);
                    $event->setDateTimeInicio($post['inicio']);
                    $event->setDateTimeFinal($post['final']);
                    $event->setCategoria($post['categoria']);
                    $event->setEndereco($post['endereco']);
                    $event->setBairro($post['bairro']);
                    $event->setCidade($post['cidade']);
                    $event->setEstado($post['estado']);
                    $event->setCEP($post['cep']);
                    $event->setDescricao($post['descricao']);
                    if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {

                        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
                        $novo_nome = md5(time()) . $extensao;
                        $diretorio = "bannerimg/";

                        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

                        $event->setBannerIMG($diretorio . $novo_nome);
                    }if ($_FILES['arquivo']['name'] == "" || $_FILES['arquivo']['name'] == " ") {
                        $event->setBannerIMG('assets/img/evento.jpg');
                    }

                    $add = $this->EventDAO->add($event);

                    if ($add) {

                        $this->data['result'] = 'success';

                        $event = new Event();
                    } else {

                        $this->data['result'] = 'error';
                    }
                }
            }

            $this->data['event'] = $event;

            $this->load->view('templates/header', $this->data);
            $this->load->view('pages/cadastro_evento', $this->data);
            $this->load->view('templates/footer', $this->data);
        } else {
            redirect('logout');
        }
    }

}
