<?php

$mailbody = $_POST[mailbody];
$email_address = $_POST[email];

//echo $mailbody.'<br>';
//echo $email_address.'<br>';

$from_email='timf0731gb@docomo.ne.jp';

mb_language("japanese");
mb_internal_encoding("UTF-8");

$to = $from_email;
$title = 'テストメール';
$content = htmlspecialchars($_POST[mailbody]);
$header = "From: $from_email\nReply-To: $from_email\n";

if(mb_send_mail($to, $title, $content, $header)){
    echo "メールを送信しました";
} else{
    echo "メールの送信に失敗しました"; 
    }







?>
