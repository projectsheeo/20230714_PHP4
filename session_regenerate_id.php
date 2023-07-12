<!-- セッションハイジャックを防ぐために新しいIDを発行する 
（これはいつもテンプレ）-->

<?php
//必ずsession_startは最初に記述
session_start();

//現在のセッションIDを取得
$id_old = session_id();

// 以下追加
    //新しいセッションIDを発行（前のSESSION IDは無効）
    // 新しい鍵を追加する
session_regenerate_id(true);

//新しいセッションIDを取得
$id_new = session_id();

//旧セッションIDと新セッションIDを表示
echo '古いセッション:' . $id_old . '<br />';
echo '新しいセッション:' . $id_new . '<br />';

?>