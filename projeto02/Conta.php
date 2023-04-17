<?php
class Conta{
    
  private $agencia;
  private $conta;
  private $cliente;
  private $senha;
  private $saldo;


       function construct($agencia, $conta, $cliente, $senha, $saldo){
            $this->agencia = $agencia;
            $this->conta = $conta;
            $this->cliente = $cliente;
            $this->senha = $senha;
            $this->saldo = $saldo;
        }

        function getAgencia(){
            return $this->agencia;
        }
        function setAgencia($agencia){
            $this->agencia = $agencia;
        }
        function getConta(){
            return $this->conta;
        }
        function setConta($conta){
            $this->conta = $conta;
        }
        function getCliente(){
            return $this->cliente;
        }
        function setCliente($cliente){
            $this->cliente = $cliente;
        }
        function getSenha(){
            return $this->senha;
        }
        function setSenha($agencia){
            $this->senha = $senha;
        }
        function getSaldo(){
            return $this->saldo;
        }
        function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        
        
        
}
 ?>
