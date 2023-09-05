<?php
include "conexao.php";

$paciente = $_GET['paciente'];
$especialidade = $_GET['especialidade'];
$datacons = $_GET['datacons'];
$horacons = $_GET['horacons'];

$sql = "insert into tblconsulta (paciente, especialidade, datacons, horacons) 
values ('$paciente', '$especialidade', '$datacons', '$horacons')";

$qry = mysqli_query ($con, $sql);

if ($qry) {
    header ('location:listarconsulta.php');
} else {
    echo "<h1>Registro não cadastrado</h1>";
}