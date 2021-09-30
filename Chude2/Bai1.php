<?php
    //hàm kiểm tra số nguyên tố
    function sont($a)
    {
        if ($a<=1) return false;
        else if($a<4) return true;
                else
                {
                    $dem=0;
                    for($i=2;$i<=floor(sqrt($a));$i++)
                        {
                            if($a%$i==0) 
                            {
                                $dem++;
                                break;
                            }
                        }
                    if($dem==0) return true;
                    else return false;
                }
    }
    //hàm đếm số lượng chữ số
    function count_digit($a)
    {
        $count=0;
        while(floor($a/10)!=0)
        {
            $count++;
            $a=floor($a/10);
        }
        return $count+1;
    }
    //hàm tìm chữ số lớn nhất
    function max_digit($a)
    {
        $max=0;
        while(floor($a/10)!=0)
        {
            if($a%10>$max) $max=$a%10;
            $a=floor($a/10);
        }
        if($a>$max) $max=$a;
        return $max;
    }

    //tạo ngẫu nhiên 1 giá trị trong khoảng [10,1000]
    $n=rand(10,1000);
    echo "Giá trị n được tạo ngẫu nhiên là: ".$n;
    echo "<br>";
    //câu a: Hiển thị các số nguyên tố nhỏ hơn n
    echo "Các số nguyên tố nhỏ hơn $n là: ";
    for($i=2;$i<$n;$i++)
        if(sont($i)) echo $i ." ";
    echo "<br>";
    //Câu b: cho biết n có bao hiêu chữ số
    echo "Số $n có ".count_digit($n)." chữ số";
    echo "<br>";
    //Câu c: cho biết chữ số lớn nhất trong n
    echo "Chữ số ".max_digit($n) ." là chữ số lớn nhất trong $n";
?>