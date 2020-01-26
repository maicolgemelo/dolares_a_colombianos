<?php
    require_once 'Conversion.php';

    class Dolar extends Conversion{

        public function a_peso(){
            return($this->getNumero1() * 3.36507);
        }

    }




?>