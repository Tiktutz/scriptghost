<?php

class Pages extends CI_Controller {

    public function checkAcess() {

        if ($this->session->userdata('online') == TRUE) {

            return true;
        } else {
            return false;
        }
    }

    public function index() {
        
        if($this->checkAcess()){
            $this->data['logado'] = TRUE;
        }else{
            $this->data['logado'] = FALSE;
        }


        $this->load->view('templates/header', $this->data);
        $this->load->view('pages/home', $this->data);
        $this->load->view('templates/footer', $this->data);
    }

}
