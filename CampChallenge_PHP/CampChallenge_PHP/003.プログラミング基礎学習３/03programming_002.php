<?PHP

$num = $_GET['num'];

function check($num){

if($num%2==0){
  echo $num.'は、偶数である。';
}elseif($num%2==1){
  echo $num.'は、奇数である。';
}
}

check($num);
