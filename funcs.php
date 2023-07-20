<!-- 関数一覧！！ -->

<?php

// データベース接続
function db_connect(){
    try {
        $pdo = new PDO('mysql:dbname=Brewery_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }
    return $pdo;
};





