<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link href="bootstrap-4.4.1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <title>Title</title>
        <script>
            function soma(vl1, vl2){
                vl1=parseInt(vl1);
                valor2=parseInt(vl2);
                var resultado= vl1+vl2;
                if(!isNaN(vl1) && !isNaN(vl2) ){
                    document.calculadora.resultado.value=resultado;
                }
            }
            function limpa(){
                document.calculadora.numero1.value="";
                document.calculadora.numero2.value="";
                document.calculadora.resultado.value="";
            }
        </script>
    </head>
    <body>
        <form name="calculadora">
            <input type="number" name="numero1" placeholder="Operando 1"> +
            <input type="number" name="numero2" placeholder="Operando 2"> =
            <input type="number" name="resultado" placeholder="resultado..." readonly=“true”>
            <br><br>
            <input type="button" value="Calcular" onclick="soma(document.calculadora.numero1.value, document.calculadora.numero2.value);">
            <input type="button" value="Limpar" onclick="limpa();">
        </form>
    </body>
</html>