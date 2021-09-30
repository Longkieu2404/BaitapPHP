<div style = "align: center">
    <table border="1px">
        <tr>
            <td colspan = "10"><h3 style = "text-align: center"> Bảng cửu chương</h3></td>
        </tr>
        <tr>
            <?php
            for($i = 1; $i <= 10; $i ++) {
                echo "<td>";
                for($j = 1; $j <= 10; $j ++) {
                    echo "$i x $j = " . ($i * $j);
                    echo "<br>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </table>
</div>
