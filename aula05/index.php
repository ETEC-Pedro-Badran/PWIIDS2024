<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Manipulação de String</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

    <h1>Manipulação de String</h1>
    <a href="https://www.php.net/manual/pt_BR/ref.strings.php">
         Referencia oficial sobre manipulação de String
</a>
<pre>
    strlen(): Retorna o comprimento de uma string
    Exemplo:
    
    <?php
    $str = "Olá Mundo!";
    echo strlen($str); // Saída: 10
    
    ?>
    substr(): Retorna uma parte de uma string.
    Exemplo:
    
    <?php
    $str = "Ola Mundo!";
    echo substr($str, 0, 3); // Saída: "Olá"
    
    ?>
    strpos(): Encontra a posição da primeira ocorrência de uma substring em uma string.''
    Exemplo:
    
    <?php
    $str = "Olá Mundo!";
    echo strpos($str, "Mundo"); // Saída: 4
    
    ?>
    str_replace(): Substitui todas as ocorrências da string de busca com a string de substituição.''
    Exemplo:
    
    <?php
    $str = "Olá Mundo!";
    echo str_replace("Mundo", "Planeta", $str); // Saída: "Olá Planeta!"
    
    ?>
    strtolower(): Converte uma string para minúsculas.''
    Exemplo:
    
    <?php
    $str = "Olá Mundo!";
    echo strtolower($str); // Saída: "olá mundo!"
    
    ?>
    strtoupper(): Converte uma string para maiúsculas.''
    Exemplo:
    
    <?php
    $str = "Olá Mundo!";
    echo strtoupper($str); // Saída: "OLÁ MUNDO!"
    
    ?>
    trim(): Remove espaços em branco (ou outros caracteres) do início e do final de uma string.''
    Exemplo:
    
    <?php
    $str = "   Olá Mundo!   ";
    echo trim($str); // Saída: "Olá Mundo!"
    
    ?>
    explode(): Divide uma string em um array de strings usando um delimitador.
    Exemplo:
    
    <?php
    $str = "Maçã, Banana, Laranja";
    $frutas = explode(", ", $str);
    
    print_r($frutas); // Saída: Array ( [0] => Maçã [1] => Banana [2] => Laranja )''
    ?>
    implode() ou join(): Junta elementos de um array em uma string usando um delimitador.
    Exemplo:
    
    <?php
    $frutas = array("Maçã", "Banana", "Laranja");
    $str = implode(", ", $frutas);
    echo $str; // Saída: "Maçã, Banana, Laranja"''    
   ?>
</pre>


</body>
</html>