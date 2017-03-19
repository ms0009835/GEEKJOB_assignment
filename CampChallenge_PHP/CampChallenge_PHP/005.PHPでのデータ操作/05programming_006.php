<?php

/*HTMLについて調べましょう。
HTMLには入力フィールド意外にも様々なタグが存在します。
Webページをデザインする上で欠かせない知識なので、
タグを調べ、色々と使ってみましょう。*/
?>
<HTML>
<head>
<style type="text/css">
<!--
h1 {color:#ff0000; text-align:center;}
p.sample1 {}
p.sample2 {font-size: 14px; color: #0000ff;　text-align:center;}
div.sample1 {font-size: 14px; color:black; text-align:center;}
div.sample2 {font-size: 14px; color:black; text-align:left;}

</style>

<title>HTMLについて調べましょう！</title></head>
<body bgcolor="#FFEBCD" >
<p class="sample1"><h1><img src="img01.png" width="60" height="35" >
 イギリスへ旅行しよう
<img src="img01.png" width="60" height="35" ></h></p>
<p class="sample2">
お茶と紳士の国イギリスに旅してみませんか？
ご興味のある方はまず会員登録を！
</p>

<div class="sample1"><img src="img02.jpg" width="" height="" ></img></div>
<br>
<div class="sample1">会員登録<?php  require('05programming_005.php'); ?></div>

</body>
</HTML>
