<?php
error_reporting(0); //disable all errors and notices

$Title="";



//Data validaton here -- Empty Fills
  if (!empty($_POST)){

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
      $errMsg .= "<p>Error Title: Empty Title Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }

      searchFromFile($Title);
  
  }


  //Save Data to txt. files
  function searchFromFile($Title){
    $folder = "../../data/jobposts";
    $file = '../../data/jobposts/jobposts.txt';
  
    if (file_exists($file)) {  
      $fileContent = file_get_contents($file);
      $arrayLine = explode("\n", $fileContent);
      //remove last element of array
      array_pop($arrayLine);
      foreach ($arrayLine as $line){ 
        $arr = explode("\t", $line);
        //   if($arr[1] == $Title){
            if(strpos($arr[1], $Title) !== false){
            $foundPosition=true;
            echo " <h4>Job Vacancy Information</h4>";
            echo "Job Title: ". $arr[1] ."</br>";
            echo "Description: ". $arr[2] ."</br>";
            echo "Closing Date: ". $arr[3] ."</br>";
            echo "Position: ". $arr[4] . " , ".$arr[5]. "</br>";
            if(count($arr)==9){
                echo "Application By : ". $arr[6] ."</br>";
                echo "Location : ". $arr[7] ."</br>";

            }
            if(count($arr)==10){
                echo "Application By : ". $arr[6]."," .$arr[7] ."</br>";
                echo "Location : ". $arr[8] ."</br>";

            }
            echo "<p>Return to <a href=\"index.php\"> Home Page</a> or <a href=\"searchjobform.php.php\"> Search for Post another Job Vacancy </a></p></br>";


        }
          
        
  
      }  
      if(!$foundPosition){
          echo "<h5>No Postion Found...</h5>";
          echo "<p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
      }
    }
  
    }
  

  ?>