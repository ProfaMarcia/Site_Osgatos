<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio de Bootstrap</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

   <!-- Inicio do Nav Bar-->
   <nav class="navbar navbar-expand-lg" style="background-color: rgb(215, 137, 249);">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="./logo.png" alt="Bootstrap" width="32" height="32">
        Os Gatos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Curiosidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Preço</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ONGs</a>
          </li>
          </ul>
       </div>

       <div class="text-end">
        <a href="login.php"><button type="button" class="btn btn-success me-2">Login</button></a>
        <a href="cadastro.php"><button type="button" class="btn btn-warning">Cadastro</button></a>
            </div>
    </div>
  </nav>
    <!--Final do Nav Bar-->