<?php
    function abrirConexao() {
        $host = "fdb25.awardspace.net";
        $usuario = "3452158_crud";
        $senha = "eunaosei001";
        $bd = "3452158_crud";


        $mysql = new mysqli ( $host, $usuario, $senha, $bd) or die (mysqli_connect_errno());

        return $mysql;
    }

    ?>