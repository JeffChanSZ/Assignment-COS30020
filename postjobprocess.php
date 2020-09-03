<?php
$ID="";
$Title="";
$Description="";
$Date="";
$Position="";
$Contract="";
$Application="";
$Location="";
$errMsg = "";



//Data validaton here -- Empty Fills
  if (!empty($_POST)){
    if (isset($_POST['id']) && $_POST['id'] !="" ){
        $ID=$_POST['id'];

    }else {
        echo "<p>Error Position ID: Empty ID Fill, Re-Enter ID in <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
      echo "<p>Error Title: Empty Title Fill, Re-Enter Title in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }

    
    if (isset($_POST['desc'])  && $_POST['desc'] !="" ){
   
        $Description=$_POST['desc'];

    }else {
      echo "<p>Error Description: Empty Description Fill, Re-Enter Description in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }


    if (isset($_POST['date'])  && $_POST['date'] !="" ){
   
        $Date=$_POST['date'];

    }else {
      echo "<p>Error Date: Empty Date Fill, Re-Enter Date in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }
    

    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];

    }else {
      echo "<p>Error Position: Empty Position Fill, Re-Enter Position in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];

    }else {
      echo "<p>Error Contract: Empty Contract Fill, Re-Enter Contract in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }
      

    // if (isset($_POST['app'])  && $_POST['app'] !="" ){
   
    //     $Application=$_POST['app'];

    // }else {
    //   echo "<p>Error Application: Empty Application Fill, Re-Enter Application in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    // }


    if (isset($_POST['loc'])  && $_POST['loc'] !="" ){
   
        $Location=$_POST['loc'];

    }else{
      echo "<p>Error Location: Empty Location Fill, Re-Enter Location in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }

    





      /**
       * IF NO Validation Error
       **/
      saveDataToFile($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location);
  
  }

  //Save Data to txt. files
  function saveDataToFile($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){
  //   echo $ID;
  $folder = "../../data/jobposts";
  if (!is_dir($folder)) mkdir($folder, 0777, true);

    $file = '../../data/jobposts/jobposts.txt';

    $contents = $ID . $Title . $Description . $Date . $Position . $Contract . $Application . $Location ."\r\n";           
    file_put_contents($file, $contents,FILE_APPEND);     // Save our content to the file.
  
  }


?>