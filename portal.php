<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Adoção de Gatos</title>
    <link href="./bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portal de Adoção de Gatos</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bem-vindo, <span id="username">Usuário</span></a>
                    </li>
                </ul>
            </div>
            <div class="text-end">
        <a href="login.php"><button type="button" class="btn btn-danger me-2">Deslogar</button></a>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container mt-4">
        <div class="row">
            <!-- Card de Adoção de Gato -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://vetplus.vet.br/wp-content/uploads/2019/12/meme-da-mulher-gritando-com-o-gato-na-mesa-og-1080x630.jpg" height="250" class="card-img-top" alt="Gato 1">
                    <div class="card-body">
                        <h5 class="card-title">Gato 1</h5>
                        <p class="card-text">Esse é o Gato 1, um adorável gatinho esperando por um lar.</p>
                        <a href="#" class="btn btn-primary">Adotar</a>
                    </div>
                </div>
            </div>
            <!-- Card de Adoção de Gato -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://img.quizur.com/f/img5c22d768d51465.93685599.jpg?lastEdited=1545787246" height="250" class="card-img-top" alt="Gato 2">
                    <div class="card-body">
                        <h5 class="card-title">Gato 2</h5>
                        <p class="card-text">Esse é o Gato 2, um gatinho carinhoso pronto para ser adotado.</p>
                        <a href="#" class="btn btn-primary">Adotar</a>
                    </div>
                </div>
            </div>
            <!-- Card de Adoção de Gato -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.patasdacasa.com.br/sites/default/files/styles/article_detail_1200/public/2023-10/memes-gatos.jpg.webp?itok=zx9ELNzv" height="250" class="card-img-top" alt="Gato 3">
                    <div class="card-body">
                        <h5 class="card-title">Gato 3</h5>
                        <p class="card-text">Esse é o Gato 3, ele adora brincar e está ansioso para te conhecer.</p>
                        <a href="#" class="btn btn-primary">Adotar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript do Bootstrap e Script personalizado -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simulação do nome do usuário logado
        const username = "Márcia Silva"; // Substitua pelo nome do usuário logado
        document.getElementById("username").textContent = username;
    </script>
</body>
</html>
