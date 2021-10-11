<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr= array();
        if(isset($_POST['cot'])&& is_numeric($_POST['cot'])) $n=$_POST['cot'];
        else $n=0;
        if(isset($_POST['hang'])&& is_numeric($_POST['hang'])) $m=$_POST['hang'];
        else $m=0;

        function taoMatrix(&$arr,$n,$m)
        {
            for($i=0;$i<$m;$i++)
                for($j=0;$j<$n;$j++)
                    $arr[$i][$j]= rand(-200,200);
        }
        function demsole($arr,$n,$m)
        {
            $dem=0;
            for($i=0;$i<$m;$i++)
            {
                for($j=0;$j<$n;$j++)
                {
                    if($arr[$i][$j]%2!=0) $dem++;
                }
            } 
            return $dem; 
        }
        function thayso1(&$arr,$n,$m)
        {
            for($i=0;$i<$m;$i++)
            {
                for($j=0;$j<$n;$j++)
                {
                    if($arr[$i][$j]!=0) $arr[$i][$j]=1;
                }
            }  
        }
        $ketqua="";
        if(isset($_POST['xuatmt']))
        {
            taoMatrix($arr,$n,$m);
            $ketqua="Mảng mới được tạo ra là:&#13;&#10;";
            for($i=0;$i<$m;$i++)
            {
                for($j=0;$j<$n;$j++)
                {
                   
                    $ketqua.= " ".$arr[$i][$j];
                }
                $ketqua.="&#13;&#10;";
            }  
            $ketqua.="Trong mảng có ".demsole($arr,$n,$m)." số lẻ&#13;&#10;";
            $ketqua.="Mảng sau khi thay đổi:&#13;&#10;";
            thayso1($arr,$n,$m);
            for($i=0;$i<$m;$i++)
            {
                for($j=0;$j<$n;$j++)
                {
                     $ketqua.= " ".$arr[$i][$j];
                }
                $ketqua.="&#13;&#10;";
            }
        }

    ?>


<form action="" method = "post">
    <fieldset>
        <legend>Ma Trận</legend>
        <table border = "0">
            <tr>
                <td>
                    Nhập n:
                </td>
                <td>
                    <input type="text" name ="cot" value = "<?php echo $n?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Nhập m:
                </td>
                <td>
                    <input type="text" name ="hang" value = "<?php echo $m?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name = "xuatmt" value ="Xuất Ma Trận">
                </td>
            </tr>
            <tr>
                <td colspan = "2">
                    <textarea name="Ketqua" cols="30" rows="10"> <?php echo $ketqua?></textarea>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>