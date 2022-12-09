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


echo $nickname;
echo'様<br>';
echo 'ご意見ありがとうございました<br>';
echo 'いただいたご意見『';
echo $goiken;
echo '』<br>';
echo $email;
echo 'にメールを送りましたのでご確認ください。';
$mail_sub='アンケートを受け付けました。';
$mail_body=$nickname."様へ¥nアンケートご協力ありがとうございます。";
$mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$mail_head='From:GS@googgg.com';
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email,$mail_sub,$mail_body,$mail_head);
?>

</body>
</html>