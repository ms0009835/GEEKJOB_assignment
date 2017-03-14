<PHP?
/*
以下の入力フィールドを持ったHTMLを、
PHPで処理する想定で記述し、作成したHTMLの入力データを取得し、
画面に表示する。
・名前（テキストボックス）、性別（ラジオボタン）、
趣味（複数行テキストボックス）
*/


<html>
<head>
  <title>HTMLの入力データの取得と表示</title>
</head>
<body>
  <form action='./sample.php'method='post'>

    <p>Name:<input type='text' name='txtName'></p>
    <p>
    M:<input type='radio' name='rdoSample1'>
    F:<input type='radio' name='rdoSample2'></p>
    
    Hobby:
    <p><textarea name ="mulText"></textarea></p>

  </form>
</body>
</html>
