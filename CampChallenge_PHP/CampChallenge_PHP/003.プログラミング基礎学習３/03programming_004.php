<?PHP
function br(){ echo nl2br("\n");}

$name=array('林','鈴木','田中','伊藤','山田','前田','井上','佐藤','村田','中村');
$birth=array('１月２日','８月６日','４月９日','１２月１８日','６月２８日','１月２日','８月６日','４月９日','１２月１８日','６月２８日');
$intro=array(0,0,0,0,0,0,0,0,0,0);
$check=0;
$i=0;

function my_profile($name,$birth,$intro,$check,$i){

  echo '名前:'.$name[$i];
  br();
  echo '誕生日:'.$birth[$i];
  br();
  echo '自己紹介:'.$intro[$i];
  br();

return $check=true;
}

if($check==true)
{
  echo 'この処理は正しく実行できました。';
}
else{
  echo '正しく実行できませんでした。';
}

br();

for($i=0;$i<10;$i++){
  my_profile($name,$birth,$intro,$check,$i);

}
