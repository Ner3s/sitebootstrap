<nav class="navbar stick-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="src/image/logo.png" alt="logo" width="50" class="d-inline-block align-top"></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-principal">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav-principal">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if ($_GET['pag'] == 'home') {
                              echo 'active';
                            } ?>">
          <a class="nav-link" href="?pag=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['pag'] == 'produtos') {
                                echo 'active';
                              } ?>" href="?pag=produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['pag'] == 'contato') {
                                echo 'active';
                              } ?>" href="?pag=contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($_GET['pag'] == 'sobre') {
                                echo 'active';
                              } ?>" href="?pag=sobre">Sobre</a>
        </li>
      </ul>
    </div>
  </div>
</nav>