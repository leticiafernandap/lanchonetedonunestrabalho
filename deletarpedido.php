<?php

    include("conexao.php"); //arquivo php referente ao banco de dados


   if(isset($_GET['codigo_pedido'])){
    $id_pedido = $_GET['codigo_pedido'];
    $sql_consultar = "SELECT * FROM lanchonetesubway_nunes WHERE id_pedido = '$id_pedido'";
    $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
    $pedido = $comando_sql->fetch_assoc();

    
    

   }else{
    echo "Não tem código de consulta disponivel";

   }
    $id_pedido = $_GET['codigo_pedido'];

    var_dump($id_pedido);
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Página de Pedido</title>
</head>

<body>
    <div class="container">
        <h1>Tela de exclusão -  Lanchonete do nunes</h1>
        <h1>ID do pedido: <?php echo $pedido['id_pedido']?></h1>
        <p>Nome: <?php echo $pedido['nome']?></p>
        <p>Endereço: <?php echo $pedido['endereco']?></p>
        <p>Telefone: <?php echo $pedido['telefone']?></p>
        <p>Pedido: <?php echo $pedido['pedido']?></p>   
    </div>

    <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="DELETAR">
                <a class="btn btn-warning" href="listadepedidos.php">Voltar</a>
            </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>