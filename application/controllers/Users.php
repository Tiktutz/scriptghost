<?php

class Users extends CI_Controller {

    public function login() {

        $this->load->view('templates/header_none');
        $this->load->view('pages/login');
        $this->load->view('templates/footer_none');
    }
    
    public function cadastro() {

        $this->load->view('templates/header_none');
        $this->load->view('pages/cadastro');
        $this->load->view('templates/footer_none');
    }

}
