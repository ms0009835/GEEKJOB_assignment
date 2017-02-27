<?php
function br(){ echo nl2br("\n");}
$arr = array();

$arr = array(
  '1'=>'AAA',
  'hello'=>'world',
  'soeda'=>33,
  '20'=>20,
);

echo $arr['1'];
br();
echo $arr['hello'];
br();
echo $arr['soeda'];
br();
echo $arr['20'];
