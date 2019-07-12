<?php
 $id = $_GET['cid'];
 ?>

<?php
//データベース接続設定
$dbServer = '127.0.0.1';
$dbName = 'ogasawarab';
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";
$dbUser = 'test';
$dbPass = 'pass';

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);

//検索実行
$stmt = $db->query("select * from maindb WHERE cookingID ='$id'");
$record = $stmt->fetch();

//結果の出力
$food=$record['foodname']; 
$zairyou=$record['material'];
$calories=$record['calories'];
$eiyou=$record['balance'];
$tukurikata=$record['recipe'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>調理方法表示画面</title>
  <link rel="stylesheet" href="box.css">
</head>
<body>
<center><h1>調理方法</h1></center>  

  <div class="box1">
    <h3>料理名</h3>
    <div class="inner">
    <?php
    echo $food;
    ?>
    </div>
  </div>

  <div class="box2">
  <h5>料理画像</h5>
  <div class="inner2">
  <img src="./gazou.php ?id=<?php echo $id; ?>">
  </div>
  </div>

  <div class="box3">
    <h5>材料・カロリー・栄養バランス</h5>
    <div class="inner3">
  <?php
   echo $zairyou;
   echo "<br/>";
   echo $calories;
   echo "<br/>";
   echo $eiyou;
   echo "<br/>";
  ?>
  </div>
  </div>

  <div class="box4">
  <h4>作り方</h4>
  <div class="inner4">
  <?php
   echo $tukurikata;
  ?>
  </div>
</div>

</body>
</html>


  <p><center><input type="button" value="トップに戻る" onClick="location.href='./index.php'"></a></center></p>
  <p><center><input type="button" value="献立提案画面に戻る" onclick=history.back()></a></center></p>

</body>

</html>