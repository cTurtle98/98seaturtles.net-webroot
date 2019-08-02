<style>
/*
     CSS-Tricks Example
     by Chris Coyier
     http://css-tricks.com
*/



* { margin: 0; padding: 0; }

#photos {
   /* Prevent vertical gaps */
   line-height: 0;

   -webkit-column-count: 5;
   -webkit-column-gap:   0px;
   -moz-column-count:    5;
   -moz-column-gap:      0px;
   column-count:         5;
   column-gap:           0px;

}
#photos img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
}

@media (max-width:1200px) {
  #photos {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width:1000px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width:800px) {
  #photos {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width:400px) {
  #photos {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}

</style>

<!DOCTYPE html>
<html>

<head>
    <meta charset='UTF-8'>
    
    <title>Photography - 98SeaTurtles Network</title>    

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
    <!--START ADDED BY CIARAN 1-->
	        <link rel="stylesheet" href="/css/main.css">
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/head.php"; ?>
	<!-- END ADDED BY CIARAN 1-->
</head>

<body>
    <?php if( $_GET["image"] ) { ?>
        <script>
         $(window).load(function(){
           $.fancybox.open('<?php echo $_GET["image"] ?>');
         });
        </script>

     <?php } else { ?>
 
        <script>
         $(document).ready(function() {
             $('.fancybox').fancybox({
                 padding : 0,
                 openEffect  : 'elastic'
             });
         });
        </script>
     <?php } ?>
<!-- START ADDED BY CIARAN 2-->
	<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/include/header.html";
	include $_SERVER['DOCUMENT_ROOT'] . "/include/menu.html";
	?>
	<div id="content">
		<div id="content-title">
			Photography
		</div>
		<div id="content-subtitle">Click on image to enlarge</div>
		<div id="content-body"><a href="gear/">Gear Info</a><br>View These images on instagram <br><a href="http://instagram.com/cturtle98.photo">@cTurtle98.photo</a></div>
		<div id="content-body">
<!-- END ADDED BY CIARAN 2-->
		<div id="photos">
			<?php 
			$dirname = ".";
			foreach (new DirectoryIterator($dirname) as $image) {
				if(!$image->isDot() && ($image->getExtension() == "jpg"  || $image->getExtension() == "png" || $image->getExtension() == "gif") ) {
					echo '<a href="'.$image->getPathname().'" class="fancybox" rel="gallery"><img src="'.$image->getPathname().'" /></a>';
				}
			} 
			?>
		</div>
		</div>
        <div class="fb-comments" data-href="http://98seaturtles.net/photography/" data-numposts="5"></div>
	</div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer.html";?>
</body>
</html>
 
