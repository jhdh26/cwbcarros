<?php
include_once('conexao.php');
include('protect.php');

$sql = "SELECT * FROM tab_carros ORDER BY id DESC";

$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X- UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="pin.css">
    <title>Painel</title>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="height: 100px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >CWB CARROS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="painel.php">Carros</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="painelpecas.php">Peças</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<center>
    <table class="content-table">
        <thead>
            <tr>
                <th class="titulo">ID</th>
                <th class="titulo">Nome</th>
                <th class="titulo">Ano</th>
                <th class="titulo">KM</th>
                <th class="titulo">Preco</th>
                <th class="titulo">Status</th>
                <th class="titulo">Funcoes</th>
            </tr>
        </thead>
        <?php while($dado = $result->fetch_array()){ ?>
        <tbody>
            <tr>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["ano"]; ?></td>
                <td><?php echo $dado["km"]; ?></td>
                <td><?php echo $dado["preco"]; ?></td>
                <td><?php echo $dado["stats"]; ?></td>
                <td><a href="savecompra.php?id=<?php echo $dado["id"]; ?>">Comprar</a>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <p>
        <br>
        <a href="logout.php">Sair</a>
    </p>
    </center>
    

    <footer class="text-center text-white navbar-fixed-bottom" style="background-color: #F59518;">
  <div class="container pt-4">
    <section class="mb-4">
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>

      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>

  </div>



  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="#">CWBCarros.com</a>
  </div>

</footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>