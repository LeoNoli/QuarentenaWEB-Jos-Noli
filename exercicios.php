<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício Quarentena</title>
    </head>
    <body>
        <?php
            if(empty($_POST)){
                echo'<form action="exercicios.php" method="POST">
                    <input type="text" name="num1" placeholder="Digite um valor..."/> 
                    +
                    <input type="text" name="num2" placeholder="Digite um valor..."/> 
                    =	
		            <input type="text" name="resp" value=" " placeholder="Resposta..."/>
				
		            <input type="submit" value="Somar" />
		            <input type="reset" value="Limpar" />
                </form>';
            }
            else{
                $n1=$_POST["n1"];
                $n2=$_POST["n2"];
                $resp=$n1+$n2;

                echo '<form action="exequarentena.php" method="POST">
                    <input type="text" name="num1" value="'.$num1.'" placeholder="Digite um valor..."/> +
                    <input type="text" name="num2" value="'.$num2.'" placeholder="Digite um valor..."/> =	
                    <input type="text" name="resp" value="'.$resp.'"placeholder="Resposta..."/>
                        
                    <input type="submit" value="Somar" />
                    <input type="reset" value="Apagar" />
                </form>';
                }
        ?>
    </body>
</html>