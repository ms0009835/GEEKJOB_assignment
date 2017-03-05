<?PHP
function br(){ echo nl2br("\n");}

$info=array('ID:'=>001,'NAME:'=>'目黒','BIRTHDAY:'=>'１月８日','ADDRESS:'=>'東京都');

function discl($info)
{
foreach ($info as $key => $value) {
  echo $key.$value;

br();
}

  return $info;
}

discl($info);
