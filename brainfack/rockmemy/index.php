<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
		<title>WSZYSTKIE MEMY O ROCKU</title>
		
		<meta name="description" content="MEMY O ROCKU W JEDNYM MIEJSCU!" />
		<meta name="keywords" content="rock, miszor, memy" />

		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="wrapper">
			<div class="tlo">
				<?php
					$handle = opendir(dirname(realpath(__FILE__)).'/png/');

	        		while($file = readdir($handle)){
	            		if($file !== '.' && $file !== '..'){
	                		echo '<img src="png/'.$file.'" border="0" />';
	            		}	
	        		}
				?>
			</div>
			<div class="nav">
				<ol>
					<li><a href="#">WROC NA GÓRĘ</a></li>
					<li><a href="/./">BRAINFACK</a></li>
				</ol>
			</div>
		</div>
	</body>
</html>

