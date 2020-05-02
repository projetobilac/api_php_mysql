<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //PEGANDO VALORES
    $nome = $_POST ['nome'];
    $cargo = $_POST ['cargo'];
    $salario = $_POST ['salario'];

    //CRIANDO O MÉTODO SQL
    $sql = "INSERT INTO funcionario (nome, cargo, salario)
    VALUES ('$nome', '$cargo', '$salario')";

    //IMPORTANDO O SCRIPT DO BANCO
    require_once ('conexaoBD.php');


    if(mysqli_query($con,$sql)){
        echo 'Funcionário Cadastrado com sucesso'
    }else{
        echo 'Não foi possível cadastrar o funcionário'
    }

    //FECHANDO O BANCO DE DADOS
    mysqli_close($con);

}

?>