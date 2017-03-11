<?PHP
//2016年11月4日 10時0分0秒のタイムスタンプを作成し、
//「年-月-日 時:分:秒」で表示してください。

function br(){ echo nl2br("\n");}

//タイムスタンプ生成

$stamp=mktime(10,0,0,11,04,2016);
$date1=date('Y年m月d日 H:i:s',$stamp);

echo $date1;
