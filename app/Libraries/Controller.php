<?php

/*
class Controller{

    public function model($model){

        require_once '../App/Models/' .$model. 'php';
        return new $model;

    }

    public function view($view, $dados = []){
        $arquivo = ('../app/Views' .$view. '.php');
        if(file_exists($arquivo)){
            require_once $arquivo;
        }else{
            die('O arquivo view não existe!');
        }
    }

}

*/
class Controller{

     public function model($model){

        require_once '../App/Models/' .$model. '.php';
        return new $model;

    }

    public function view($view, $dados = []){
        $arquivo = ('../app/Views/' . $view . '.php');
        echo "<p>Carregando view: $arquivo</p>";
        if(file_exists($arquivo)){
            extract($dados); // <- transforma $dados['conteudo'] em $conteudo
            require_once $arquivo;
        }else{
            die('O arquivo view não existe!');
        }
    }

}