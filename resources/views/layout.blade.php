<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Muuvies | Home</title>
    <!-- LINK CSS PERSONALIZADO -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- HEADER -->
    <nav class="navbar navbar-expand-lg bg-dark"> 
        <div class="container-fluid" >
            <a class="navbar-brand text-white" href="/"> 
            <img src="/images/logo.png" class="img-fluid" alt="Muuvies Logo" width="100" height="100">    
            <p id="muuvies" class="text-white">Muuvies</p>
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item" id="item-txt">
          <a class="nav-link active text-white" aria-current="page" href="/">Home</a> 
        </li>
        <li class="nav-item" id="item-txt">
          <a class="nav-link text-white" href="#">Login</a>
        </li>
        <li class="nav-item" id="item-txt">
          <a class="nav-link text-white" href="{{ route('gerenciamento') }}">Área do Adm</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
    <div class="main-content">
        @yield('content')
    </div>
</main>


    <!-- FOOTER -->
    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Sobre</h5>
                    <p>A 'Muuvies' tem sua origem com base no trocadilho da palavra "Movies" (filmes) com o rugido "Muu" de uma vaca que simboliza nossa logo 🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄🐄</p>
                </div>
                <div class="col-md-3">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Página Inicial</a></li>
                        <li><a href="#" class="text-white">Login</a></li>
                        <li><a href="{{ route('gerenciamento') }}" class="text-white">Área do Adm.</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p>&copy; 2024 Muuvies. Todos os direitos reservados.</p>
                </div> 
            </div>
        </div>
    </footer>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
