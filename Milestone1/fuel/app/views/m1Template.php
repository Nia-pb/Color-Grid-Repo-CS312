<head>
    <title><?php $headTitle;?></title>
    <meta charset="utf-8"></meta>
    <meta name="author" content="Matt Whitehead"></meta>
    <meta name="description" content="Webpage Template"></meta>
    <?php echo Asset::css($cssFile)?>
</head>
<body>
    <nav>
	<ul class="navbar">
	    <li class="navli"><a href="https://cs.colostate.edu:4444/~matt1985/m1/index/master/">
		<?php echo Asset::img($logo,array('alt'=>"Vandelay Industries Logo"));?></a></li>
            <li class="navli"><a href="https://cs.colostate.edu:4444/~matt1985/m1/index/master/"><strong>Home</strong></a></li>
            <li class="navli"><a href="https://cs.colostate.edu:4444/~matt1985/m1/index/master/team/"><strong>Our Team</strong></a></li>
	    <li class="navli"><a href="https://cs.colostate.edu:4444/~matt1985/m1/index/master/color/"><strong>Color Generation</strong></a></li>
        </ul>
    </nav>
    <?php echo $content?>
    <footer class="footer-style">
	<p class='footer-item-left'><a href="https://cs.colostate.edu:4444/~matt1985/m1/index/master/">
	<?php echo Asset::img($logo,array('alt'=>"Vandelay Industries Logo"));?></a></p>
	<ul class='footer-item-right'>
	    <li><?php echo "129 West 81st Street, Apt 5A"?></li>
	    <li><?php echo "New York, NY 10024"?></li>
	    <li><?php echo "212-555-3455"?></li>
	</ul>
    </footer>
</body>
