<?php
//function BirthDayCountDown(int $day, int $month):string{
//    $date=date('Y') . "-" . $month . "-" . $day;
//    $date0=date_create($date);
//    $date1= date_format(date_add($date0, date_interval_create_from_date_string('1 year')), 'Y-m-d');
//    $time2 = time();
//    $time1 = strtotime($date);
//    $time3 = ($time2>$time1)? strtotime($date1)  : $time1;
// $sot = $time3 - $time2;
//    return "Day at Birth: " . round($sot/(60*60*24));
//
//
//}
//
//echo BirthDayCountDown(20,12).PHP_EOL;

function BirthDayCountDown(DateTime $bithdate) :DateInterval{
    $today = new DateTime('now');
    $todayYear = (int) $today->format('Y');
    $nextYear = $todayYear + 1;
    $toDayToTime = $today->getTimestamp();


    $Birthday = new DateTime();
    $birthdayDay = (int) $bithdate->format('d');
    $birthdayMonth = (int) $bithdate->format('m');
    $Birthday->setDate($todayYear, $birthdayMonth, $birthdayDay);
    $birthdayNowToTime= $Birthday->getTimestamp();
    if ($toDayToTime>$birthdayNowToTime) {
        $Birthday->setDate($nextYear, $birthdayMonth, $birthdayDay);
    };
    return $Birthday->diff($today);
}


$interval = BirthDayCountDown(DateTime::createFromFormat('d-m-Y', '20-12-1987'));
$sintax = $interval->days > 1 ? 'i': 'o';

echo 'Mancano '. $interval->days . ' Giorn'.$sintax.' al tuo compleanno';

