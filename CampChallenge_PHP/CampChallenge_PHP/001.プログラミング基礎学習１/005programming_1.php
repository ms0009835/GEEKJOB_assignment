<?php

function br(){ echo nl2br("\n");}

$num = 3;

if($num == 1){
  echo $num.'です！';
  br();
  echo 'You typed '.$num;

}elseif($num == 2){
  echo 'プログラミングキャンプ！';
  br();
  echo 'Programming Camp!';
  br();
}else{
   echo 'その他です！';
   br();
   echo 'You typed a figure other than 1 and 2';
 }
