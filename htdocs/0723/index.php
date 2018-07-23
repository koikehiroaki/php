<!DOCTYPE html>
<html>

<head>
    <title>0723</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
</head>

<body>
    <h1>イメージ一覧</h1>
    <?php
    
//config
    $dir = './img/'; //ディレクトリーのパス
//open Directory
        if (is_dir($dir)) { //ディレクトリーがあるか
            if ($dh = opendir($dir)){ //ディレクトリを開く
            while (($file = readdir($dh)) !== false) { // ディテクトリーの全てのファイル名１つづつを取得する
                if ($file != "." && $file != ".." && $file != '.DS_Store'){
                    //echo "filename: $file <br>\n";
                    //echo '<img src = "'.$dir.$file.'">'."\n";
                    echo "<h2>$file</h2>\n";
                    $path = $dir.$file.'/';
                    //echo $path.'<br>';
                    
                    //下のディレクトリを開く
                    if (is_dir($path)) {
                        if($dh2 = opendir($path)){
                            while(($entry = readdir($dh2)) != false){
                                //if((filetype($path.$entry)) != "dir"){
                                    if ($entry != "." && $entry != ".." && $entry != '.DS_Store'){
                                //echo "filename: $entry <br>\n";
                                 echo '<img src = "'.$path.$entry.'" width="100px">'."\n";
                
                                }
                                
                            //}
                        }
                    }
                }
           }
       }
   }
    
}
    
?>

</body>

</html>
