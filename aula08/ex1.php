<?php
// 1 - Calcule a diferença de duas datas de nascimento
// 2 - Exiba a data e hora atual em São Paulo, Tokio e Londres
// 3 - Exiba o dia da semana em que irá cair 15 de Novembro
$evaldo = strtotime("02/19/1976");
$roni = strtotime("11/21/1987");
$diff = $roni - $evaldo;
$horas = $diff / (60*60);
$dias = $horas/24;
$anos = $dias/365;
echo "Exercicio 1: \n";
echo "A diferença entre de das datas  de nascimento entre evaldo e roni \n".
     " $evaldo e $roni, é de $diff: horas: $horas em dias: $dias em anos $anos \n";

echo "Exercicio 2: \n";
date_default_timezone_set("America/Sao_Paulo");
echo "Hora em São Paulo: ".date("d/m/y h:i:s")."\n";
date_default_timezone_set("Asia/Tokyo");
echo "Hora em Tokio: ".date("d/m/y h:i:s")."\n";
date_default_timezone_set("Europe/London");
echo "Hora em Londres: ".date("d/m/y h:i:s")."\n";

echo "Exercicio 3: \n";
echo "Dia da semana  que cai 15/11/2024 - ". date('l',strtotime("11/15/2024"));


