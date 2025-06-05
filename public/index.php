<?php
include './../app/configuracao.php';
include './../app/Libraries/Rota.php';
include './../app/Libraries/Controller.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App_NOME ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" integrity="sha384-GFta5k0vjG6Kj+gqMI6fXjQQrc8s6lYEdRJKQ/p4o7F2rYiXzD6Ht6J/YJq2F+Wc" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL?>/public/css/estilos.css">
</head>
<body>


    <?php
        $rotas = new Rota();
        //$rotas->url(); nao carrega quando privado

        
    ?>

    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>
</body>
</html>