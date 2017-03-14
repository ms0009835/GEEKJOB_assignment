<?PHP

/*紹介していないPHPの組み込み関数を利用して、
処理を作成してください。

講義では紹介されていないPHPの組み込み関数はたくさん存在します。
PHPの公式サイトから関数を選び、
実際にロジックを作成してみてください。

また、この処理を作成するに当たり、下記を必ず実装してください。
①処理の経過を書き込むログファイルを作成する。
②処理の開始、終了のタイミングで、
ログファイルに開始・終了の書き込みを行う。
③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
④最後に、ログファイルを読み込み、その内容を表示してください。
*/

function br(){ echo nl2br("\n");}
date_default_timezone_set('Asia/Tokyo');

$text=$_GET['text'];

$fp=fopen('log1.txt','w');

fwrite($fp,date('Y/m/d　H:i:s') );
fwrite($fp,'status:start'.PHP_EOL);

  if(ctype_alpha($text)){
    fwrite($fp,
    'The letters you typed are only alphabets.'.PHP_EOL);
  }else{
    fwrite($fp,
    'The letters you typed are not only alphabets.'.PHP_EOL);
  }

fwrite($fp,date('Y/m/d　H:i:s') );
fwrite($fp,' status:end');
fclose($fp);

$fp=fopen('log1.txt','r');
while($line=fgets($fp)){
  echo $line;
}
