<?PHP

//ファイルから自己紹介を読み出し、表示してください。

$fp=fopen("xxx.txt",'r');
while ($line = fgets($fp)) {
  echo "$line<br />";
}
fclose($fp);
