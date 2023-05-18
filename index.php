<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="meucodigo.css">
    <title>Página1</title>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <br>
    <br>
    <br>
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/lanchedaquebrada.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/lanchesubwayecoca.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/lancheteriaki.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <br>
    <h1>OS MAIS PEDIDOS</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4"> <!-- 1º Linha -->
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/subs.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">......</p>
                    <a href="#" class="btn btn-success">COMPRAR</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/subs.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">;.....</p>
                    <a href="#" class="btn btn-success">COMPRAR</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/subs.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">....</p>
                    <a href="#" class="btn btn-success">COMPRAR</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="img/subs.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">....</p>
                    <a href="#" class="btn btn-success">COMPRAR</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>