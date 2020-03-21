<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cosméticos</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />

</head>

<body>

    <header>
        <?php include_once('content/header.php'); ?>
    </header>

    <!-- Renderização dinâmica -->
    <?php
    if (!isset($_GET['pag'])) {
        include_once('content/home.php');
    } else {
        switch ($_GET["pag"]) {
            case "home": {
                    include_once('content/home.php');
                    break;
                }
            case "produtos": {
                    include_once('content/produtos.php');
                    break;
                }
            case "contato": {
                    include_once('content/contato.php');
                    break;
                }
            case "sobre": {
                    include_once('content/sobre.php');
                    break;
                }
            default: {
                    include_once('content/error404.php');
                    break;
                }
        }
    }
    ?>

    <footer class="text-center" id="footer-main">
        <div class="container">

            <a href="#"><ion-icon class="pink" size="large" name="logo-facebook"></ion-icon></a>
            
            <a href="#"><ion-icon size="large" name="logo-whatsapp"></ion-icon></a>

            <a href="#"><ion-icon size="large" name="logo-twitter"></ion-icon></a>
            
            <a href="#"><ion-icon size="large" name="logo-instagram"></ion-icon></a>

            <div class="row justify-content-center" id="texto-footer">
                Todos os Direitos Reservados &copy <?php echo date("Y"); ?> - Desenvolvido por Alan Neres
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Ionic -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>