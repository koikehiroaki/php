<?php

echo "<p>①１〜１００までの数を出力 <br></P>\n";

for ($i=1;$i<=100;$i++){
  echo $i.' ';
}

echo "<br>";

echo "<p>②１〜１００までの数を３で割った商を出力 <br></p>\n";

for ($i=1;$i<=100;$i++){
    $a = $i / 3;

    echo $a.' ';
}

echo "<br>";   

echo "<p>③１〜１００までの数を３で割った余りを出力 <br></p>\n";

for ($i=1;$i<=100;$i++){
    $a = $i % 3;

    echo $a.' ';
}


echo "<br>";   

echo '<p>④１〜１００までの数を３で割り切れる数とその個数と和を出力</p>';
$cnt = 0;
for ($i=1;$i<=100;$i++){
    $b = $i % 3;
    if($b == 0){
        $cnt++;
        echo $i.' ';
        $sum += $i;
    }
    
}
echo '<p>その個数は'.$cnt.'<?p>';
echo '<p>その和は'.$sum.'</p>';











?>