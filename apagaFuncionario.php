<?php
//PEGANDO O ID
$id = $_GET['id'];

//IMPORTANDO O BANCO DE DADOS
require_once('conexãoBD.php');


//CRIANDO A QUERY
$sql = "DELETE FROM funcionario WHERE id=$id";


//APAGANDO O DADO DO BANCO DE DADOS
if(mysqli_query($con,$sql)){
    echo 'Funcionário excluído com sucesso';
}else{
    'Não foi possível excluir o funcionário';

    //FECHA A CONEXÃO 
    mysqli_close($con);
}
?>