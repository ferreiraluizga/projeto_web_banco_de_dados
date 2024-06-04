<?php

//importação do arquivo pessoa.php para a página e verificação de funcionamento e existência do mesmo
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/model/pessoa.php';

//classe pública PessoaController
class PessoaController{
    private $pessoa; //variavel para armazenar dados do usuário

    //construtor da classe
    public function __construct(){
        $this->pessoa = new Pessoa(); //instanciação da classe pessoa.php
        if($_GET['acao'] == 'inserir'){ //verificando ação do formulario do index.php
            $this->inserir(); //caso verdadeira, armazena dados do usuario dados do usuário
        }       
    }

    //função publica para inserir dados do usuário
    public function inserir(){
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        $this->pessoa->inserir();
    }

    //função publica que lista dados do usuário
    public function listar(){
        return $this->pessoa->listar();
    }
}

new PessoaController(); //instanciação da classe

?>