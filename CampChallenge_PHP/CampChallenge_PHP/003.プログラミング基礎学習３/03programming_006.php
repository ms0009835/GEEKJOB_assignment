<?PHP
//課題：引数戻り値
//前による検索プログラムを実装する。
//3人分のプロフィール(項目は課題「戻り値2」参照)をあらかじめ定義しておく。
//引き数にそれらのプロフィールと文字列をとり、
//戻り値は1人分のプロフィール情報を返却する。
//引き数の文字が名前に含まれる(部分一致)プロフィール情報
//(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。
//それ以降などは課題「戻り値2」と同じ扱いに

function br(){ echo nl2br("\n");}

$check=$_GET['check'];

$P001=array('ID:'=>001,'NAME:'=>'目黒','BIRTHDAY:'=>'１月８日','ADDRESS:'=>'東京都');
$P002=array('ID:'=>002,'NAME:'=>'渋谷','BIRTHDAY:'=>'１月１２日','ADDRESS:'=>'東京都');
$P003=array('ID:'=>003,'NAME:'=>'上野','BIRTHDAY:'=>'１月３０日','ADDRESS:'=>'東京都');

function open($P001,$P002,$P003,$check)
{
  if($P001['NAME:']==$check){
    foreach ($P001 as $key => $value){
      echo $key.$value.br();
    }
    return $P001;
  }elseif($P002['NAME:']==$check){
    foreach ($P002 as $key => $value){
      echo $key.$value.br();
    }
    return $P002;
  }elseif($P003['NAME:']==$check){
    foreach ($P003 as $key => $value) {
      echo $key.$value.br();
    }
    return $P003;
  }elseif($check==''){
    echo '検索する名前を入力してください。';
  }
  else{
    echo '該当者がいません。';
  }
}
open($P001,$P002,$P003,$check);
