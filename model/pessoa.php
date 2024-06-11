<?php

// importação do arquivo conexao.php para a página e verificação de funcionamento e existência do mesmo
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/conexao.php';

// classe publica Pessoa
class Pessoa{

    // atributos privados do usuário
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;

    // métodos get (retornar valor da variavel) e set (inseir valor da variavel) para cada variavel
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }

    // método construtor da classe
    public function __construct(){
        $this->conexao = new Conexao();
    }

    // função publica que insere os dados do usuário no banco de dados
    public function inserir(){
        // $sql: armazena o código de inserção na dados na tabela pessoa do banco de dados
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        // $stmt: recurso do banco de dados que prepara o banco para a inserção de dados, usando como parâmetro o comando da variavel $sql
        $stmt = $this->conexao->getConexao()->prepare($sql);
        
        /* na linha abaixo a variavel $stmt passa as informações do 
        usuário através do bind_param (aloca as variaveis de acordo com a linha de código
        do $sql), que possui como parâmetro as variveis da classe Pessoa,
        que por sua vez, busca seus valores no pessoaController.php, onde há
        ação do formulário */
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        
        return $stmt->execute(); // o retorno da função inserir, é executar o $stmt, concluindo o processo de inserção no banco de dados
    }

    //função publica que lista dados do usuário com base no banco de dados
    public function listar(){
        // $sql: armazena o código de seleção de dados do banco de dados
        $sql = "SELECT * FROM pessoa";

        /* $stmt: recurso do banco de dados que prepara o banco para a inserção de dados, 
        usando como parâmetro o comando da variavel $sql */
        $stmt = $this->conexao->getConexao()->prepare($sql);
        
        $stmt->execute(); // execução do comando contido em $sql
        
        $result = $stmt->get_result(); // atribuindo valores vindos do banco de dados à varivavel $result
        
        $pessoas = []; // criação de um vetor para armazenar os dados de uma pessoa (usuário)
        
        // enquanto houverem valores, eles serão atribuitos ao vetor 
        while($pessoa = $result->fetch_assoc()){ //fetch_assoc: retorna uma matriz associativa, possibilitando o formato de lista
            $pessoas[] = $pessoa;
        }

        return $pessoas; // a função retorna o vetor com dados atribuidos
    }

    public function buscarPorId($id){
        $sql = "SELECT * FROM pessoa WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    //função publica que atualiza dados do usuário com base no banco de dados
    public function atualizar($id){
        $sql = "UPDATE pessoa SET nome = ?, endereco = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, telefone = ?, celular = ? WHERE id = ?";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssssi', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular, $id);
        return $stmt->execute();
    }
}

?>