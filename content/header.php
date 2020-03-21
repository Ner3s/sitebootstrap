<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/"><img src="src/image/logo.png" alt="logo" class="img-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item <?php if($_GET['pag']=='home'){ echo 'active';} ?>">
        <a class="nav-link" href="?pag=home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($_GET['pag']=='produtos'){ echo 'active';} ?>" href="?pag=produtos">Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($_GET['pag']=='contato'){ echo 'active';} ?>" href="?pag=contato">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($_GET['pag']=='sobre'){ echo 'active';} ?>" href="?pag=sobre">Sobre</a>
      </li>
    </ul>
  </div>
</nav>