<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>php課題</title>
</head>

<body>
<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname=htmlspecialchars($nickname);
$email=htmlspecialchars($email);
$goiken=htmlspecialchars($goiken);

if($nickname=='')
{
    echo'ニックネームが入力されていません。<br>';
}
else
{
    echo'ようこそ';
    echo $nickname;
    echo'様';
    echo'<br>';
}
if($email=='')
{
    echo'メールアドレスが入力されていません。<br>';
}
else
{
    echo'メールアドレス:';
    echo $email;
    echo'<br>';
}

if($goiken=='')
{
    echo'ご意見が入力されていません。<br>';
}
else
{
    echo'ご意見『';
    echo $goiken;
    echo'』<br>';
}

if($nickname==''||$email==''||$goiken=='')
{
    echo'<form>';
    echo'<input type="button" onclick="history.back()" value="戻る">';
    echo'</form>';
}
else
{
    echo'<form method="post" action="thanks.php">';
    echo'<input name="nickname" type="hidden" value="'.$nickname.'">';
    echo'<input name="email" type="hidden" value="'.$email.'">';
    echo'<input name="goiken" type="hidden" value="'.$goiken.'">';
    echo'<input type="button" onclick="history.back()" value="戻る">';
    echo'<input type="submit" value="OK">';
    echo'</form>';
}
?>

</body>
</html>