<?php
    $path = 'KetQuaBai5.txt';
    $fp = @fopen($path,"a+");

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
    $a=rand(-100,100);
    echo "Số được tạo ngẫu nhiên: $a<br>";
    if(sont($a))
    {
        echo "$a là 1 số nguyên tố";
        fwrite($fp,$a);
        fwrite($fp,"\r\n");
    } 
    else echo "$a không phải là 1 số nguyên tố";
    fclose($fp);
?>