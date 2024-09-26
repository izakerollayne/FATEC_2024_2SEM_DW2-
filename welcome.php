<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <br>
        </b>Bem-vindo ao cadastro de solicitações</h1>
    </div>
    <p>

    <div class="d-grid gap-2 col-6 mx-auto" style="margin-bottom:20px">
  <a href="cadastro.php"><button class="btn btn-primary" type="button">Cadastrar solicitações</button></a>
  
<!-- Example single danger button -->
<div class="btn-group" style= "margin-left:5px">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Visualizar solicitações
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="dsm.php">DSM</a></li>
    <li><a class="dropdown-item" href="ge.php">GE</a></li>
 
  </ul>
</div><br>
</div>
        <!-- 
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        -->
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>