<!-- データベースへの連携 -->

<?php

$breweryname = $_POST["breweryname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$kanri_flag = $_POST["kanri_flag"];

// データベースへの連携
require_once('funcs.php');
$pdo = db_connect();

// データ登録SQL作成
$sql = "INSERT INTO brewery_info (id, breweryname, username, email, password, kanri_flag, indate)
VALUES(NULL, :a1, :a2, :a3, :a4, :a5, sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $breweryname, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $username, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $kanri_flag, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// データ登録処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: signup_comp.php");
    exit;
};
