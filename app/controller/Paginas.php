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
        'titulo' => 'Minha Página'
        
        ];

        $this->view('paginas/home', $dados);

     } 

        public function sobre(){
     
        $dados = [
        'tituloPagina' => App_NOME
        
        ];

        $this->view('paginas/sobre', $dados);

    
     }

}