<?php
//echo "<pre>";
//配列の確認用
//print_r($_POST);
//echo "</pre>";

$hash=[
       name_f => '名前 (姓)',
       name_s => '名前 (名)',
       fname_f => 'フリガナ (姓)',
       fname_s => 'フリガナ (名)',
       zip => '郵便番号',
       address => '住所',
       phone => '電話',
       mail => 'メールアドレス',
       inq => 'お問い合せ'
      ];

$usr_data ='';
foreach ($_POST as $key => $value){
    $usr_data .= $value.',';
    echo $hash{$key}.'='.$value."<br>\n";
}

echo '
<form action="ex0521-2.php" method="post">
<input type="hidden" name="usrdata" value="'.$usr_data.'">
<input type="submit" value="送信する">
</form>
';

    
//echo $usr_data;

?>
