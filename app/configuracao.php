<?php


// criando constantes aula 14

// __FILE__ -  constante Magica. Retorna  caminho completo e o nome do arquivo
// dirname - retorna o caminho/path do diretorio pai

//echo dirname(__FILE__); //dirname elimine o diretorio atual "visualmente"

//echo dirname(dirname(__FILE__));

// criando constantes

//define e const - define uma constante. as consttantes nao poider ser alteradas depois de declaradas

define('App',dirname(__FILE__)); //entrando na pasta App

define('URL','http://localhost/App/');

define('App_NOME','Curso de PHP8 Orientada a Objetos e MVC');

const app_VERSAO = '1.0.0';