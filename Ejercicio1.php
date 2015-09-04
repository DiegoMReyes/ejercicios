<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
  <form method="GET">
        
        <h2>Por favor ingrese las variables para realizar la operacion </h2> <br>
          Variable a:  <input type='text' name='a' > <br>
          Variable b:  <input type='text' name='b' ><br>
         Variable c:  <input type='text' name='c' > <br>
        <input type='submit' name='enviar'>
 </form>
        
        <?php
        
        $bE = $_REQUEST['b'] * 2;
        
        $a = $_REQUEST['a'];
        $a2 = $_REQUEST['c'];
        $b2 = ($a1 * $a2);
        $b3 = 4 * $b2;
        $y =  sqrt($b3);
      
    
      
        $b4= $bE - $y;
        $b5 = $_POST['b'] + $b4;
        $b6 = $b5 / (2*$a1);
        echo "<br>";
        echo "El resultado es  ... ". $b6;
        
        ?>
    </body>
</html>
