<?php

$fp = fopen("data0707.csv", "a");
flock($fp, LOCK_EX);
fputs($fp, $_POST{'usrdata'}."\n");
fclose($fp);

echo '書き出し完了'."<br>\n";






//echo $_POST{'usrdata'}."<br>\n";

$form_email = 'timf0731gb@docomo.ne.jp';

mb_language("japanese");
mb_internal_encoding("UTF-8");


$to = $form_email;
$title = '管理者用メール';
$content = htmlspecialchars($_POST{'usrdata'});
$header = "From: $form_email\nReply-To: $form_email\n";

if(mb_send_mail($to, $title, $content, $header)){
    echo "管理者用メールを送信しました<br>\n";
}else{
    echo "メールの送信に失敗しました<br>\n";
}

$to = $_POST{'email'};
$title = '自動返信用メール';
$content = htmlspecialchars($_POST{'usrdata'});
$header = "From: $form_email\nReply-To: $form_email\n";

if(mb_send_mail($to, $title, $content, $header)){
    echo "自動返信用メールを送信しました";
}else{
    echo "メールの送信に失敗しました";
}

?>
