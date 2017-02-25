<?php
function br(){ echo nl2br("\n");}

$item=0;
const item1='１：雑貨';
const item2='２：生鮮食品';
const item3='３：その他';

$total=$_GET['total'];
$number=$_GET['number'];
$prise=0;

$point=0;

//start
echo '商品種別';
echo item1.'/'.item2.'/'.item3;

if ($item ==1){
    echo '購入商品：'.item1;
    br();
    $prise=$total/$number;
    echo '1個当たり'.$prise.'です。';
  }elseif($item == 2){
    echo '購入商品：'.item2;
    br();
    $prise=$total/$number;
    echo '1個当たり'.$prise.'です。';}else{echo '購入商品：'.item3;
    br();
    $prise=$total/$number;
    echo '1,個当たり'.$prise.'円です。';}

    if(3000<=$total){
      $point= $total*0.04;
      echo $point.'ポイント獲得しました。';
    }elseif(5000<=$total){
      $point= $total*0.05;
    }
