<?php
    //tạo số nẫu nhiên từ [1,10]
    $n=rand(1,10);
    function bangcuuchuong($a)
    {
        echo "Bảng Cửu Chương $a: <br>";
        for($i=1;$i<=10;$i++)
            echo $a ." x ".$i . " = " . $a*$i ."<br>";
    }
    bangcuuchuong($n);
?>