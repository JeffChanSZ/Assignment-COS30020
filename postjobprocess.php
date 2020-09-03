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
      $errMsg .= "<p>Error ID: Empty ID Fill. </p>
                  <p>Re-Enter ID in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }
    

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
      $errMsg .= "<p>Error Title: Empty Title Fill. </p>
                  <p>Re-Enter Title in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }

    
    if (isset($_POST['desc'])  && $_POST['desc'] !="" ){
   
        $Description=$_POST['desc'];

    }else {
      $errMsg .= "<p>Error Description: Empty Description Fill. </p>
                  <p>Re-Enter Description in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }


    if (isset($_POST['date'])  && $_POST['date'] !="" ){
   
        $Date=$_POST['date'];

    }else {
      $errMsg .= "<p>Error Date: Empty Date Fill. </p>
                  <p>Re-Enter Date in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }
    

    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];

    }else {
      $errMsg .= "<p>Error Position: Empty Position Fill. </p>
                  <p>Re-Enter Position in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];

    }else {
      $errMsg .= "<p>Error Contract: Empty Contract Fill. </p>
                  <p>Re-Enter Contract in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }
      

    // if (isset($_POST['app'])  && $_POST['app'] !="" ){
   
    //     $Application=$_POST['app'];

    // }else {
    //   $errMsg .= "<p>Error Application: Empty Application Fill. </p>
    //   <p>Re-Enter Application in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    // }


    if (isset($_POST['loc'])  && $_POST['loc'] !="" ){
   
        $Location=$_POST['loc'];

    }else{
      $errMsg .= "<p>Error Location: Empty Location Fill. </p>
                  <p>Re-Enter Location in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
    }


      validateFormat($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location);


      if ($errMsg != "") {
        echo $errMsg;
        exit;
      }
      /**
       * IF NO Validation Error
       **/
      saveDataToFile($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location);
  
  }



  //Data validaton here -- Format Checking
  function validateFormat($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){

      if( !preg_match ("/^[P]\d{4}$/", $ID)){
        $errMsg .= "<p>Error ID: ID must start with an uppercase letter “P” followed by 4 digits. </p>
                  <p>Re-Enter ID in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";
      
      }else if(strlen($ID) != 5){
        $errMsg .= "<p>Error ID: ID must have 5 characters in length. </p>
                  <p>Re-Enter ID in <a href=\"postjobform.php\"> Post Job Form </a></p></br>";

      }
    
             
  
  
  }




  //Save Data to txt. files
  function saveDataToFile($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){
  //   echo $ID;
    echo "True";
  $folder = "../../data/jobposts";
  if (!is_dir($folder)) mkdir($folder, 0777, true);

    $file = '../../data/jobposts/jobposts.txt';

    $contents = $ID . $Title . $Description . $Date . $Position . $Contract . $Application . $Location ."\r\n";           
    file_put_contents($file, $contents,FILE_APPEND);     // Save our content to the file.
  
  }


?>