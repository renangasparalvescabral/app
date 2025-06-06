<?php
include './../app/configuracao.php';

include './../app/autoload.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App_NOME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=URL?>/public/css/estilos.css">
   
</head>
<body>


    <?php
        $rotas = new Rota();
        //$rotas->url(); nao carrega quando privado

        
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
<script src="<?=URL?>/public/js/jquery.funcoes.js"></script>  
</body>
</html>