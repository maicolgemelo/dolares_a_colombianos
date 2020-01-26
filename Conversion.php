<?php

    class Conversion{

        private $numero1;
        
    

        public function _construct(){
        $this->numero1 = 0;
       
        }
        //recibe el primer numero ingresado.
        public function setNumero1($valor){
        $this->numero1 = $valor;

        }

        protected function getNumero1(){
        return $this->numero1;
        }
       


    }



?>