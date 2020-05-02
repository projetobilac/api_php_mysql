<?php
    if($_SERVER ['REQUEST_METHOD']=='POST'){
        //PEGANDO VALORES
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];

        //IMPORTANDO O SCRIPT DO BANCO DE DADOS
        require_once('conexaoBD.php');

        //CRIANDO A QUERY 
        $sql = "UPDATE funcionario SET nome = '$nome', cargo = 
        '$cargo', salario = '$salario' WHERE id = $id";

        //ATUALIZANDO A TABELA DO BANCO DE DADOS 
        if(mysqli_query($con, $sql)){
            echo 'Funcionário atualizado com sucesso';
        }else{
            echo 'Não foi possível atualizar o funcionário'
        }

        //FECHANDO A CONEXÃO COM O BANCO
        mysqli_close($con);
    }


?>