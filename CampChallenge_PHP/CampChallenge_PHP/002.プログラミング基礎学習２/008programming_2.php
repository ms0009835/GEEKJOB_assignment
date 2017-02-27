<?PHP
function br(){ echo nl2br("\n");}
$boxs = array(10,100,'soeda','hayashi',-20,118,'END');

for ($i=0; $i<=6; $i++){
  echo $boxs[$i];
  br();
}

  br();
  $boxs[2]=33;
  echo $boxs[2];
