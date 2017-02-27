<?php
function br(){echo nl2br("\n");}
function calculate($total,$number){
  $prise=$total/$number;
  br();
  echo '1個当たり'.$prise.'円です。';
  return $prise;
}

$item=0;
const item1='１：雑貨';
const item2='２：生鮮食品';
const item3='３：その他';

$item=$_GET['item'];
$total=$_GET['total'];
$number=$_GET['number'];
$prise=0;
$point=0;

//start
echo '商品種別 ';
echo item1.'/'.item2.'/'.item3;
br();
if ($item ==1){
    echo '購入商品 '.item1;
    calculate($total,$number);
    }elseif($item == 2){
    echo '購入商品 '.item2;
    calculate($total,$number);
  }elseif($item==3){
    echo '購入商品 '.item3;
    calculate($total,$number);
    }
br();
    if(3000<=$total){
      $point= $total*0.04;
      echo $point.'ポイント獲得しました。';
    }elseif(5000<=$total){
      $point= $total*0.05;
      echo $point.'ポイント獲得しました。';
    }
