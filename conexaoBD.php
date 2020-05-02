<?php

    //Definindo constantes

    define('HOST', 'localhost');
    define('USER', 'usuario');
    define('PASS', 'senha');
    define('DB', 'banco');
    

    //CONECTANDO O BANCO DE DADOS
    $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable to Connect');
    
?>