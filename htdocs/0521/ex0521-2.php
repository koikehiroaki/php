<?php

echo $_POST{'usrdate'};
$outfile = './usrdata.dat';
$fp = fopen($outfile, "a");
flock($fp,LOCK_EX);
fwrite($fp, $_POST{'usrdata'}."\n");
//flock($fp,LOCK_UN);
fclose($fp);

echo '書き出し完了！';



?>
