<HTML>
  <!--　ファイルアップロード機能を作成し、
  ファイルの中身を読み込んで表示する機能を追加してください。 -->

<head><title>ファイルのアップロード、読み込み、表示</title></head>
<body>

<form enctype ='multipart/form-data'action='' method='post'>
<p>ファイル選択：<input name='upfile' type ='file'><input type='submit'>
</p>
</form>


<?PHP
if(isset($_FILES['upfile'])){
  if(move_uploaded_file($_FILES['upfile']['tmp_name'],$_FILES['upfile']['name'])){

    $fp=fopen($_FILES['upfile']['name'],'r');
    while($line=fgets($fp)){
      echo $line;
    }
    fclose($_FILES['upfile']['name']);
  }
}
?>
</form>
</body>
</HTML>
