<table boder = >
 <?php
    // hàm đếm số lượng chữ số
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

    for($i=8;$i>=0;$i--)
    {
        echo"<tr>";
        if($i!=0) 
        {
            echo " Giải $i: ";
            switch($i)
            {
                case 8: 
                    {
                        $tam=rand(0,99);
                        if(2-count_digit($tam)!=0)
                            echo "0$tam<br>";
                        else echo "$tam<br>";
                        break;
                    }
                case 7:
                    {
                        $tam=rand(0,999);
                        if(3-count_digit($tam)!=0)
                        {
                            for($j=1;$j<=3-count_digit($tam);$j++) echo"0";
                            echo "$tam<br>";
                        }
                        else echo "$tam<br>";
                        break;
                    }
                case 6:
                    {
                        
                        for($j=1;$j<=3;$j++)
                        {
                            
                            $tam=rand(0,9999);
                            if(4-count_digit($tam)!=0)
                                {
                                    for($k=1;$k<=3-count_digit($tam);$k++) echo"0";
                                    echo "$tam ";
                                }
                                else echo "$tam ";
                            
                        }
                        echo "<br>";
                        break;
                    }
                case 5:
                    {
                        $tam=rand(0,9999);
                            if(4-count_digit($tam)!=0)
                            {
                                for($j=1;$j<=3-count_digit($tam);$j++) echo"0";
                                echo "$tam ";
                            }
                            else echo "$tam ";
                        echo "<br>";
                        break;
                    }
                case 4:
                    {
                        for($j=1;$j<=7;$j++)
                        {
                            $tam=rand(0,99999);
                            if(4-count_digit($tam)!=0)
                                {
                                    for($k=1;$k<=5-count_digit($tam);$k++) echo"0";
                                    echo "$tam ";
                                }
                                else echo "$tam ";
                                }
                        echo "<br>";
                        break;
                    }
                case 3:
                    {
                        for($j=1;$j<=2;$j++)
                        {
                            $tam=rand(0,99999);
                            if(4-count_digit($tam)!=0)
                                {
                                    for($k=1;$k<=5-count_digit($tam);$k++) echo"0";
                                    echo "$tam ";
                                }
                                else echo "$tam ";
                                }
                        echo "<br>";
                        break;
                    }
                case 2:
                    {
                        $tam=rand(0,99999);
                            if(4-count_digit($tam)!=0)
                            {
                                for($j=1;$j<=3-count_digit($tam);$j++) echo"0";
                                echo "$tam ";
                            }
                            else echo "$tam ";
                        echo "<br>";
                        break;
                    }
                case 1:
                    {
                        $tam=rand(0,99999);
                            if(4-count_digit($tam)!=0)
                            {
                                for($j=1;$j<=3-count_digit($tam);$j++) echo"0";
                                echo "$tam ";
                            }
                            else echo "$tam ";
                        echo "<br>";
                        break;
                    }
            }   
        }
        else 
        {
            echo "Giải Đăc Biệt: ";
            $tam=rand(0,999999);
            if(6-count_digit($tam)!=0)
                {
                    for($j=1;$j<=3-count_digit($tam);$j++) echo"0";
                    echo "$tam ";
                }
                else echo "$tam ";
        }
        echo "</tr>";
    }

?>   
</table>
