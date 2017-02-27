<?PHP
function br(){ echo nl2br("\n");}
$num=1;

for($i=0; $i<20;$i++){
  $num = $num*8;
  echo '8の'.($i+1).'乗は、'.$num;
  br();
}
