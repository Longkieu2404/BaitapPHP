<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table{
            background: aqua;
            margin: auto;
            margin-top:300px;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
        
    </style>
</head>
<body>
    <?php 
    $arr=array();
    if(isset($_POST['dayso']))
    {
        $dayso=($_POST['dayso']);
        $arr = explode(",",$dayso);
    }  
    else $dayso=""; 
    if(isset($_POST['tinh']))  
        $kq=array_sum($arr);
    else $kq="";
    
    ?>
    <form action="" method = "post">
        <table border = "0">
        <thead>
            <th colspan="3" align="center"><h3>Nhập và tính trên dãy số</h3></th>
        </thead>
            <tr>
                <td>
                    Nhập dãy sô:
                </td>
                <td>
                    <input type="text" name="dayso" value="<?php  echo $dayso;?> "/>
                </td>
                <td>
                    <font color="red">(*)</font>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" value="Tổng dãy số" name="tinh"/></td>
            </tr>
            <tr>
                <td>
                    Tổng dãy số:
                </td>
                <td>
                    <input type="text" name="tongdayso" disabled="disabled" value="<?php  echo $kq;?> "/></td>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                <font color="red">(*)</font> Các số được nhập cách nhau bằng dấu ","
                </td>
            </tr>
        </table>
    </form>
</body>
</html>