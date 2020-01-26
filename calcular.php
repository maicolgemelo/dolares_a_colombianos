<?php
    require_once 'Dolar.php';
    require_once 'Peso.php';
  

    sleep(2);

    $objDolar  = new Dolar();
    $objPeso = new Peso();
    

    $numero1 = $_POST["txtnumero1"];
    

    if(isset($_POST["btndolar"])){
        $objDolar -> setNumero1($numero1);
        

        echo $objDolar->a_peso();

    }
    if(isset($_POST["btnpeso"])){
        $objPeso -> setNumero1($numero1);
        

        echo $objPeso->a_dolar();

    }






?>