<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Stolarstwo Wójcicki</title>
	
	<meta name="description" content="Stolarstwo Wójcicki - firma produkująca mebl, dzwi itp" />
	<meta name="keywords" content="meble, stoły, wójcicki, stolarstwo" />
	
	<link href="../../css/style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<link href="../../css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>

	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<span style="color: #fff">Stolartswo Wójcicki</span>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="nav">
				<ol>
					<li><a href="../../">Strona Główna</a></li>
					<li><a href="#">Galeria</a>
                        <ul>
                            <li><a href="#">Drzwi</a></li>
                            <li><a href="../garderoby/">Garderoby</a></li>
                            <li><a href="../kuchnie/">Kuchnie</a></li>
                            <li><a href="../schody/">Schody</a></li>
                            <li><a href="../Inne/">Inne</a></li>
				        </ul>
                    </li>
					<li><a href="../../kontakt/">Kontakt</a></li>
				</ol>
			</div>
            <?php
                $handle = opendir(dirname(realpath(__FILE__)).'/png/');

                while($file = readdir($handle)){
                    if($file !== '.' && $file !== '..'){
                        echo '<div class="responsive">';
                            echo '<div class="img">';
                               echo '<img src="png/'.$file.'" alt="Trolltunga Norway" width="300" height="200">';
                                echo '<div class="desc">'.basename($file, ".png").'</div>';
                            echo '</div>';
                        echo '</div>';   
                    }	
                }
            ?>
		
		<div class="socials">
			<div class="socialdivs">
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="footer">Stolarstwo Wójcicki &copy; 2016 </div>
	</div>
	

    
	   <script src="../js/jquery-1.11.3.min.js"></script>
        
        <script>

        $(document).ready(function() {
        var NavY = $('.nav').offset().top;

        var stickyNav = function(){
        var ScrollY = $(window).scrollTop();

        if (ScrollY > NavY) { 
            $('.nav').addClass('sticky');
        } else {
            $('.nav').removeClass('sticky'); 
        }
        };

        stickyNav();

        $(window).scroll(function() {
            stickyNav();
        });
        });


        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }

        // Get all images and insert the clicked image inside the modal
        // Get the content of the image description and insert it inside the modal image caption
        var images = document.getElementsByTagName('img');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        var i;
        for (i = 0; i < images.length; i++) {
           images[i].onclick = function(){
               modal.style.display = "block";
               modalImg.src = this.src;
               modalImg.alt = this.alt;
               captionText.innerHTML = this.nextElementSibling.innerHTML;
           }
        }

    </script>

 
</body>
</html>