<?php 
    class Cliente {

  private $nome;
  private $cpf;
  private $nasc;
  private $endereco;
  private $sexo;
  private $telefone;    

        function __construct($nome, $cpf, $nasc, $endereco, $sexo, $telefone){
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->nasc = $nasc;
            $this->endereco = $endereco;
            $this->sexo = $sexo;
            $this->telefone = $telefone;
        }

  
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getCpf(){
            return $this->cpf;
        }
        function setCpf($cpf){
            $this->cpf = $cpf;
        }
        function getNasc(){
            return $this->nome;
        }
        function setNasc($nasc){
            $this->nasc = $nasc;
        }
        function getEndereco(){
            return $this->endereco;
        }
        function setEndereco($nome){
            $this->endereco = $endereco;
        }
        function getSexo(){
            return $this->sexo;
        }
        function setSexo($sexo){
            $this->sexo = $sexo;
        }
        function getTelefone(){
            return $this->telefone;
        }
        function setTelefone($telefone){
            $this->telefone = $telefone;
        }    
    
}

?>