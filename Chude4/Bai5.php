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
    $path = 'sanpham.txt';
    $fp = @fopen($path,"a+");
    $arr = array();
    if(isset($_POST['maMH'])) $maMH=$_POST['maMH'];
        else $maMH="";
    if(isset($_POST['tenMH'])) $tenMH=$_POST['tenMH'];
        else $tenMH="";
    if(isset($_POST['dvt'])) $dvt=$_POST['dvt'];
        else $dvt="";
    if(isset($_POST['soLuong'])&& is_numeric($_POST['soLuong'])) $soLuong=$_POST['soLuong'];
        else $soLuong="";
    function layinfo($fp,&$arr)
    {
        while(!feof($fp))
        {
            $line = fgets($fp);
            $arrtemp =array();
            if($line!="")
            {
                $arrtemp = explode("\t",$line);
                $maMH=$arrtemp[0];
                $tenMH=$arrtemp[1];
                $dvt=$arrtemp[2];
                $soLuong=$arrtemp[3];
                $arr[$maMH]= array($tenMH,$dvt,$soLuong);
            } 
        }
    }
    layinfo($fp,$arr);
    function xuatinfo($arr)
    {
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<td><font color = 'red'>Mã sản Phẩm</font></td>";
        echo "<td><font color = 'red'>Tên sản Phẩm</font</td>";
        echo "<td><font color = 'red'>Đơn vị tính</font</td>";
        echo "<td><font color = 'red'>Số lượng</font</td>";
        echo "</tr>";
        foreach($arr as $id =>$ds)
        {
            echo "<tr>";
            echo "<td>".$id."</td>";
            foreach($ds as $info)
                echo "<td>".$info."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    if(isset($_POST['them']))
    {
        if($maMH!="" && $tenMH!="" && $dvt!="" && $soLuong!="")
            {
                $arr[$maMH] = array($tenMH,$dvt,$soLuong);
                fwrite($fp,$maMH);
                fwrite($fp,"\t");
                fwrite($fp,$tenMH);
                fwrite($fp,"\t");
                fwrite($fp,$dvt);
                fwrite($fp,"\t");
                fwrite($fp,$soLuong);
                fwrite($fp,"\r\n");
            }
        
    }
?>

<form action="" method = "post">
<fieldset>
    <legend>Nhập thông tin sản phẩm</legend>
    <table>
        <tr>
            <td>Mã mặt hàng: </td>
            <td><input type="text" name="maMH" value ="<?php echo $maMH;?>"/></td>
        </tr>
        <tr>
            <td>Tên mặt hàng: </td>
            <td><input type="text" name="tenMH" value ="<?php echo $tenMH;?>"/></td>
        </tr>
        <tr>
            <td>Đơn vị tính: </td>
            <td><input type="text" name="dvt" value ="<?php echo $dvt;?>"/></td>
        </tr>
        <tr>
            <td>Số lượng: </td>
            <td><input type="text" name="soLuong" value ="<?php echo $soLuong;?>"/></td>
        </tr>
        <tr>
            <td colspan ="2"><input type="submit" name ="them" value="Thêm sản phẩm"></td>
        </tr>
    </table>
    <?php 
        if(!empty($arr))
            xuatinfo($arr);
    ?>
</fieldset>

</form>
</body>
</html>