<?php
include "navbar.php";
?>

<br>
<br>

<div class="container text-center p-5" >
  <div class="row justify-content-md-center">
    <div class="col-5">
      
<main class="form-signin w-100 m-auto">
  <form method="POST">
    <img class="mb-4" src="./logo.png" alt="" width="72" height="60">
    <h1 class="h3 mb-3 fw-normal">Faça o login</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Lembre me!
      </label>
    </div>
    <input class="btn btn-primary w-100 py-2" name="entrar" type="submit" value="Entrar">   
  </form>
</main>
</div>
</div>

<?php 
error_reporting(0);
/// session_start inicia a sessão 
include('bd.php');
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

// If form submitted, insert values into the database.
if (isset($_POST['entrar'])){

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = mysqli_query($conn,$sql);
 $rows = mysqli_num_rows($result);

 if($rows==1){
   $_SESSION['email'] = $email;
  
  header("Location: portal.php");
  }else{

  echo "<script>
 alert('Não possível entrar: E-mail ou senha estão errados, ou não existe!');
 window.location='login.php';
</script>";
}
  }
  ?>

  