<?php

/*
* Autoload responsavel pelo carregamento automaatico das classes
*/

/*A função spl_autoload_register() registra qualquer numero de autoloaders, permitindo que classes
e interfaces sejam automaticamente carregadas
*/

spl_autoload_register(function($classe){

    $diretorios = [ //array

        //ALista de diretorios para buscar as classes
        'Libraries',
        'Helpers'

    ];

    //percorre os diretorios em busca de classes
    foreach($diretorios as $diretorio):
        //a constante __DIR__ retorna o diretorio do arquivo
        //DIRECTORY_SEPARATOR é o separador ultilizado para percorrer diretorios
       $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.'.php');
            //  -> seria isso   /helpers/Rota.php
        // verifica se o arquivo da classe existe    
        if(file_exists($arquivo)):
            //inclui o arquivo de classe
            require_once $arquivo;
        endif;
    endforeach;


});