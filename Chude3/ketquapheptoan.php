<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép Tính</title>
    <style>
    
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
        function xuly($pt,$a,$b)
        {
            if($pt=="+") return $a+$b;
            else if($pt=="-") return $a-$b;
                else if($pt=="*") return $a*$b;
                    else
                    {
                        if($b!=0) return $a/$b;
                        else return "Không thể chia cho 0";
                    }
        }
        if(isset($_POST['pt']))
        {
            if($_POST['pt']=="+") $pt = "Cộng";
            else if($_POST['pt']=="-") $pt = "Trừ";
                    else if($_POST['pt']=="*") $pt = "Nhân";
                        else $pt="Chia";
        }     
        if(isset($_POST['so1']))  
            $so1=trim($_POST['so1']); 
        else $so1="";
        if(isset($_POST['so2']))  
            $so2=trim($_POST['so2']); 
        else $so2="";
        if(isset($_POST['tinh']))
                if (is_numeric($so1) && is_numeric($so2))  
                    $ketqua=xuly($_POST['pt'],$so1,$so2);
                else {
                        $ketqua="";
                    }
        else $ketqua=0;
    ?>

    <form action="ketquapheptoan.php" method ="post">
        <table border ="0">
            <tr>
                <thead>
                    <td colspan = "2">
                        <h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
                    </td>
                </thead>
                
            </tr>
            <tr>
                <td><font color ="F55414" >Chọn phép tính:</font></td>
                <td>
                <font color = "blue"><?php echo "$pt";?></font>
                </td>
            </tr>
            <tr>
                <td>Số thứ nhất:</td>
                <td><input type="text" name="so1"  value="<?php  echo $so1;?> "/></td>
            </tr>
            <tr>
                <td>Số thứ hai:</td>
                <td><input type="text" name="so2" value="<?php  echo $so2;?> "/></td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td><input type="text" name="ketqua" disabled="disabled" value="<?php  echo $ketqua;?> "/></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="javascript:window.history.back(-1);">Quay Lại Trang trước</a></td>
            </tr>
        </table>
    </form>
    
</body>
</html>