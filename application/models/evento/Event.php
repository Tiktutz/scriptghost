<?php

Class Event extends CI_Model {

    private $id;
    private $nome;
    private $descricao;
    private $datetimeinicio;
    private $datetimefinal;
    private $categoria;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    private $bannerimg;
    private $idadmin;
    private $online;
    private $private;
    private $datacadastro;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDateTimeInicio() {
        return $this->datetimeinicio;
    }
    
    function getDateTimeFinal() {
        return $this->datetimefinal;
    }
    
    function getCategoria() {
        return $this->categoria;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCEP() {
        return $this->cep;
    }

    function getBannerIMG() {
        return $this->bannerimg;
    }

    function getIdAdmin() {
        return $this->idadmin;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPerfilIMG() {
        return $this->perfilimg;
    }

    function getOnline() {
        return $this->online;
    }

    function getPrivate() {
        return $this->private;
    }

    function getDataCadastro() {
        return $this->datacadastro;
    }

    function setId($id) {
        $this->id = (int) $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    function setDateTimeInicio($datetimeinicio) {
        $this->datetimeinicio = $datetimeinicio;
    }
    
    function setDateTimeFinal($datetimefinal) {
        $this->datetimefinal = $datetimefinal;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCEP($cep) {
        $this->cep = $cep;
    }

    function setBannerIMG($bannerimg) {
        $this->bannerimg = $bannerimg;
    }

    function setIdAdmin($idadmin) {
        $this->idadmin = $idadmin;
    }

    function setOnline($online) {
        $this->online = $online;
    }

    function setPrivate($private) {
        $this->private = $private;
    }

    function setDataCadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

}
