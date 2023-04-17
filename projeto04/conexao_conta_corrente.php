<?php

require ('./Conexao.php');
require ('./fechaConexao.php');

$link = abrirConexao();

$sql = "SELECT * FROM tbl_conta_corrente";
$resultado = mysqli_query($link, $sql)or die("Erro ao tentar consultar");

while($registro = mysqli_fetch_array($resultado)){
  $agenciaConta  = $registro['agenciaConta'];
  $numeroConta  = $registro['numeroConta'];
  $nomeCliente  = $registro['nomeCliente'];
  $senhaConta = $registro['senhaConta'];
  $saldoConta  = $registro['saldoConta '];
 

  echo "Agencia: " . $agenciaConta . 'Número' . $numeroConta . "Nome" . $nomeCliente. "Senha" .$senhaConta. "Saldo" .$saldoConta;



}

fechaConexao($link);
echo 'OK'
?>