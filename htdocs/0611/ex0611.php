<?php

$form_email='timf0731gb@docomo.ne.jp';

mb_language("japanese");
mb_internal_encoding("UTF-8");

$to = $form_email;
$title = 'テストメール';
$content = htmlspecialchars($_POST);
$header = "Form: $form_email\nReply-To:
$form_email\n";

if(mb_send_mail($to, $title, $content, $header)){
    echo "メールを送信しました";
}else{
    echo "メールの送信に失敗しました";
}
    

?>
