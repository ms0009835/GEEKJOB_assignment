
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

<!--2回目-->
<?php

$Name_cookie=@$_GET['txtName'];
$Gender_cookie=@$_GET['rdoGender'];
$Hobby_cookie=@$_GET['mulText'];

setcookie('txtName',@$_GET['txtName']);
setcookie('rdoGender',@$_GET['rdoGender']);
setcookie('mulText',@$_GET['mulText']);

if(isset($Name_cookie,$Gender_cookie,$Hobby_cookie)):?>

  <p>名前：<input type='text' name='txtName' value=<?PHP echo $Name_cookie ?>></p>
  <p>性別：
         男性<input type='radio' name='rdoGender'value='男性'
         <?PHP if(@$Gender_cookie=='男性'):?> checked>

         女性<input type='radio' name='rdoGender'value='女性'
         <?PHP elseif(@$Gender_cookie=='女性'):?> checked>
         <?PHP endif;?>
  </p>
  <p>趣味：<br><textarea name ='mulText'><?PHP echo $Hobby_cookie ?></textarea></p>
  <P><input type='submit' value='送信'></p>

<!--前回の入力データ出力-->
  <?php
  echo  '<前回の入力データ>'.'<br/>';
  echo  '名前：'.$Name_cookie.'<br/>';
  echo  '性別：'.$Gender_cookie.'<br/>';
  echo  '趣味：'.$Hobby_cookie.'<br/>';
 ?>

<!--1回目-->
<?PHP else:?>
<p>名前：<input type='text' name='txtName'></p>
<p>性別：
   男性<input type='radio' name='rdoGender'value='男性'>
   女性<input type='radio' name='rdoGender'value='女性'>
 </p>
 <p>趣味：<br><textarea name ='mulText' ></textarea></p>
 <P><input type='submit' value='送信'></p>
<?php  endif;?>

</form>
</body>
</HTML>
