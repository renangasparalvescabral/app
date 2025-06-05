<?php

/*    
class Paginas{
   
/*    
    public function index($param1, $param2){
        echo $param1. '<hr>';
        echo $param2;

    }


class Paginas extends Controller{

    public function index(){

        $dados = [
            'titulos' => 'Paginas Inicial',
            'descricao' => 'Curso de PHP7'
        ];


        $this->view('paginas/home', $dados);
    }

     public function sobre(){
        
    }

}
*/

class Paginas extends Controller{

    

     public function index(){

        $dados = [
        'titulo' => 'Minha Página',
        'conteudo' => 'Bem-vindo ao site!'
        ];

        $this->view('paginas/home', $dados);

        

        $dados = [
        'tituloPagina' => 'Pagina sobre nós',
        
        ];

        $this->view('paginas/sobre', $dados);

    
     }

}