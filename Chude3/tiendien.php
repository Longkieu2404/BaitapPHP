<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tiền Điện</title>
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
        if(isset($_POST['chuho']))  
            $chuho=($_POST['chuho']); 
        else $chuho="";
        if(isset($_POST['chisocu']))  
            $chisocu=trim($_POST['chisocu']); 
        else $chisocu=0;
        if(isset($_POST['chisomoi']))  
            $chisomoi=trim($_POST['chisomoi']); 
        else $chisomoi=0;
        if(isset($_POST['dongia']))  
            $dongia=trim($_POST['dongia']); 
        else $dongia=2000;
        if(isset($_POST['tinh']))
                if (is_numeric($chisocu) && is_numeric($chisomoi) && $chisocu>0 && $chisomoi >=$chisocu && $dongia>0)  
                    $tongtien=($chisomoi - $chisocu)* $dongia;
                else {
                        $tongtien="";
                    }
        else $tongtien=0;
    ?>

    <form action="" method ="post">
        <table border ="0">
            <tr>
                <thead>
                    <td colspan = "2">
                        <h3>THANH TOÁN TIỀN ĐIỆN</h3>
                    </td>
                </thead>
                
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="chuho" value="<?php  echo $chuho;?> "/> </td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/> (Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/> (Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="dongia" value="<?php  echo $dongia;?> "/> (VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="tongtien" disabled="disabled" value="<?php  echo $tongtien;?> "/> (VNĐ)</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
    
</body>
</html>