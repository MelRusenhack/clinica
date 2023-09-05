<?php 
include "conexao.php";
$sql = "select * from tblconsulta";
$qry = mysqli_query ($con,$sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> Listar Consultas </title>
</head>

<body>
    <h1> Listar Consultas </h1>
    <a href="index.php"> Voltar ao Menu </a>
    <hr>

    <table class = "table">
        <tr>
            <td>id</td>
            <td>Paciente</td>
            <td>Especialidade</td>
            <td>Data da Consulta</td>
            <td>Horário da consulta</td>
            <td colspan=2>Ações</td>
        </tr>

    <?php 
        echo"<tr>";
    while ($linha = mysqli_fetch_array($qry)){
        $id=$linha['id'];
        echo "<td>".$linha ['id']."</td>";
        echo "<td>".$linha ['paciente']."</td>";
        echo "<td>".$linha ['especialidade']."</td>";
        echo "<td>".$linha ['datacons']."</td>";
        echo "<td>".$linha ['horacons']."</td>";
        echo "<td><a href='editar.php?id={$id}'><i class='bi bi-pencil-square'></i>Editar</a></td>";
        echo "<td><a href='excluir.php?id={$id}'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>