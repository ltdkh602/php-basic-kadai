<?php
$name = $_POST['user_name'];
$age = $_POST['user_age'];
$department = $_POST['user_department'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>Socialtech</title>
<meta charset='utf-8'>
</head>
<body>
    <h2>入力内容をを確認ください。</h2>
    <h3>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</h3>
    <table border="1">
        <tr>
            <td>項目</td>
            <td>入力内容</td>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>
        <button id="confirm-button" onclick="location.href = 'complete.php';">確定</button>
        <button id="cancel-button" onclick="history.back();">キャンセル</button>
</body>
</html>