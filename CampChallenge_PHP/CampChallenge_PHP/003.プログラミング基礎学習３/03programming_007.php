<?PHP
//課題：グローバル変数
//引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、
//ローカルな値はstaticとしてその関数が何回実行されたのかを保持していく
//ような関数である。この関数を20回呼び出す

function br(){ echo nl2br("\n");}

$g_num1=3;
$i=$_GET['i'];

function figure(){
  global $g_num1;
  static $local_num2=0;

  echo $local_num2.'回実行されました。'.$g_num1.br();

  $g_num1 = $g_num1*2;
  $local_num2+=1;

}

for($a=0;$a<=$i;$a++){
  figure();
}
