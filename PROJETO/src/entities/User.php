<?php

class User {

    private $username;
    private $password;
    private $userid;
    private $userln;
    private $usercpf;
    private $userrg;
    private $usertfc;
    private $usertfr;
    private $useremail;
    private $userendereco;
    private $usercomplemento;
    private $usercidade;
    private $userestado;
    private $usercep;
    private $userpergunta;
    private $userresposta;



    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = sha1($password);
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }

    public function getuserid() {
        return $this->userid;
    }

    public function setUserln($userln) {
        $this->userln = $userln;
    }

    public function getUserln() {
        return $this->userln;
    }

    public function setUsercpf($usercpf) {
        $this->usercpf = $usercpf;
    }

    public function getUsercpf() {
        return $this->usercpf;
    }

    public function setUserrg($userrg) {
        $this->userrg = $userrg;
    }

    public function getUserrg() {
        return $this->userrg;
    }

    public function setUsertfc($usertfc) {
        $this->usertfc = $usertfc;
    }

    public function getUsertfc() {
        return $this->usertfc;
    }

    public function setUsertfr($usertfr) {
        $this->usertfr = $usertfr;
    }

    public function getUsertfr() {
        return $this->usertfr;
    }

    public function setUseremail($useremail) {
        $this->useremail = $useremail;
    }

    public function getUseremail() {
        return $this->useremail;
    }

    public function setUserendereco($userendereco) {
        $this->userendereco = $userendereco;
    }

    public function getUserendereco() {
        return $this->userendereco;
    }

    public function setUsercomplemento($usercomplemento) {
        $this->usercomplemento = $usercomplemento;
    }

    public function getUsercomplemento() {
        return $this->usercomplemento;
    }

    public function setUsercidade($usercidade) {
        $this->usercidade = $usercidade;
    }

    public function getUsercidade() {
        return $this->usercidade;
    }

    public function setUserestado($userestado) {
        $this->userestado = $userestado;
    }

    public function getUserestado() {
        return $this->userestado;
    }

    public function setUsercep($usercep) {
        $this->usercep = $usercep;
    }

    public function getUsercep() {
        return $this->usercep;
    }

    public function setUserpergunta($userpergunta) {
        $this->userpergunta = $userpergunta;
    }

    public function getUserpergunta() {
        return $this->userpergunta;
    }

    public function setUserresposta($userresposta) {
        $this->userresposta = $userresposta;
    }

    public function getUserresposta() {
        return $this->userresposta;
    }

}

    

    