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
        class Ngươi{
            protected $hoten;
            protected $diachi;
            protected $gioitinh;
            function __contruct($hoten,$diachi,$gioitinh)
            {
                $this->hoten= $hoten;
                $this->diachi=$diachi;
                $this->gioitinh=$gioitinh;
            }
        }
        class Hocsinh extends Nguoi{
            protected $lopHoc;
            protected $nganhHoc;
            protected function setNganhHoc($nganhHoc){
                $this->nganhHoc=$nganhHoc;
            }
            protected function setLopHoc($lopHoc){
                $this->lopHoc=$lopHoc;
            }
        }
    ?>

</body>
</html>