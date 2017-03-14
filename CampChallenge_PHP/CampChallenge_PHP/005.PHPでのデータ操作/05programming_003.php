<?PHP

/*
課題「クッキーの記録と表示」と
同じ機能をセッションで作成してください。
*/
date_default_timezone_set('Asia/Tokyo');

session_start();

$_SESSION['LastDate']=date('Y/m/d H:i:s');

echo $_SESSION['LastDate'];
