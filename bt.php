<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body{
            background:darkgray;
        }
        h3{
            /* font-size: xx-large; */
            font-family: cursive;
            color: red;
            text-align: center;
        }
        table{
            background: aqua;
            margin: auto;
            margin-top:300px;
        }
        td{
            font-size : large;
        }
        thead{
            background: #fff14d;    
        }
    </style>
</head>
<body>
    <?php 
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
    if(isset($_POST['number']))  
        $number=trim($_POST['number']); 
    else $number="";
    
    ?>
    <form action="" method = "post">
        <table border = "0">
        <thead>
            <th colspan="2" align="center"><h3>Xử lý các yêu cầu bài tập 1 chủ đề 2</h3></th>
        </thead>
            <tr>
                <td>
                    Nhập vào n:
                </td>
                <td>
                    <input type="text" name="number" value="<?php  echo $number;?> "/>
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả:
                </td>
                <td>
                    <textarea name="ketqua" cols="50" rows="8" disabled><?php
                            if(isset($_POST['xuly']))
                                if (is_numeric($number) && $number>=10 && $number <=1000)  
                                    {
                                        //câu a: Hiển thị các số nguyên tố nhỏ hơn n
                                        echo "Các số nguyên tố nhỏ hơn $number là: ";
                                        for($i=2;$i<$number;$i++)
                                            if(sont($i)) echo $i ." ";
                                        echo "\n";
                                        //Câu b: cho biết n có bao hiêu chữ số
                                        echo "Số $number có ".count_digit($number)." chữ số";
                                        echo "\n";
                                        //Câu c: cho biết chữ số lớn nhất trong n
                                        echo "Chữ số ".max_digit($number) ." là chữ số lớn nhất trong $number";
                                    }
                            else {
                                    echo "Số nhập vào không thuộc phạm vi từ 10 đến 1000";
                                }
                        else $dientich=0;
                        ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Xử lý" name="xuly" /></td>
            </tr>
        </table>
    </form>
</body>
</html>