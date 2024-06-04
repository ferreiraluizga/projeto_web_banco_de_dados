<?php

//classe publica por padrão
class Conexao {
    //atributos privados da classe
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    //construtor da classe
    public function __construct() {
        // mysqli: propriedades do mysql

        //na linha abaixo, a classe é construida com a atribuição das informações próprias do banco de dados
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        // tentativa de conexão ao banco de dados
        if ($this->conexao->connect_error) {
            die("Falha na Conexão: " . $this->conexao->connect_error); //die: falha sistemica
        }
    }

    // função que retorna a conexão com o banco de dados
    public function getConexao(){
        return $this->conexao;
    }
}

?>