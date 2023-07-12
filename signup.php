<!-- ユーザー登録画面 -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>

<body>

    <header>ユーザー登録</header>

    <form method="POST" action="signup_act.php">
        <p>酒蔵名<input type="text" name="breweryname"></p>
        <p>氏名<input type="text" name="username"></p>
        <p>メールアドレス<input type="text" name="email"></p>
        <p>パスワード<input type="password" name="password"></p>

        <input type="radio" name="kanri_flag" value="1" id="manager">
        <label for="admin">管理者</label>

        <input type="radio" name="kanri_flag" value="0" id="employee">
        <label for="employee">従業員</label>

        <br>

        <input type="submit" value="登録">
    </form>

</body>

</html>