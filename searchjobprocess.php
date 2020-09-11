<?php
error_reporting(0); //disable all errors and notices

$Title="";
$Position="";
$Contract="";
$Application="";
$Location="";


//Data validaton here -- Empty Fills
  if (!empty($_POST)){

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
      $errMsg .= "<p>Error Title: Empty Title Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }



    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];

    }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];

    }
      

    if (isset($_POST['app'])  && $_POST['app'] !="" ){
   
        $Application=$_POST['app'];

    }


    if (isset($_POST['loc'])  && $_POST['loc'] !="" ){
   
        $Location=$_POST['loc'];

    }

      searchFromFile($Title,$Position,$Contract,$Application,$Location);
  
  }


  //Save Data to txt. files
  function searchFromFile($Title,$Position,$Contract,$Application,$Location){
    $folder = "../../data/jobposts";
    $file = '../../data/jobposts/jobposts.txt';
  
    if (file_exists($file)) {  
      $fileContent = file_get_contents($file);
      $arrayLine = explode("\n", $fileContent);
      //remove last element of array
      array_pop($arrayLine);
      sort($arrayLine);
      foreach ($arrayLine as $line){ 
        $arr = explode("\t", $line);
            //search By Title
            if(strpos($arr[1], $Title) !== false){
                $date=date('d/m/y');
                //Validate Closing date > today
                if($arr[3]>=$date){
                    //Check Position
                    if($Position!="" && $arr[4]!=$Position){
                        continue;
                     }
                     //Check Contract
                     if($Contract!="" && $arr[5]!=$Contract){
                        continue;
                     }
                     //Check Applicaion By
                     //this will skip data with 1 application but 2 filter
                     if(count($arr)==9 && count($Application)==2){
                        continue;
                    
                     }
                     //this will skip data with 1 application but 1 filter and not match
                     if(count($arr)==9 && $Application!="" ){
                         echo $Application[1];
                            if($Application[0]!=$arr[6]){
                                continue;
                            }
                    }
                    //this will skip data with 2 application but 2 filter and not match
                     if(count($arr)==10 && $Application!=""){
                        if($Application[0]!=$arr[6] || $Application[1]!=$arr[7] ){
                            continue;
                        }
                     }
                      //Check Location 
                     if(count($arr)==9 && $Location!="" && $arr[7]!=$Location){
                        continue;
                     }
                    
                     if(count($arr)==10 && $Location!="" && $arr[8]!=$Location){
                        continue;
                     }
            //PRINT job infromation        
            $foundPosition=true;
            displayJob($arr);
            }
        }
          
        
      }
      //Position not in the search list stored in txt. file  
      if(!$foundPosition){
          echo "<h5>No Postion Found...</h5>";
          echo "<p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
      }
    }
  
    }
  
    //Display the search Job
    function displayJob($arr){
        echo " <h4>Job Vacancy Information</h4>";
        echo "Job Title: ". $arr[1] ."</br>";
        echo "Description: ". $arr[2] ."</br>";
        echo "Closing Date: ". $arr[3] ."</br>";
        echo "Position: ". $arr[4] . " , ".$arr[5]. "</br>";
        //Display the application of either Post or Mail selection
        if(count($arr)==9){
            echo "Application By : ". $arr[6] ."</br>";
            echo "Location : ". $arr[7] ."</br>";

        }
        //Display both application of  Post and Mail selection
        if(count($arr)==10){
            echo "Application By : ". $arr[6]."," .$arr[7] ."</br>";
            echo "Location : ". $arr[8] ."</br>";

        }
        echo "<p>Return to <a href=\"index.php\"> Home Page</a> or <a href=\"searchjobform.php.php\"> Search for another Job Vacancy </a></p></br>";

    }
  ?>