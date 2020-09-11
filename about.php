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
        <div class="quote">
            <h1>About</h1>
			<br>
                <ul>
                    <li>
                        <?php echo 'PHP version: ' . phpversion();?>
                    </li>
				    <li>Most of the tasks are completed except for Task 8 a. Properly sort the result </li>
				    <li>Special Features ---
                        <ol>
                              <li>CSS: Bootstrap -- CSS Library</li>
                              <li>PHP: file_get_contents -- Reads entire file into a string</li>
                              <li>PHP: file_put_contents -- Write data to a file</li>
                              <li>PHP: array_pop -- Pop the element off the end of array</li>
                        </ol></li>
                </ul>
                

                    <div class="about">
                        <img src="images/discussion1.PNG" alt="Discussion Point1" class="hoverimage" /><br>
                        <p>General Question about Task 7 Advanced Search</p>
                        <img src="images/discussion2.PNG" alt="Discussion Point2" class="hoverimage" /><br>
                        <p>General Question about Task 7 Advanced Search</p>
                        <img src="images/discussion3.PNG" alt="Discussion Point3" class="hoverimage" /><br>
                        <p>CSS Question about self opinion and suggestion</p>
                    </div>

    			    
                <p><a class="returnIndex" href="index.php">Home</a></p>
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