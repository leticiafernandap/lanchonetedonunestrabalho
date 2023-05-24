<?php
  
    if(isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0 ) {
            echo "Preencha seu email";
        } else if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
         
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
            $sql_code = $mysqli->query($sqli_code) or die("Falha na execução do código SQL: " . $mysqli->error);
            $quantidade = $sql_query->num_rows;
            
            if($quantidade == 1 ) {
                $usuario = $sql_query->fetch_assoc();

            } else {
                echo "Falha ao logar! Email ou senha incorretos";
            }
        }

        }

    
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Página de login </title>
</head>

<body>
<div class="container">
        <h1>Tela de Login - Buteco do Nunes</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="">Email:</label>
                <input type="text" name="bt_nome">
            </div>
            <div class="mb-3">
                <label for="">Senha:</label>
                <input type="password" name="bt_senha">
            </div>
            <div class="mb-3">
               <input class="btn btn-success" type="submit" value="Entrar">
               <a  class="btn btn-danger" href="index.php">Cancelar</a>
            </div>
        