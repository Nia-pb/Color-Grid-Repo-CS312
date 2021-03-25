<html>
<head>
<style>
    td{
        width:30px;
    }
    th{
        width:30px;
    }
    .color{
        background-color:red;
    }
    .red{
        background-color:red;
    }
    .orange{
        background-color:orange;
    }
    .yellow{
        background-color:yellow;
    }
    .green{
        background-color:green;
    }
    .blue{
        background-color:blue;
    }
    .purple{
        background-color:purple;
    }
    .grey{
        background-color:grey;
    }
    .brown{
        background-color:brown;
    }
    .black{
        background-color:black;
    }
    .teal{
        background-color:teal;
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const rows=<?php echo $rows?>;
    const cols=<?php echo $cols?>;
    const colorCount = <?php echo $color?>;
    const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal'];
    function colorChange(lst, idx)
    {
        const val = lst.value;
        for (var i =0;i<colorCount;i++)
        {
            if (i!=idx)
            {
                let val2 = document.getElementById ("list"+i).value;
                if (val2==val)
                {
                    $("#divMessage").html("<h3><font color='red'>This color is already used</font></h3>");
                    lst.selectedIndex=idx;
                    return;
                }
            }
        }

        $("#colorRow"+idx).css("background-color", val);
        //alert (lst.value);
    }
    function print ()
    {
        let colors="";
        for (var i =0;i<colorCount;i++)
        {
            let color = document.getElementById ("list"+i).value;
            colors+= (colors===""?color:","+color);
        }
        const url = "gridview.php?rows="+rows+"&cols="+cols+"&myColors="+colors;
       // alert(url);
        window.open (url);
    }
</script>
</head>
<body>
<div class="homeContainer">
        <?php echo '<img class="imgstyle" src="https://cs.colostate.edu:4444/~matt1985/m1/assets/img/colorwheel.jpg" alt="Color Wheel">'?>
        <div class="aboutBlock">
            <p><?php echo ""?></p>
        </div>
	<div class="aboutText">
            <p><?php echo 'Color Generation'?></p>
        </div>
    </div>
    <br><br><br><br><br><br><br>
<div style="padding-left:35px;padding-right:35px">
<div id='divMessage'></div>
<?php
  
  /*
    $parts = explode ("/", $_SERVER['QUERY_STRING']);
    $cnt=count($parts);
    $cols =$parts[$cnt -2]; 
    $rows =$parts[$cnt -1]; 
    */
    $colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal'];

    echo "<table class='colorTable'>";

    for ($idx=0;$idx<$color;$idx++)
    {
       // echo "test $idx".$colors[$idx];
        echo "<tr><td class='tdColor1'>".getDropDown($idx)."</td><td id='colorRow$idx' class='tdColor2' style='background-color:".$colors[$idx]."'></td></tr>";
    }
    echo "</table>";
    ?><br><hr><br><?php
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
        echo "<tr><td class='$colors[$colorIndex]'>$rowNum</td>";

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
    function getDropDown ($idx)
    {
        $colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal'];
        $color= $colors[$idx];
        $select = "<select id='list$idx' onchange='colorChange(this, $idx)'>";
        for ($idx=0;$idx<10;$idx++)
        {
            if ($color==$colors[$idx])
            {
                $select .= "<option selected>".$colors[$idx]."</option>";
            }else{
                $select .= "<option>".$colors[$idx]."</option>";
            }
        }
        return $select .="</select>";
    }
?>
<br>
<button onClick='print()'>Print</button>
<br><br><br>
</div>
</body>
</html>
