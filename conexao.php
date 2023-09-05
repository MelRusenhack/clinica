<?php
$servidor = 'localhost';
$usuario = 'root';
$senha ='';
$bd = 'bdtest';

$con = mysqli_connect($servidor,$usuario,$senha,$bd);

if (!$con){
    echo "Erro de conexão";
} 