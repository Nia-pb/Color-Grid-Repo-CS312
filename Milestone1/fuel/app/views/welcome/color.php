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
    <br><br><br><br><br><br>
    <div style="padding-left:35px">
	<?php $redirect = '../grid';?>
	<?php
	if (isset($_GET['error'])) {
	    $redirect = 'grid';
	    $error=$_GET['error'];
	    echo "<p style='color:red'>$error entry is out of range</p>";
	}
	?>
	<div class="row">
	    <div class="col-md-12">
		    <h3>Create a color coordinate grid</h3>
		    <p>Please enter 1-26 in the <strong>Rows</strong> and <strong>Columns</strong> fields and 1-10 in the <strong>Colors</strong> field.</p> 
		    <form action =<?php echo $redirect; ?> method='get'>
			<p>Rows: <input type='text' name='rows'/></p>
			<p>Colums: <input type='text' name='cols'/></p>
			<p>Colors: <input type='text' name='color'/></p>
			<p><input type='submit' value='Submit'/>
		    </form>
	    </div>
	</div>
	<br><br>
    </div>
</body>
