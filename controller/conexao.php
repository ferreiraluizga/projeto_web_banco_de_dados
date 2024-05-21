<?php

//classe publica por padrão
class Conexao {
    //atributos privados da classe
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    public function __construct() {
        //mysqli: propriedades do mysql
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->connect_error) {
            //die: falha sistemica
            die("Falha na Conexão: " . $this->conexao->connect_error);
        }
    }

    public function getConexao(){
        return $this->conexao;
    }
}

?>