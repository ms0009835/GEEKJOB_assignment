<?PHP
//課題：continue
//3人分のプロフィールについてIDと住所以外を表示する処理を実行する。
//2重のforeachとcontinueを必ず用いること

function br(){ echo nl2br("\n");}

//$MAIN=array(array(001=>'目黒',002=>'渋谷',003=>'恵比寿'),
//array('1月8日'=>'日本','2月9日'=>'アメリカ','3月19日'=>'ドイツ'));

//$ID=array(001,002,003);
//$NAME=array('目黒','渋谷','恵比寿');
//$BIRTHDAY=array('1月8日','2月9日','3月19日');
//$ADDRESS=array('日本','アメリカ','ドイツ');

$MAIN=array('ID'=>array(001,002,003),'NAME'=>array('目黒','渋谷','恵比寿'),
'BIRTHDAY'=>array('1月8日','2月9日','3月19日'),'ADDRESS'=>array('日本','アメリカ','ドイツ'));

//$MAIN=array('ID001'=>array(001,'目黒','1月8日','日本'),'ID002'=>array(002,'渋谷','2月9日','アメリカ'),
//'ID003'=>array(003,'恵比寿','3月19日',' ドイツ'));

//$TITLE=array('ID','NAME','BIRTHDAY','ADDRESS');

foreach($MAIN as $key1 =>$val1){
  echo $key1.br();
      foreach($val1 as $val2){
        if($key1=='BIRTHDAY'){
          continue;
        }elseif($key1=='ADDRESS'){
          continue;
        }
  echo $val2.br();
    }
  }
