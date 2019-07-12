<?php
session_start();
error_reporting(0);

// DBの接続処理。接続できなければエラーメッセージを出す。
try{
    require_once('./common.php');
    if (DEBUG) {
        $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8','root','');
    } else {
        $dbServer = '127.0.0.1';
        $dbUser = $_SERVER['MYSQL_USER'];
        $dbPass = $_SERVER['MYSQL_PASSWORD'];
        $dbName = $_SERVER['MYSQL_DB'];
        $dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";
        $db = new PDO($dsn, $dbUser, $dbPass);
    }
} catch(PDOException $e){
    echo 'DB接続エラー: ' . $e->getmessage();
}