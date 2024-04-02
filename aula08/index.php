<?php
// Formatando Datas no PHP
//https://www.php.net/manual/pt_BR/timezones.php
date_default_timezone_set("America/Sao_Paulo");
echo date('l d/m/Y H:i:s'); // para formatar uma data
// d - dia do mês
// m - mês
// y - ano com 2 digitos
// Y - ano com 4 digitos
// h - hora - formato de 12 horas
// H - hora -  formato de 24 horas
// i - minuto
// s - segundo
// a - am/pm
// l - dia da semana
echo '-------------------------';
//Convertendo texto para data
//echo date('d.m.y',strtotime("01/20/2024"));
//echo date('d.m.y',strtotime("20240120"));
//echo date('d.M.Y',strtotime("01/20/2024")+(60*60*24*7)); // equivalente a somar 7 dias

//Utilizando DateTime()
$dt = new DateTime(); // data e hora atual;
echo $dt->format("d/m/Y");








