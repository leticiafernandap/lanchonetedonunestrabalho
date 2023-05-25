<?php
        include('conexao.php');

        if(isset($_POST['bt_nome'])){
            /*----------------------------------*/
            $email = $_POST['bt_email'];
            $senha = $_POST['bt_senha'];
            $nome = $_POST['bt_nome'];
            $telefone = $_POST['bt_telefone'];
            $endereco = $_POST['bt_endereco'];
            /*----------------------------------*/
            $mysqli -> query("INSERT INTO cadastro (email, senha, nome, endereco, telefone) values('$email', '$senha', '$nome', '$telefone', '$endereco')") or
            die ($mysqli->error);

            if(isset($_POST['nome']) || isset($_POST['endereco'])) {

            if(($_POST['nome']) == 1){
                echo("Parabéns você está logado");

            if(($_POST['endereco']) == 1){
                echo("Parabéns você está logado");
            }    
            }
        }
    }
    