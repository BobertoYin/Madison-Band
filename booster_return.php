<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MAHS Band | Return To Homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Catamaran" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
	
 <div class="wrap"><!-- assists sticky footer -->
	<header name="top" class="main-header">
		<div class="container clearfix">
			<h1 class="name"><a href="index.html"><img class="logo" src="img/logo.svg" alt="Logo">Madison Academic Band Program</a></h1>
		</div>
    <ul class="main-nav">
        <li><a href="index.html">Home</a></li>
				<li><a href="beginner.html">Beginner Band</a></li>
				<li><a href="advanced.html">Advanced Band</a></li>
				<li><a href="percussion.html">Percussion Band</a></li>
				<li><a href="jazz.html">Jazz Band</a></li>
        <li><a href="boosters.html">Band Boosters</a></li>
        <li id="navborder"><a href="gallery.html">Gallery</a></li>
		</ul>
	</header><!--/.main-header-->  

	<div class="container main clearfix">
		
    <h1>Thank You For Signing Up!</h1>
    
    <!-- link to homepage-->
    <h3 style="text-align: center;"><a href="index.html">Return to Home Page</a></h3>
		
	</div>
     
   <!-- Band Boosters Form PHP -->
    <?php 
    if(isset($_POST['submit'])){
      $to = "khwhite@jmcss.org";
      $name = $_POST['user_name'];
      $email = $_POST['user_email'];
      $gender = $_POST['user_gender'];
      $job = $_POST['user_job'];
      $subject = 'Job Application';
      $message = $name . " " . " at " . $email . " would like to apply for" . " " . $job . " " . "and can provide the following:" . "\n\n" . $_POST['provide'];
     
     
      mail($to,$subject,$message);
     
      }
    ?>

   </div>
     
  <!-- back to top link -->
  <div><a href="#top"><h4 class="top-link"><img src="img/topofpage.svg" width=20 height=20></h4></a></div>

	<footer class="main-footer">
		<span class="copyright">2017 Madison Academic Band Program</span>
    <!-- footer contact links -->
    <ul class="contact-info">
      <li><a href="mailto:khwhite@jmcss.org">Email: khwhite@jmcss.org</a></li>
      <li><a href="tel:(731)506-3139">Phone: (731) 506-3139</a></li>
      <li><a href="https://goo.gl/maps/ciYRy5PTimu" target="blank">Location: 179 Allen Avenue, Jackson, TN 38301</a></li>
    </ul>
    <!-- more about the school link -->
     <a class="school" href="http://mad.jmcss.org/files/_GbLAt_/9011aef5099d6a453745a49013852ec4/about_us.pdf" target="blank"><img src="img/school-seal.png" class="seal">Learn More About Our School</a>
	</footer>
	
</body>
</html>