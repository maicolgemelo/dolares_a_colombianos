<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8">
        <title>Ejercicio de conversion dolar a peso y viceversa</title>
        
        <script>
            function proceso(txtnumero1,boton){
                switch(boton){
                    case "Dolares a pesos":
                        var parametros = {
                            "txtnumero1": txtnumero1,
                            "btndolar": boton
                        };
                    break;
                    case "pesos a dolares":
                        var parametros = {
                            "txtnumero1": txtnumero1,
                            "btnpeso": boton
                        };
                    break;
                    
                }

                $.ajax({
                    data: parametros,
                    url: 'calcular.php',
                    type:'post',
                    beforeSend:
                        function(){
                            $('#resultado').html('Cargando!...');
                        },
                    success:
                        function(response){
                            $('#resultado').html(response);
                        }
                });
            }

        </script>
    </head>

    <body>
        <h1>Ejercicio de conversion dolar a peso y viceversa</h1>/
        <form name="form1" method="POST">
            ingrese el valor en dolar: <input type="text" name="txtnumero1" id="txtnumero1">
            <br>
            
            <input type="button" name="btndolar" id="btndolar" value="Dolares a pesos"
            
            onclick="proceso($('#txtnumero1').val(),$('#btndolar').val());">
            <br>
            <input type="button" name="btnpeso" id="btnpeso" value="pesos a dolares"
            
            onclick="proceso($('#txtnumero1').val(),$('#btnpeso').val());">
        </form>
        <br>
        <span id="resultado"></span>
        <script src="jquery-3.4.1.js"></script>
    </body>

</html>