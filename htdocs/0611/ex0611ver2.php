<?php>
    
$hash=[
    name => '名前',
    f_name => 'フリガナ',
    a_number => '郵便番号',
    d_number => '電話番号',
    address => '住所',
    comment => 'コメント'
];


$usr_data ='';
foreach ($_POST as $key => $value){
    $usr_data .= $hash{$key}.'='.$value.',';
    echo $hash{$key}.'='.$value."<br>\n";
}
    
echo '
<form action="ex0611ver3.php" method="post">
<input type="hidden" name="usrdata" value="'.$usr_data.'">
<input type="submit" value="送信する">
</form>
';
    
?>
