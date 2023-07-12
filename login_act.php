<?php

// セッションスタート
session_start();

// データの受け取り
$email = $_POST["email"];
$password = $_POST["password"];

// データベース接続
require_once('funcs.php');
$pdo = db_connect();

// データ登録SQL作成
$sql = "SELECT * FROM brewery_info WHERE email=:email AND password=:password";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':password', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// データ登録処理後
$val = $stmt->fetch(); //1レコードだけ取得する方法
// $val = $stmt->fetchAll(); //複数レコード取得する方法

// 該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["kanri_flag"] = $val['kanri_flag'];
    $_SESSION["username"] = $val['username'];
    $_SESSION["email"] = $val['email'];
    header("Location: login_top.php");

}else{
    // logout処理を経由して全画面へ
    header("Location: login.php");
}
exit();

?>

