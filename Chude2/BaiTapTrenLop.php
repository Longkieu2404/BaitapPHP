<?php
    define("Pi",3.14);
    $a=rand(1,5);
    $b=rand(10,100);
    echo "Giá trị a ngẫu nhiên là: $a <br>";
    echo "Giá trị b ngẫu nhiên là: $b <br>";
    switch($a)
    {
        case 1:
            {
                echo "Chu vi hình vuông cạnh $b là: ". 4*$b. "<br>";
                echo "Diện tích hình vuông cạnh $b là: ". $b*$b; 
                break;
            }
        case 2:
            {
                echo "Chu vi hình tròn bán kính $b là: ". 4*$b* Pi . "<br>";
                echo "Diện tích hình tròn bán kính $b là: ". $b*$b* Pi;
                break;
            }
        case 3:
            {
                echo "Chu vi hình tam giác đều cạnh $b là: ". 3*$b . "<br>";
                echo "Diện tích hình tam giác đều $b là: ". $b*$b*sqrt(3)/4;
                break;
            }
        case 4:
            {
                echo "Chu vi hình chữ nhật cạnh $a , $b là: ". ($a + $b)*2 . "<br>";
                echo "Diện tích hình chữ nhật cạnh $a , $b là: ". $a*$b;
                break;
            }
        default: break;
    }
?>