<?php

//input
$fp = fopen('date.csv', "r"); //ファイルポインタ
if ($fp){ // もしファイルポインタがあれば
    while(($line = fgets($fp)) !== false){ //行読み込みができれば繰り返す
        echo $line;　//１行データを書き出す
    }
if(!feof($fp)){　//もしファイポインタがファイルの最後でなければ
    echo "Error: fail\n";　// 読み込みが失敗したかもしれません
}
    fclose($fp);　// ファイルを閉じる
}



?>
