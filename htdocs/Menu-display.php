<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css" />
<title>献立表示画面</title>
</head>
<body>
<center><h1>献立提案</h1></center>
<center>
<?php
//データベース接続設定
$dbServer = '127.0.0.1';
$dbName = $_SERVER['MYSQL_DB'];
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";
$dbUser = $_SERVER['MYSQL_USER'];
$dbPass = $_SERVER['MYSQL_PASSWORD'];

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);
?>
<?php
//検索実行
$sql = 'select * from maindb order by rand()  limit 21';
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
//結果の出力
$id = array_column($result, 'cookingID');
$food = array_column($result, 'foodname');
?>
</br>
7/1
</br>
<?php
if (isset($_POST['zikan1'])){
    $zikan1=$_POST['zikan1'];
    echo $zikan1;
?>
    <a href="./detail.php?cid=<?php echo $id[0]; ?>"><?php echo $food[0] ?></a> 
<?php
}
if (isset($_POST['zikan2'])){
    $zikan2=$_POST['zikan2'];
    echo $zikan2;
?>
    <a href="./detail.php?cid=<?php echo $id[1]; ?>"><?php echo $food[1] ?></a> 
<?php
}
if (isset($_POST['zikan3'])){
    $zikan3=$_POST['zikan3'];
    echo $zikan3;
?>
    <a href="./detail.php?cid=<?php echo $id[2]; ?>"><?php echo $food[2] ?></a> 
<?php
}
?>
</br>
7/2
</br>
<?php
if (isset($_POST['zikan4'])){
    $zikan4=$_POST['zikan4'];
    echo $zikan4;
?>
    <a href="./detail.php?cid=<?php echo $id[3]; ?>"><?php echo $food[3] ?></a> 
<?php
}
if (isset($_POST['zikan5'])){
    $zikan5=$_POST['zikan5'];
    echo $zikan5;
?>
    <a href="./detail.php?cid=<?php echo $id[4]; ?>"><?php echo $food[4] ?></a> 
<?php
}
if (isset($_POST['zikan6'])){
    $zikan6=$_POST['zikan6'];
    echo $zikan6;
?>
    <a href="./detail.php?cid=<?php echo $id[5]; ?>"><?php echo $food[5] ?></a> 
<?php
}
?>
</br>
7/3
</br>
<?php
if (isset($_POST['zikan7'])){
    $zikan7=$_POST['zikan7'];
    echo $zikan7;
?>
    <a href="./detail.php?cid=<?php echo $id[6]; ?>"><?php echo $food[6] ?></a> 
<?php
}
if (isset($_POST['zikan8'])){
    $zikan8=$_POST['zikan8'];
    echo $zikan8;
 ?>
    <a href="./detail.php?cid=<?php echo $id[7]; ?>"><?php echo $food[7] ?></a> 
<?php
}
if (isset($_POST['zikan9'])){
    $zikan9=$_POST['zikan9'];
    echo $zikan9;
?>
    <a href="./detail.php?cid=<?php echo $id[8]; ?>"><?php echo $food[8] ?></a> 
<?php
}
?>
</br>
7/4
</br>
<?php
if (isset($_POST['zikan10'])){
    $zikan10=$_POST['zikan10'];
    echo $zikan10;
?>
    <a href="./detail.php?cid=<?php echo $id[9]; ?>"><?php echo $food[9] ?></a> 
<?php
}
if (isset($_POST['zikan11'])){
    $zikan11=$_POST['zikan11'];
    echo $zikan11;
?>
    <a href="./detail.php?cid=<?php echo $id[10]; ?>"><?php echo $food[10] ?></a> 
<?php
}
if (isset($_POST['zikan12'])){
    $zikan12=$_POST['zikan12'];
    echo $zikan12;
?>
    <a href="./detail.php?cid=<?php echo $id[11]; ?>"><?php echo $food[11] ?></a> 
<?php
}
?>
</br>
7/5
</br>
<?php
if (isset($_POST['zikan13'])){
    $zikan13=$_POST['zikan13'];
    echo $zikan13;
?>
    <a href="./detail.php?cid=<?php echo $id[12]; ?>"><?php echo $food[12] ?></a> 
<?php
}
if (isset($_POST['zikan14'])){
    $zikan14=$_POST['zikan14'];
    echo $zikan14;
 ?>
    <a href="./detail.php?cid=<?php echo $id[13]; ?>"><?php echo $food[13] ?></a> 
<?php
}
if (isset($_POST['zikan15'])){
    $zikan15=$_POST['zikan15'];
    echo $zikan15;
?>
    <a href="./detail.php?cid=<?php echo $id[14]; ?>"><?php echo $food[14] ?></a> 
<?php
}
?>
</br>
7/6
</br>
<?php
if (isset($_POST['zikan16'])){
    $zikan16=$_POST['zikan16'];
    echo $zikan16;
?>
    <a href="./detail.php?cid=<?php echo $id[15]; ?>"><?php echo $food[15] ?></a> 
<?php
}
if (isset($_POST['zikan17'])){
    $zikan17=$_POST['zikan17'];
    echo $zikan17;
 ?>
    <a href="./detail.php?cid=<?php echo $id[16]; ?>"><?php echo $food[16] ?></a> 
<?php
}
if (isset($_POST['zikan18'])){
    $zikan18=$_POST['zikan18'];
    echo $zikan18;
?>
    <a href="./detail.php?cid=<?php echo $id[17]; ?>"><?php echo $food[17] ?></a> 
<?php
}
?>
</br>
7/7
</br>
<?php
if (isset($_POST['zikan19'])){
    $zikan19=$_POST['zikan19'];
    echo $zikan19;
?>
    <a href="./detail.php?cid=<?php echo $id[18]; ?>"><?php echo $food[18] ?></a> 
<?php
}
if (isset($_POST['zikan20'])){
    $zikan20=$_POST['zikan20'];
    echo $zikan20;
?>
    <a href="./detail.php?cid=<?php echo $id[19]; ?>"><?php echo $food[19] ?></a> 
<?php
}
if (isset($_POST['zikan21'])){
    $zikan21=$_POST['zikan21'];
    echo $zikan21;
?>
    <a href="./detail.php?cid=<?php echo $id[20]; ?>"><?php echo $food[20] ?></a> 
<?php
}
?>
</br>

<p><center><input type="button" value="トップに戻る" onClick="location.href='./index.html'"></a></center></p>
<p><center><input type="button" value="期間入力画面に戻る" onclick=history.back()></a></center></p>
</center>
</body>
</html>