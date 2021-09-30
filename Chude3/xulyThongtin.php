<html>
    <form action="">
    <?php
        echo "<h3>Bạn đac đăng nhập thành công, dưới đây là thông tin bạn nhập</h3>";
        if(isset($_POST['hoten']))  
            $hoten=trim($_POST['hoten']); 
        else $hoten="";
        if(isset($_POST['sex']))  
            $gt=trim($_POST['sex']); 
        else $gt="";
        if(isset($_POST['add']))  
            $add=trim($_POST['add']); 
        else $add="";
        if(isset($_POST['phone']))  
            $phone=trim($_POST['phone']); 
        else $phone="";
        if(isset($_POST['quoctich']))  
            $quoctich=trim($_POST['quoctich']); 
        else $quoctich="";
        $dahoc="";
        if(isset($_POST['php']))
        {
            $php = $_POST['php'];
            if(strlen($dahoc)==0) $dahoc=$php;
            else $dahoc = $dahoc.", ".$php;
        }   
        else $php="";
        if(isset($_POST['c#']))
            {
                $cs = $_POST['c#'];
                if(strlen($dahoc)==0) $dahoc=$cs;
                else $dahoc = $dahoc.", ".$cs;
            }
        else $cs="";
        if(isset($_POST['xml']))
            {
                $xml = $_POST['xml'];
                if(strlen($dahoc)==0) $dahoc=$xml;
                else $dahoc = $dahoc.", ".$xml;
            }
        else $xml="";
        if(isset($_POST['python']))
            {
                $py = $_POST['python'];
                if(strlen($dahoc)==0) $dahoc=$py;
                else $dahoc = $dahoc.", ".$py;
            }
        else $py="";
        if(isset($_POST['ghichu']))  
            $note=trim($_POST['ghichu']); 
        else $note="";
        echo "Họ tên: $hoten <br>";
        echo "Giới Tính: $gt<br>";
        echo "Địa chỉ: $add<br>";
        echo "Số điện thoại: $phone<br>";
        echo "Quốc tịch: $quoctich<br>";
        echo "Các môn đã hoc: $dahoc".".<br>";
        echo "Ghi chú: $note<br>";
    ?>
    <a href="javascript:window.history.back(-1);">Quay Lại Trang trước</a>
    </form>
    
</html>