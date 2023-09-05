<?php 
include "conexao.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastra Paciente</title>
</head>
<body>
    <h1> Cadastrar Aluno </h1>
    <a href="index.php">Voltar ao Menu</a>
    <hr>

    <div class= "container">
        <form action="gravarconsulta.php">
            <div class="row">
                <div class="col">
                    <div class = "mt-3">
                        Paciente 
                        <input type = "text" name = "paciente">
                    </div>
                </div>

                <div class="col">
                    <div class = "mt=3">
                        Especialidade
                        <input type = "text" name = "especialidade">
                    </div>
                </div>

                <div class="col">
                    <div class = "mt-3">
                        Data da Consulta 
                        <input type = "date" name = "datacons">
                    </div>
                </div>

                <div class="col">
                    <div class = "mt-3">
                        Horário da Consulta
                        <input type = "time" name = "horacons">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class = "mt-3">
                        <input type ='submit' value="cadastrar" class= "btn btn-info">
                    </div>
                </div>
            </div>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>