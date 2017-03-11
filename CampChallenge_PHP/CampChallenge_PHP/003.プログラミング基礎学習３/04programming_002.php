<?PHP
//現在の日時を「年-月-日 時:分:秒」で表示してください。

function br(){ echo nl2br("\n");}

//タイムスタンプ生成
date_default_timezone_set('Asia/Tokyo');
echo date('Y年-m月-d日 H:i:s');
