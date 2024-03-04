<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tabuada</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   <h1>Selecione a tabuada</h1>
   <form>
       <select name='tabuada' onchange="submit()">

       
          <?php 
            for($op=0;$op<10;$op++) {
          ?>
          
          <option value="<?=$op?>"><?=$op?></option>
          
          <?php
            }
          ?>
       </select> 
       
   </form> 
   
   <?php
      echo "<br><br>";
      $tabuada = @$_GET["tabuada"];
      $mult = 0;
      while ($mult <= 10) {
         $resultado = $mult * $tabuada;
         echo "$tabuada X $mult = $resultado<br>";
         $mult++;
      }
   ?>
   
</body>
</html>