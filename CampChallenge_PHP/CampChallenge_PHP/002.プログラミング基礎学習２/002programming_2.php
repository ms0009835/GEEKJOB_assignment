<?PHP

$language = $_GET['language'];
$message =0;

switch($language){
  case 'A':
  $message = '「英語」';
  break;

  case 'あ':
  $message = '｢日本語」';
  break;

  default:
  $message = '';
  break;
}

echo $message;
