<?php

// 読み込みのプログラム


$fp = fopen('date.csv', "r"); //ファイルポインタ
if ($fp){ // もしファイルポインタがあれば
    while(($line = fgets($fp)) !== false) { //１行の読み込みが間違いでは無いとき繰り返す
        echo $line.'<br>'; // １行のデータを書き出す
        
        //カンマ（文字列）ごとに分割して書き出す
        $date = explode(',',$line); 
        foreach($date as $key => $value){
            echo $key.':'.$value.'<br>';
        }
    }
    if (!feof($fp)) { //もしファイルポインタがファイルの最後（End of file）で無ければ
        echo "Error: fail\n"; //読み込みが失敗したかもしれません
    }
    fclose($fp); // ファイルを閉じる
}



?>
