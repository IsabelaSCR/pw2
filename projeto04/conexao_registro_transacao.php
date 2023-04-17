<?php

require ('./Conexao.php');
require ('./fechaConexao.php');

$link = abrirConexao();

$sql = "SELECT * FROM tbl_registroTransacao";
$resultado = mysqli_query($link, $sql)or die("Erro ao tentar consultar");

while($registro = mysqli_fetch_array($resultado)){
    $idTransacao  = $registro['idTrasancao'];
    $dataTransacao  = $registro['dataTrasacao'];
    $horaTransacao  = $registro['horaTransacao'];
    $valorTransacao = $registro['valorTransacao'];
    $transator  = $registro['transatorTransacao '];
    $destinatario = $registro['destinatarioTransacao'];
    $bancoTransator = $registro['bancoTransatorTransacao'];
    $bancoDestinatario = $registro['bancoDestinatarioTransacao'];

   

    echo "id: " . $idTransacao . 'Data' . $dataTransacao . "Hora" . $horaTransacao. "Valor" .$valorTransacao    . "Transator" .$transator;
    "Destinatário" . $destinatario . "Banco Transator" .$bancoTransator. "Banco Destinatário" .$bancoDestinatario;



}

fechaConexao($link);
echo 'Ok'
?>