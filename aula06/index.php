<?php
    
    $texto = "Texto será salvo no arquivo.";
    file_put_contents("arquivo.txt", $texto);
    
    $lido = file_get_contents("arquivo.txt");
    echo "Texto obtido do arquivo: ".$lido;

?>