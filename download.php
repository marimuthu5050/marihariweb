<html>
<head>
<title>Welcome to Sivakasi Union Zone 2</title>
<link rel="icon" href="logo.jpg">
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="sliders/rama-the-jquery-slider-plugin/rama/js/freshline/jquery.freshline.FramesBanner.min.js"></script>	
<script type="text/javascript" src="sliders/rama-the-jquery-slider-plugin/rama/js/jquery.easing.1.3.js"></script>

<!--[if lt IE 9]>
    <script src="js/modernizr.custom.js"></script>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<script type="text/javascript" src="js/ie.js"></script>
<![endif]-->

<meta charset="UTF-8">
<meta name="view-port" content="width=device-width">

</head>
<body>
	<div class="header"><center><h1>Welcome to Sivakasi Union Zone 2</h1></center></div>
	<div class="marquee"><marquee>Dear Users, Thanks for using this website. You can upload the required files by clicking the Upload button, selecting a file and clicking OK. Hope you feel easy. Any queries? Feel free to contact: Phone : 8903663497, E-mail : marimuthu50@gmail.com</marquee></div>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<div class="upload-controls">
	<div class="upload-code"><center><p>Download your files here: </p></center></div><br>
  <?php
foreach(glob("Upload/*") as $dir){
   echo '<a href="' . $dir . '">'.$dir.'</a>';
   echo "<br>";
}
echo '<a href="index.html">Return to Home Page</a>';
?>
</div>
        </form>
</body>
</html>
