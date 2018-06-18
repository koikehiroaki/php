<?php

$csvdate = '';
foreach ($_POST as $key => $value){
    //echo $key.':'.$value."<br>\n";
    $csvdata .= $key.':'.$value.',';
}
$csvdata .= "\n";
//echo $csvdata;

$fp = fopen('data0618.csv', "a");
flock($fp, LOCK_EX);
fputs($fp, $csvdata);
fclose($fp);



?>
