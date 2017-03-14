<?PHP
//自分の氏名について、
//バイト数と文字数を取得して、表示してください。

function br(){ echo nl2br("\n");}

echo 'バイト数：'.strlen('目黒翔子'),br();
echo '文字数：'.mb_strlen('目黒翔子');
