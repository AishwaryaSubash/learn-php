<?php
function week_between_two_dates($date1, $date2)
{
    $first = DateTime::createFromFormat('m/d/Y', $date1);
    $second = DateTime::createFromFormat('m/d/Y', $date2);
    if($date1 > $date2) return week_between_two_dates($date2, $date1);
    return floor($first->diff($second)->days/7);
}

$dt1 = '1/1/2014';
$dt2 = '12/31/2014';
echo 'Weeks between '.$dt1.' and '. $dt2. ' is '. week_between_two_dates($dt1, $dt2)."\n";
?>