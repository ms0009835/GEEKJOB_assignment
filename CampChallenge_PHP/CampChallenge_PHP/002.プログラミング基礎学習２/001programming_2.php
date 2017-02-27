<?PHP

function br(){ echo nl2br("\n");}

$num=$_GET['num'];
$message=0;

switch($num){
  case 1:
  $message = 'one';
  break;

  case 2:
  $message = 'two';
  break;

  default:
  $message = 'unexpected';
  break;
}

  echo $message;
