<?php

Class User extends CI_Model {

    private $id;
    private $nome;
    private $sobrenome;
    private $genero;
    private $datanascimento;
    private $endereco;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    private $email;
    private $login;
    private $senha;
    private $perfilimg;
    private $online;
    private $private;
    private $datacadastro;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getGenero() {
        return $this->genero;
    }

    function getDataNascimento() {
        return $this->datanascimento;
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

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
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

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setDataNascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
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

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfilIMG($perfilimg) {
        $this->perfilimg = $perfilimg;
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
