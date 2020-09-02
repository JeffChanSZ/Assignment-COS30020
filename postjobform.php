<!DOCTYPE html>
<!-- get header ('Page Name'. 'Title')-->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Assignment 1 " />
		<meta name="author" content="ChanSiawZheng" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Job Vacancy Posting System -- Post Job Form</title>
		<link rel="icon" href="images/logo.jfif" type="image/x-icon" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="styles/header-mobile.css" />
		<link rel="stylesheet" href="styles/enquiry.css" />

	</head>
	
<body>
	<header class="header">
			<div class="nav-bar" id="myNavBar">
		<p><a class="logo" href ="index.php">
			<img src="images/logo.jfif" alt="Logo" />
		</a>
		</p>
		<p>
		<a href="index.php">Home</a>
		<a href="postjobform.php">Post Job</a>
		<a href="searchjobform.php" class="active">Search Job</a>
		<a href="about.php">About</a>
		</p>
	</div>
		</header><!--Header End-->
		
		<div class="directory">
			<div class="container">
				<a href="index.html">Home </a>/
				<a href="enquire.html">Enquiry </a>
			</div>
		</div>

	<h1>Job Vacancy Posting System</h1>
	
    
    <!--contact us section -->

			<form class="form" method="post" action="postjobprocess.php" onsubmit="return  validate()" novalidate="novalidate">
				
			<br>
			<br>
						<p><label for="id">Position ID: </label> 
							<input type="text" id="id" name= "id" required="required"/>
						</p>
						<p><label for="title">Title: </label> 
							<input type="text" id="title" name= "title" />
						</p>
						<p><label class="desc">Description: </label></p>  
							<textarea class="desc" name="desc" rows="5" cols="30" ></textarea>
						
						<p><label for="date">Closing Date: </label> 
							<input type="text" id="date" name= "date" />
						</p>

						<p><label>Position: </label></p>
						<p><label for="pos">					
							<input type="radio" id="pos" name="pos" value="Full Time" /> Full Time
							</label><br>
						<label for="pos">
							<input type="radio" id="pos" name="pos" value="Part Time" /> Part Time
							</label>
						</p>

						<p><label>Contract: </label></p>
						<p><label for="contract">					
							<input type="radio" id="contract" name="contract" value="On-going" /> On-going
							</label><br>
						<label for="contract">
							<input type="radio" id="contract" name="contract" value="Fixed Term" /> Fixed Term
							</label>
						</p>

						<p><label for="app">Application by: </label>
						<p>
							<label><input type="checkbox" name="issue[]" value="Post" />Post</label><br>
							<label><input type="checkbox" name="issue[]" value="Mail" />Mail</label>
						</p>

						<p><label for="loc">Location: </label>
							<select id="loc" name="loc" >---
							<option value="" selected="selected">Please select</option>
								<option value="opt01" id="loc01">ACT</option>
								<option value="opt02" id="loc02">NSW</option>
								<option value="opt03" id="loc03">NT</option>
								<option value="opt04" id="loc04">QLD</option>
								<option value="opt05" id="loc05">SA</option>
								<option value="opt06" id="loc06">TAS</option>
								<option value="opt07" id="loc07">VIC</option>
								<option value="opt08" id="loc08">WA</option>
							</select>
						</p>
			
				
				<p>
					<input type="submit" name="submit" value="Submit" class="Post" onClick="setLocalStorage(); valthisform(); checkPos1(); validateEmptyFill();" />
					<input type="submit" name="submit" value="Submit" class="Reset" onClick="setLocalStorage(); valthisform(); checkPos1(); validateEmptyFill();" />
				</p>
				
			</form>
    
	</body> 
	</html>