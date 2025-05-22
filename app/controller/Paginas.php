<?php

/*    
class Paginas{
   
/*    
    public function index($param1, $param2){
        echo $param1. '<hr>';
        echo $param2;

    }
*/


class Paginas extends Controller{

    public function index(){
        $this->view('paginas/home');
    }

     public function sobre(){
        
    }

}

