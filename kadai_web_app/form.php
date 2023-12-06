<!DOCTYPE html>
<html>
<head>
<title>社員情報入力フォーム</title>
<meta charset='utf-8'>
</head>
<body>
    <h1>社員情報入力フォーム</h1>
<form action="confirm.php" method="post">
    <table>
        <tr>
            <td>社員名</td>
            <td>
                <input type="text" name="user_name">
            </td>
        </tr>
        <tr>
            <td>年齢</td>
            <td>
                <input type="text" name="user_age">
            </td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td>
                <select name="user_department">
                    <option>開発部</option>
                    <option>営業部</option>
                    <option>人事部</option>
            </td>
        </tr>
    </table>
    <input type="submit" value="送信">
</body>
</html>