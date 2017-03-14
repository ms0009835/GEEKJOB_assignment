<?PHP
//2015年1月1日 0時0分0秒と
//2015年12月31日 23時59分59秒の差（ミリ秒）を表示してください。

function br(){ echo nl2br("\n");}

$day1 = strtotime('2015-1-01');
$day2 = strtotime('2015-12-31');

$time1=strtotime('00:00:00');
$time2=strtotime('23:59:59');
$time=$time2-$time1;


/*
echo ($day2-$day1)/(60*60*24).'days';
echo floor($time/3600).'hours';
echo floor(($time/60)%60).'minutes';
echo ($time%60).'seconds';
*/

echo ($day2-$day1)/(60*60*24).'days';
echo $time.'seconds';
