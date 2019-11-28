<?php

class Pages extends CI_Controller {
    
    public $EventDAO;

    public function __construct() {

        parent::__construct();

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

    public function index() {
        
        if($this->checkAcess()){
            $this->data['logado'] = TRUE;
        }else{
            $this->data['logado'] = FALSE;
        }
        
        $this->data['Eventos'] = $this->EventDAO->getList(0,5);
        
        $this->data['Eventos1'] = $this->EventDAO->getList(6,16);
        
        $this->data['Eventos2'] = $this->EventDAO->getList(17,27);
        
        $this->data['Eventos3'] = $this->EventDAO->getList(28,38);
        
        $this->data['Eventos4'] = $this->EventDAO->getList(39,49);


        $this->load->view('templates/header', $this->data);
        $this->load->view('pages/home', $this->data);
        $this->load->view('templates/footer', $this->data);
    }

}
