<html>
<head>
<style>
    td{
        width:30px;
    }
    th{
        width:30px;
    }
    
    .tdColor1{
        width:20%;
    }
    .tdColor2{
        width:80%;
    }
    .colorTable{
        width:95%;
    }
</style>

</head>
<body>
<div style="width:816;height:1056px;padding: 35 35 35 35">
<div style="float:left">
<?php echo '<img src="https://cs.colostate.edu:4444/~matt1985/m1/assets/img/vandelaylogo-black.png" alt="Vandelay Logo">'?>
</div>
<h1 style="padding-left:275px">Vandelay Industries</h1>
<br><br><br>
<?php

    extract ($_GET);
    $colors = explode(",", $myColors);
  // echo $myColors;
   $size = count($colors);
    echo "<table class='colorTable'>";
    for ($idx=0;$idx<$size;$idx++)
    {
       // echo "test $idx".$colors[$idx];
        echo "<tr><td class='tdColor1'>".$colors[$idx]."</td><td class='tdColor2'></td></tr>";
    }

    echo "</table>"?>
    <br><hr><br><?php
    echo "<table border='1'><tr><th></th>";
    for ($col=0;$col<$cols;$col++)
    {
        echo "<th>" . chr(65+$col) . "</th>";
    }
    echo "<table border='1'>";
    $colorIndex=0;
    for ($row =0; $row < $rows;$row++)
    {
        $rowNum = $row +1;
        echo "<tr><td>$rowNum</td>";

        if ($colorIndex==9){
            $colorIndex=0;
        }
        else{
            $colorIndex++;
        }
        for ($col=0;$col<$cols;$col++)
        {
            echo "<td></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</div>
</body>
</html>
