<?PHP
function br(){ echo nl2br("\n");}

$num = 0;

for ($i=0; $i<=100; $i++){

  $num =$num + $i;
  echo $num;
  br();

}
