<?php 

// セッション開始
session_start();

// データベース接続
require_once('funcs.php');
$pdo = db_connect();

echo 'おかえりなさい、'. $_SESSION["username"].'さん！';

// データ表示
$view = '';

// 管理者としてログインしている場合、編集を可能にする
if($_SESSION["kanri_flag"] === 1){
    $view .= '<p>酒蔵プロフィールを編集する</p>';
    $view .= '<a href="brewery_edit.php">編集画面へ</a>';
    $view .= '<p>お酒を登録する</p>';
    $view .= '<a href="sake_register.php">登録画面へ</a>';
} else {
 // 従業員としてログインしている場合、データを見るだけにする
    $view .= '<p>酒蔵のプロフィールを見る</p>';
    $view .= '<a href="brewery_detail.php">詳細画面へ</a>';
    $view .= '<p>登録済のお酒を見る</p>';
    $view .= '<a href="sake_detail.php">詳細画面へ</a>';
}

// データ表示
echo $view. '<br><br><br><br>';

// ログアウト
echo '<a href="logout.php">ログアウト</a>';

?>



