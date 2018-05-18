<?php


for ($i = 1 ; $i < $_POST[valA] ; $i++){
    for ($n = 1 ; $n < $_POST[valB] ; $n++){
        for ($o = 1 ; $o < $_POST[valC] ; $o++){
            $a = $i*$n*$o; 
            echo $a." ";
        }  
    }
}  

?>
