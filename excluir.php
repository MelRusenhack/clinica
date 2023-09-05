<?php

include "conexao.php";
$id = $_GET['id'];
$sql = "delete from tblconsulta where id=".$id;

mysqli_query($con,$sql);
header ('Location')