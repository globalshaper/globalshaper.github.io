<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="images/logo_icon.png" type="image/png">
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php
	$pageName= basename($_SERVER['REQUEST_URI'], '.php');
	?>
	<title>Home</title>

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<script src="js/jquery.min.js"> </script>
	
	<script src="js/bootstrap.js"></script>
	
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/jquery.js" type="text/javascript"></script> 
    <script src="js/endless_scroll_min.js" type="text/javascript"></script>
</head>
<body>
 <?php
    include("header.php");
 ?>  
<div class="welcome">
	<div class="container">
		<div class="col-md-4 welcome-img">
			<img src="images/weelcome.png" alt="" />
		</div>
		<div class="col-md-8 welcome-text">
			<h4>Welcome To Detriot Global Shaper Hub</h4>
			<p>The Global Shapers of the Detroit Hub work as a unified team towards greater inclusivity in the city of Detroit by thoughtfully designing and partnering on sustainable projects affecting the city. The Detroit Hub celebrates the diversity of our local and global community and the opportunity to cultivate and share stories of local community empowerment on a global scale.</p>
			<p>To See What's Going On In Other Parts Of The World, Click Here: <a href="http://www.globalshapers.org">globalshapers.org</a></p>
		</div>
	</div>
</div>
<div class="index-about">
	<div class="col-md-12">
		
		<div class="container about_sections">
				    <h3>MISSIONS</h3>
					<p>The Global Shapers of the Detroit Hub work as a unified team towards greater inclusivity in the city of Detroit by thoughtfully designing and partnering on sustainable projects affecting the city. The Detroit Hub celebrates the diversity of our local and global community and the opportunity to cultivate and share stories of local community empowerment on a global scale.</p>
				    
	    		    
	    </div>

	    <div class="container about_sections">
				    <h3>VISION</h3>
					<p>Developing leaders through impactful projects that make Detroit and the world a better place.</p>
				 </div>
		</div>

	    <div class="container about_sections">
				    <h3>VALUES</h3>
					<p>
					</p>
					<ul class="value">
						<li>Collaboration and Intersectionality</li>
						<li>Community</li>
						<li>Equity and Justice</li>
						<li>Intentional Engagement</li>
						<li>Leadership</li>
						<li>Passion</li>
					</ul>
				    
	    		    
	    </div>


	    <div class="partners1">
	    <div class="container about_sections">
				    <h3>PARTNERS</h3>
					<p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie disse utes comete dolo lectus. fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit
					amet sollicitudin ante. Aenean imperdiet aliquet hendreritunc interdum ullamcorper lec tuset pellentesqu enim interdum atuspendisse malesuada dignissim.</p>
					<div class="col-sm-3">

	    			<img src="images/coco.png" alt="" / width="100%" class="col-md-6 partners">
	    			<div class="col-sm-3">
	    				<p>uhvkagjom nvkjnbsj</p>
	    			</div>
	    		    </div>
	    		    <div class="col-sm-3">

	    			<img src="images/coco.png" alt="" / width="100%" class="col-md-6 partners">
	    			<div class="col-sm-3">
	    				<p>uhvkagjom nvkjnbsj</p>
	    			</div>
	    		    </div>

	    		    <div class="col-sm-3">

	    			<img src="images/coco.png" alt="" / width="100%" class="col-md-6 partners">
	    			<div class="col-sm-3">
	    				<p>uhvkagjom nvkjnbsj</p>
	    			</div>
	    		    </div>

	    		    <div class="col-sm-3">

	    			<img src="images/coco.png" alt="" / width="100%" class="col-md-6 partners">
	    			<div class="col-sm-3">
	    				<p>uhvkagjom nvkjnbsj</p>
	    			</div>
	    		    </div>


	    		    
				 </div>

		

		</div>
	</div>

<div style="width=100%;">
			<div id="s1"><a href="http://www.codicode.com" target="_blank"><img  src="imgs/i0.jpg" /></a><a href="#"><img src="imgs/i1.jpg" /></a><a href="http://www.codicode.com" target="_blank"><img  src="imgs/i2.jpg" /></a><a href="#"><img  src="imgs/i3.jpg" /></a><a href="http://www.codicode.com" target="_blank"><img  src="imgs/i4.jpg" /></a><a href="#"><img  src="imgs/i5.jpg" /></a><a href="http://www.codicode.com" target="_blank"><img  src="imgs/i6.jpg" /></a><a href="#"><img  src="imgs/i7.jpg" /></a><a href="http://www.codicode.com" target="_blank"><img  src="imgs/i8.jpg" /></a><a href="#"><img  src="imgs/i9.jpg" /></a><a href="http://www.codicode.com" target="_blank"><img  src="imgs/ia.jpg" /></a><a href="#"><img  src="imgs/ib.jpg" /></a><a href="http://www.codicode.com" target="_blank"><img  src="imgs/ic.jpg" /></a><a href="#"><img  src="imgs/id.jpg" /></a></div>

		</div>
		<script type="text/javascript">
        $(window).load(function () {
        $("#s1").endlessScroll({ 
		width: '100%', 
		height: '100px', 
		steps: -2, speed: 70, 
		mousestop: true });
        $("#s2").endlessScroll({ 
		width: '700px', 
		height: '26px', 
		steps: -2, 
		speed: 40, 
		mousestop: false });
    });
</script>

		


<?php
    include("footer.php");
 ?>         

</body>
</html>
