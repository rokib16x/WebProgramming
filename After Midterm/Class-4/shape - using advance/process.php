<?php
$size = $_POST['size'];
$design = $_POST['design'];
if($design==1){
    for($i=0;$i<$size;$i++){
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
}
else{
    for($i=0;$i<$size;$i++){
        for($j=0;$j<$size;$j++){
            echo "*";
        }
        echo "<br>";
    }
}