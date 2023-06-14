<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="cub.css">
    <title>Cadastro</title>
    <script src="zere.js"></script>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="login">
        <h1>Faça seu Cadastro</h1>
        <form action="listadepedidos.php" method="get">
            <input type="text" name="Nome" placeholder="Nome" required maxlength="15"><br /><br />
            <input type="text" name="Sobrenome" placeholder="Sobrenome" required maxlength="25"><br /><br />
            <input type="text" name="Idade" placeholder="Idade" pattern="[0-9]{2}" required min="18" max="80" maxlength="2"><br /><br />
            <input type="text" id="cpfInput" maxlength="14" oninput="formatarCPF()" placeholder="CPF" required> <br><br>
            <input type="text" id="cepInput" maxlength="9" oninput="formatarCEP()" placeholder="CEP" required> <br><br>
            <input type="email" id="emailInput" placeholder="E-mail" required>
            <span id="emailError" style="color: red; display: none;">Digite um e-mail válido.</span>><br /><br />
            <input type="password" name="senha" placeholder="Senha" required maxlength="20"> <br /><br />
            <input class="btn btn-success" type="submit" value="entrar">
            <input class="btn btn-danger" type="reset" value="limpar">
            <a class="btn btn-primary" href="login1.php" role="button">Voltar</a>
        </form>
    </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>