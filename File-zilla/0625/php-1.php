<?php

$hash=[
        'family-name' => '名字（漢字）',
        'given-name' => '名前（漢字）',
        'family-name-k' => '名字（カタカナ）',
        'given-name-k' => '名前（カタカナ）',
        'example-a' => '性別',
        'year' => '誕生年',
        'month'=> '誕生月',
        'day'=> '誕生日',
        'post-code' => '郵便番号',
        'address-level1' => '都道府県・市区町村',
        'adderss-line1' => '番地・号',
        'address-line2' => 'ビル・マンション名・部屋番号',
        'tel-1' => 'ご連絡先電話番号の市外局番',
        'tel-2' => 'ご連絡先電話番号の市内局番',
        'tel-3' => 'ご連絡先電話番号の加入者番号',
        'tel-4' => 'ご連絡先電話番号2の市外局番',
        'tel-5' => 'ご連絡先電話番号2の市内局番',
        'tel-6' => 'ご連絡先電話番号2の加入者番号',
        'email' => 'メールアドレス',
        'email2' => 'メールアドレス (確認）',
        'organization' => 'ご職業',
        'pwd' => 'パスワード',
        'pwd2' => 'パスワード (確認）',
        'example-3' => 'サービスのご利用者',
      ];

$usr_data ='';
foreach ($_POST as $key => $value){
    $usr_data .= $value.',';
echo $hash{$key}.'=>'.$value."<br>\n";
    
}

echo '
<form action = "php-2.php" method = "post">   
<input type = "hidden" name = "usrdata" value = "'.$usr_data.'">
<input type = "hidden" name = "email" value = "'.$_POST{'email'}.'">
<input type = "submit" value = "送信">
</form>
';

?>
