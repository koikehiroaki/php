<?php

$fp = fopen("ex0611ver4.csv", "a");
flock($fp, "LOCK_EX");
fputs($fp, $_POST{'usrdata'} ."\n");
fclose($fp);
      
echo "送信完了";      

?>