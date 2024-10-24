<?php
function BirthDayCountDown(int $day, int $month):string{
    $date2 = time();
    $date1 = strtotime(date('y')."-".$month."-".$day);
    $sot = $date1 - $date2;
    return "Day at Birth: " . round($sot/(60*60*24));


}

echo BirthDayCountDown(20,12).PHP_EOL;