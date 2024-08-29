<?php
include "navbar.php";
?>



<div class="container text-center p-5" >
  <div class="row justify-content-md-center">
    <div class="col-5">
      
<main class="form-signin w-100 m-auto">
  <form method="POST">
    <img class="mb-4" src="./logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Cadastre - se</h1>

    <div class="form-floating">
      <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="Digite seu Nome">
      <label for="floatingInput">Nome</label>
    </div>   
    
    <div class="form-floating">
      <input type="date" name="nascimento" class="form-control" id="floatingInput">
      <label for="floatingInput">Data de Nascimento</label>
    </div>
    
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">E-mail</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha">
      <label for="floatingPassword">Senha</label>
    </div>

     <input name="cadastrar" class="btn btn-primary w-100 py-2" type="submit" value="Cadastrar">

  </form>
</main>
</div>
</div>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


include "bd.php";

if (isset($_POST['cadastrar'])){
  // removes backslashes
$query = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

  if($rows==0){

      // Prepara e executa a consulta SQL
    $query = "INSERT INTO usuarios (id, nome , nascimento, email, senha) 
    VALUES ('NULL','$nome' , '$nascimento', '$email' , '$senha')";
     
    $query = mysqli_query($conn,$query);

    echo "<script>
        alert('Seu cadastro foi cadastrado com sucesso!');
        window.location='login.php';
        </script>";

} else {

  echo "<script>
  alert('Erro ao cadastrar: O seu E-mail já está cadastrado!');
  window.location='cadastro.php';
  </script>";

}
}
}
   
?>