<?php

namespace OS\Tabelas;

class Usuarios {
    protected $id;

    protected $login;
    
    protected $senha;
    
    protected $nome;
    
    protected $area_id;
    
    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getArea() {
        return $this->area_id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setArea($area_id) {
        $this->area_id = $area_id;
    }


            
}
