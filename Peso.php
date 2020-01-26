<?php
    require_once 'Conversion.php';

    class Peso extends Conversion{

        public function a_dolar(){
            return($this->getNumero1() * 0.00030);
        }

    }




?>