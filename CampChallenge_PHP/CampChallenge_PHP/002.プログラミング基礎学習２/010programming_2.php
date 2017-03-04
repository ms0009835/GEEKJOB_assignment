<?PHP
function br(){echo nl2br("\n");}

$num=0;
$num=$_GET['num'];
$i=0;

$arr = array(2,3,5,7);
$count = array(0,0,0,0);

echo '元の値/'.$num;

for($i=0;$i<=3;$i++) {
       while ($num%$arr[$i] == 0){
       $num=$num/$arr[$i];
       $count[$i] =$count[$i]+1;
       }
}
br();
if(10<=$num){
  echo '１桁の素因数/';
  br();
  for($i=0;$i<=3;$i++){
    echo $arr[$i].'は、'.$count[$i];
    br();
    }
  echo 'その他/'.$num;
}else{

  echo '１桁の素因数/';
  br();
  for($i=0;$i<=3;$i++){
    echo $arr[$i].'は、'.$count[$i];
    br();
    }
  echo 'その他/'.$num;
  echo '素因数分解の結果/'.$num;}
