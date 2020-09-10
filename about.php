<!DOCTYPE html>
<!-- get header ('Page Name'. 'Title')-->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment 1 " />
		<meta name="author" content="ChanSiawZheng" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Job Vacancy Posting System -- About Page</title>
		<link rel="icon" href="images/logo.jpeg" type="image/x-icon" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="styles/style.css" />
	</head>
	
<body>
<!--Header-->
<?php 
	include 'header.inc';
?>

<?php 
	include 'menu.inc';
?>
<!--Header End-->
	<div class="directory">
		<div class="container">
			<a href="index.php">About </a>
		</div>
	</div>

<!--About-->
	<section class="profiles">
		<div class="container">
        <div class="procol-1">
            <h1>About</h1>
			<br>
	
            <?php
                echo 'PHP version: ' . phpversion();
            ?>
				<p>Most of the task have been completed except for sorting of the searching list. </p>
				<p>This is the discussion about the General Question that I've participated in this assignment 1.</p>

    			<p><img class="" src="images/discussion1.png" alt="Discussion Points" width="500" height="600"></p>

                <p><a href="index.php">Home</a></p>
		</div>
		</div>
	</section>


	<!--Footer-->	
		<?php 
			include 'footer.inc';
		?>
 	<!-- End footer section -->

    
	</body> 
	</html>