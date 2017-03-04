<?PHP
function br(){ echo nl2br("\n");}

$name=$_GET['name'];
$birth=$_GET['birth'];
$intro=$_GET['intro'];

function my_profile($name,$birth,$intro){
  echo '名前:'.$name;
  br();
  echo '誕生日:'.$birth;
  br();
  echo '自己紹介:'.$intro;
  br();

}

for($i=0;$i<=10;$i++){
  my_profile($name,$birth,$intro);

}
