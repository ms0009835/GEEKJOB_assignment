<?PHP
//2016年1月1日 0時0分0秒のタイムスタンプを作成し、
//表示してください。

function br(){ echo nl2br("\n");}

//タイムスタンプ生成
$stamp=mktime(0,0,0,1,1,2016);

$date1=date('Y年m月d日',$stamp);

echo $date1;
