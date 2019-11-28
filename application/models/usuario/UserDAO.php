<?php

Class UserDAO extends CI_Model {

    public function __construct() {

        parent::__construct();

        $this->load->database();
    }

    function add($user) {

        $query = $this->db->query(
                "INSERT INTO Usuarios 
               (nome,sobrenome,genero,data_nascimento,endereco,bairro,cidade,
               estado,cep,email,login,senha,perfil_img)VALUES
               ('" . $user->getNome() . "', '" . $user->getSobrenome() . "',
                '" . $user->getGenero() . "', '" . $user->getDataNascimento() . "',  
               '" . $user->getEndereco() . "', '" . $user->getBairro() . "', 
               '" . $user->getCidade() . "', '" . $user->getEstado() . "',
               '" . $user->getCEP() . "', '" . $user->getEmail() . "', 
               '" . $user->getLogin() . "', '" . $user->getSenha() . "',
               '" . $user->getPerfilIMG() . "' )"
        );

        if ($query) {

            $user->setId($this->db->insert_id());

            return true;
        } else {

            return false;
        }
    }

    function del($userId) {

        $_userId = (int) $userId;

        if ($_userId) {

            return $this->db->query("DELETE FROM Usuarios WHERE id='$_userId'");
        }
    }

    function update(Usuario $user) {

        $this->db->query(
                "UPDATE Usuarios 
               SET
               nome= '" . $user->getNome() . "',
               sobrenome= '" . $user->getSobrenome() . "'
               genero= '" . $user->getGenero() . "'
               data_nascimento= '" . $user->getDataNascimento() . "'
               endereco= '" . $user->getEndereco() . "'
               bairro= '" . $user->getBairro() . "'
               cidade= '" . $user->getCidade() . "'
               estado= '" . $user->getEstado() . "'
               cep= '" . $user->getCEP() . "'
               email= '" . $user->getEmail() . "'
               login= '" . $user->getLogin() . "'
               senha= '" . $user->getSenha() . "'
               perfil_img= '" . $user->getPerfilIMG() . "'
               WHERE
               id = '" . $user->getId() . "'"
        );

        return (bool) $this->db->affected_rows();
    }

    function getByLogin($userLogin, $userSenha) {

        $query = $this->db->query("SELECT * FROM Usuarios WHERE (login='$userLogin' or email='$userLogin') and (senha='$userSenha') LIMIT 1");

        if ($query->row()) {

            $row = $query->row();

            $user = new User();

            $user->setId($row->id);
            $user->setNome($row->nome);
            $user->setSobrenome($row->sobrenome);
            $user->setGenero($row->genero);
            $user->setDataNascimento($row->data_nascimento);
            $user->setEndereco($row->endereco);
            $user->setBairro($row->bairro);
            $user->setCidade($row->cidade);
            $user->setEstado($row->estado);
            $user->setCEP($row->cep);
            $user->setEmail($row->email);
            $user->setLogin($row->login);
            $user->setSenha($row->senha);
            $user->setPerfilIMG($row->perfil_img);
            $user->setOnline($row->is_online);
            $user->setPrivate($row->is_private);
            $user->setDataCadastro($row->data_cadastro);

            return $user;
        } else {
            return false;
        }
    }

    function getById($userId) {

        $query = $this->db->query("SELECT * FROM Usuarios WHERE id='$userId' LIMIT 1");

        if ($query->row()) {

            $row = $query->row();

            $user = new User();

            $user->setId($row->id);
            $user->setNome($row->nome);
            $user->setSobrenome($row->sobrenome);
            $user->setGenero($row->genero);
            $user->setDataNascimento($row->data_nascimento);
            $user->setEndereco($row->endereco);
            $user->setBairro($row->bairro);
            $user->setCidade($row->cidade);
            $user->setEstado($row->estado);
            $user->setCEP($row->cep);
            $user->setEmail($row->email);
            $user->setLogin($row->login);
            $user->setSenha($row->senha);
            $user->setPerfilIMG($row->perfil_img);
            $user->setOnline($row->is_online);
            $user->setPrivate($row->is_private);
            $user->setDataCadastro($row->data_cadastro);

            return $user;
        } else {
            return false;
        }
    }

    function getList($limit_start = 0, $limit_end = 1000) {

        $userList = array();

        if ($limit_start === '*' || $limit_start === 'all') {

            $limit_query = '';
        } else {

            $_limit_start = (int) $limit_start;
            $_limit_end = (int) $limit_end;

            $limit_query = "LIMIT $_limit_start,$_limit_end";
        }



        $query = $this->db->query("SELECT * FROM Usuarios ORDER BY nome ASC $limit_query");

        foreach ($query->result() as $row) {

            $user = new User();

            $user->setId($row->id);
            $user->setNome($row->nome);
            $user->setSobrenome($row->sobrenome);
            $user->setGenero($row->genero);
            $user->setDataNascimento($row->data_nascimento);
            $user->setEndereco($row->endereco);
            $user->setBairro($row->bairro);
            $user->setCidade($row->cidade);
            $user->setEstado($row->estado);
            $user->setCEP($row->cep);
            $user->setEmail($row->email);
            $user->setLogin($row->login);
            $user->setSenha($row->senha);
            $user->setPerfilIMG($row->perfil_img);
            $user->setOnline($row->is_online);
            $user->setPrivate($row->is_private);
            $user->setDataCadastro($row->data_cadastro);


            $userList[] = $user;
        }

        return $userList;
    }

}
