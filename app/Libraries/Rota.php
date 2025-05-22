<?php
   
        /*
            *Classe rota
            *Cria as urls, carrega os controladores, metodos e paaramentros
            *Formato url - /controladores/metodos/parametros
        */

    class Rota{

        //Atributos da classe
        private $controlador = 'Paginas';
        private $metodo = 'index';
        private $parametros = [];


        public function __construct()
        {
            //Se a url existir joga a função url na variavel $url
            $url = $this->url() ? $this->url() : [0]; // quando privado
            //Checa se o controllador existe
            //ucwords - converte para maiusculo o primeiro caractere de cada palavra
            if(file_exists('../app/Controller'.ucwords($url[0]).'.php')){
                //se existir seta como controlador
                $this->controlador = ucwords($url[0]);
                //unset - destroi a variavel especificada
                unset($url[0]);
            }

            //requere o controlador
            require_once '../app/Controller/'.$this->controlador.'.php';
            //instancia o controlador
            $this->controlador = new $this->controlador;

            //checa se o metodo existe, segundo parte da url
            if(isset($url[1])){
                //method_exists checa se o metodo da classe existe
                if(method_exists($this->controlador,$url[1])){
                    $this->metodo = $url[1];
                    unset($url[1]);
                }
            }


            //se existir retorna um arrey com os valores se nao retorna um array vazio
            //array_exists retorna todos os valores de um array
            $this->parametros = $url ? array_values($url)  : [];
            //call_user_func_array chama uma dada funcao de um usuario com um array de parametros
            call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
            
            

            //var_dump($this); // debuga, ou seja verifica o que esta acontecendo
        }


        //retonra a url em um array
        private function url()
        {
             //echo 'metodo carregado';
            // echo $_GET['url']; nao recomendado

            //o filtro FILTER_SANITIZE_URL remove todos os caracteres ilegais de uma url
            $url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL); // FILTER_SANITIZE_URL impede dados ilegais atraves da Url

            //verifica se a url existe
            if(isset($url)){
                //trim - retira espaco no inicio e final de uma string
                //rtrim - retira espaço em braco (ou outros caracteres) do final da string
                $url = trim(rtrim($url,'/'));
                //explode - divide uma string em strings, retonra um array
                $url = explode('/', $url);
                return $url;
            }   
        }

    }


?>