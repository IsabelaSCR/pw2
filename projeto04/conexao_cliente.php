<?php
    require 'Conexao.php';

    $link = abrirConexao();

    $sql = "SELECT * FROM tbl_cliente";
    $resultado = mysqli_query($link, $sql) or die("Erro ao tentar consultar");

    while($registro = mysqli_fetch_array($resultado)) {
        $nome     = $registro['nomeCliente'];
        $cpf   = $registro['cpfCliente'];
        $dataNasc   = $registro['nascCliente'];
        $endereco   = $registro['enderecoCliente'];
        $sexo   = $registro['sexoCliente'];
        $telefone   = $registro['telefoneCliente'];

        echo "nome: " . $nome . " cpf: " . $cpf . 
        " data de nascimento: " . $dataNasc . " endereÃ§o: " . $endereco . 
        " sexo: " . $sexo . " telefone: " . $telefone . "<br>";

    }

    fechaConexao($link);
    echo "ok";

?>
