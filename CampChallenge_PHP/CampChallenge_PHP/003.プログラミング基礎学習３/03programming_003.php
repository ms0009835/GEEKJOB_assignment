<?PHP

$num1=$_GET['num1'];
$num2=5;

function sample($num1,$num2,$type=false)
{

  $num1=$num1*$num2;

  if($type==false){
    echo $num1;
  }elseif($type==true)
  {
    $num1=$num1*$num1;
    echo $num1;
  }
}

sample($num1,$num2,$type=false);
