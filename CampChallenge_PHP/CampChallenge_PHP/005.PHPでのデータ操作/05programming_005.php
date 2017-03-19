
<!--
名前・性別・趣味を入力するページを作成してください。
また、入力された名前・性別・趣味を記憶し、
次にアクセスした際に記録されたデータを初期値として表示してください。
※PHPと同時に、HTMLの知識が必要になります。
※入力フィールドの使い方を調べてみましょう。
-->

<HTML>
<head><title>名前・性別・趣味を入力するページの作成</title></head>
<body>
<form action='05programming_005.php' method='get'>

<?php

$lastName=@$_GET['txtName'];
$lastGender=@$_GET['rdoGender'];
$lastHobby=@$_GET['mulText'];

if(isset($_GET['txtName'],$_GET['rdoGender'],$_GET['mulText'])){

  ?>

  <p>名前：<input type='text' name='txtName' value=<?PHP echo $lastName ?>></p>
  <p>性別：
         男性<input type='radio' name='rdoGender'value='男性'
         <?PHP
         if($lastGender=='男性'){
         ?>
         checked<?PHP }?>>

         女性<input type='radio' name='rdoGender'value='女性'
         <?PHP
         if($lastGender=='女性'){
         ?>
         checked<?PHP }?>>
  </p>
  <p>趣味：<br><textarea name ='mulText'><?PHP echo $lastHobby ?></textarea></p>
  <P><input type='submit' value='送信'></p>

<!--前回の入力データ出力-->
  <?php

  echo  '<前回の入力データ>'.'<br/>';
  echo  '名前：'.$lastName.'<br/>';
  echo  '性別：'.$lastGender.'<br/>';
  echo  '趣味：'.$lastHobby.'<br/>';

  setcookie('txtName',$lastName);
  setcookie('rdoGender',$lastGender);
  setcookie('mulText',$lastHobby);

}else{
//入力値がない時
?>
  <p>名前：<input type='text' name='txtName'></p>
  <p>性別：
     男性<input type='radio' name='rdoGender'value='男性'>
     女性<input type='radio' name='rdoGender'value='女性'>
   </p>
   <p>趣味：<br><textarea name ='mulText' ></textarea></p>
   <P><input type='submit' value='送信'></p>
<?PHP
}
?>
</form>
</body>
</HTML>
