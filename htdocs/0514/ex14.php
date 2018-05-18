<?php


for ($i = 1 ; $i <= $_POST[valA] ; $i++){
    for ($n = 1 ; $n <= $_POST[valB] ; $n++){
        for ($o = 1 ; $o <= $_POST[valC] ; $o++){
            $a = $i*$n*$o; 
            if ($a % 3 == 0){
                echo '<p style = "color:red">'.$a."</p>\n";
            }elseif ($a % 4 == 0){
                echo '<p style = "color:blue">'.$a."</p>\n"; 
            }else{
                echo $a." ";
            }   
        }   
    }  
}  

?>
