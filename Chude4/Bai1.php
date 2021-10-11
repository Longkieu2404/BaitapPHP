<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Xử lý n</title>
</head>
<body>
<?php
	if(isset($_POST['n'])) $n=$_POST['n'];
	else $n=0;

	$ketqua="";
	if(isset($_POST['hthi'])) 
	{	//Tạo mảng có n phần tử, các phần tử có giá trị [-100,100]
		$arr=array();
		for($i=0;$i<$n;$i++)
		{
			$x=rand(-200,200);
			$arr[$i]=$x;
		}
		//In ra mảng vừa tạo
		$ketqua="Mảng được tạo là:" .implode(" ",$arr)."&#13;&#10;";
		//sort($arr);
		$ketqua.="Mảng được sx là:" .implode(" ",$arr)."&#13;&#10;";	
		$ngaunhien = rand(-200,200);
		$vitri = rand(0,$n);
		for($j=$n;$j>$vitri;$j--)
			$arr[$j]=$arr[$j-1];
		$arr[$vitri]=$ngaunhien;
		$ketqua.= "Mảng sau khi chèn số $ngaunhien vào vị trí $vitri là: ".implode(" ",$arr)."&#13;&#10;";
		function sapxetuyy(&$arr,$vitri,$n)
		{
			//tang dan
			for($i=0;$i<$vitri-1;$i++)
				{
					for($j=$vitri-1;$j>$i;$j--)
					{
						if($arr[$j]<$arr[$i])
						{
							$arr[$i]=$arr[$i]+$arr[$j];
							$arr[$j]=$arr[$i]-$arr[$j];
							$arr[$i]=$arr[$i]-$arr[$j];
							
						}
					}
				}
			//giam dan
			for($i=$vitri+1;$i<$n;$i++)
				{
					for($j=$n;$j>$i;$j--)
					{
						if($arr[$j]>$arr[$i])
						{
							$arr[$i]=$arr[$i]+$arr[$j];
							$arr[$j]=$arr[$i]-$arr[$j];
							$arr[$i]=$arr[$i]-$arr[$j];
							
						}
					}
				}
		}
		sapxetuyy($arr,$vitri,$n);
		$ketqua.= "Câu d: ".implode(" ",$arr)."&#13;&#10;";
	}
?>
<form action="" method="post">
	Nhập n: <input type="text" name="n" value="<?php echo $n?>"/>
	<input type="submit" name="hthi" value="Hiển thị"/><br>
	Kết quả: <br>
	<textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua?></textarea>
</form>
</body>
</html>
