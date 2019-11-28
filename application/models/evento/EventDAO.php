<?php

Class EventDAO extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->database();
    }

    function add($event) {

        $query = $this->db->query(
                "INSERT INTO Eventos 
               (nome,descricao,datetime_inicio,datetime_final,categoria,
               endereco,bairro,cidade,estado,cep,banner_img,id_admin)VALUES
               ('" . $event->getNome() . "', '" . $event->getDescricao() . "',
                '" . $event->getDateTimeInicio() . "', '" . $event->getDateTimeFinal() . "',  
               '" . $event->getCategoria() . "', '" . $event->getEndereco() . "',
               '" . $event->getBairro() . "', '" . $event->getCidade() . "',
               '" . $event->getEstado() . "', '" . $event->getCEP() . "',
               '" . $event->getBannerIMG() . "', '" . $this->session->userdata('id') . "' )"
        );

        if ($query) {

            $event->setId($this->db->insert_id());

            return true;
        } else {

            return false;
        }
    }

    function del($eventId) {

        $_eventId = (int) $eventId;

        if ($_eventId) {

            return $this->db->query("DELETE FROM Eventos WHERE id='$_eventId'");
        }
    }

    function update(Evento $event) {

        $this->db->query(
                "UPDATE Eventos 
               SET
               nome= '" . $event->getNome() . "',
               descricao= '" . $event->getDescricao() . "'
               datetime_inicio= '" . $event->getDateTimeInicio() . "'
               datetime_final= '" . $event->getDateTimeFinal() . "'    
               categoria= '" . $event->getCategoria() . "'
               endereco= '" . $event->getEndereco() . "'
               bairro= '" . $event->getBairro() . "'
               cidade= '" . $event->getCidade() . "'
               estado= '" . $event->getEstado() . "'
               cep= '" . $event->getCEP() . "'
               banner_img= '" . $event->getBannerIMG() . "'
               is_online= '" . $event->getOnline() . "'    
               is_private= '" . $event->getPrivate() . "'
               WHERE
               id = '" . $event->getId() . "'"
        );

        return (bool) $this->db->affected_rows();
    }

    function getById($eventId) {

        $query = $this->db->query("SELECT * FROM Eventos WHERE id='$eventId' LIMIT 1");

        if ($query->row()) {

            $row = $query->row();

            $event = new Event();

            $event->setId($row->id);
            $event->setNome($row->nome);
            $event->setDescricao($row->descricao);
            $event->setDateTimeInicio($row->datetime_inicio);
            $event->setDateTimeFinal($row->datetime_final);
            $event->setCategoria($row->categoria);
            $event->setEndereco($row->endereco);
            $event->setBairro($row->bairro);
            $event->setCidade($row->cidade);
            $event->setEstado($row->estado);
            $event->setCEP($row->cep);
            $event->setBannerIMG($row->banner_img);
            $event->setIdAdmin($row->id_admin);
            $event->setOnline($row->is_online);
            $event->setPrivate($row->is_private);
            $event->setDataCadastro($row->data_cadastro);

            return $event;
        } else {
            return false;
        }
    }

    function getList($limit_start = 0, $limit_end = 1000) {

        $eventList = array();

        if ($limit_start === '*' || $limit_start === 'all') {

            $limit_query = '';
        } else {

            $_limit_start = (int) $limit_start;
            $_limit_end = (int) $limit_end;

            $limit_query = "LIMIT $_limit_start,$_limit_end";
        }



        $query = $this->db->query("SELECT * FROM Eventos ORDER BY id ASC $limit_query");

        foreach ($query->result() as $row) {

            $event = new Event();

            $event->setId($row->id);
            $event->setNome($row->nome);
            $event->setDescricao($row->descricao);
            $event->setDateTimeInicio($row->datetime_inicio);
            $event->setDateTimeFinal($row->datetime_final);
            $event->setCategoria($row->categoria);
            $event->setEndereco($row->endereco);
            $event->setBairro($row->bairro);
            $event->setCidade($row->cidade);
            $event->setEstado($row->estado);
            $event->setCEP($row->CEP);
            $event->setBannerIMG($row->banner_img);
            $event->setIdAdmin($row->id_admin);
            $event->setOnline($row->is_online);
            $event->setPrivate($row->is_private);
            $event->setDataCadastro($row->data_cadastro);


            $eventList[] = $event;
        }

        return $eventList;
    }

}
