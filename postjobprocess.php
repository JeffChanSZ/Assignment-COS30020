<?php
error_reporting(0); //disable all errors and notices

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
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }
    

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
      $errMsg .= "<p>Error Title: Empty Title Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }

    
    if (isset($_POST['desc'])  && $_POST['desc'] !="" ){
   
        $Description=$_POST['desc'];

    }else {
      $errMsg .= "<p>Error Description: Empty Description Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }


    if (isset($_POST['date'])  && $_POST['date'] !="" ){
   
        $Date=$_POST['date'];

    }else {
      $errMsg .= "<p>Error Date: Empty Date Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }
    

    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];

    }else {
      $errMsg .= "<p>Error Position: Empty Position Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];

    }else {
      $errMsg .= "<p>Error Contract: Empty Contract Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }
      

    if (isset($_POST['app'])  && $_POST['app'] !="" ){
   
        $Application=$_POST['app'];

    }else {
      $errMsg .= "<p>Error Application: Empty Application Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }


    if (isset($_POST['loc'])  && $_POST['loc'] !="" ){
   
        $Location=$_POST['loc'];

    }else{
      $errMsg .= "<p>Error Location: Empty Location Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
    }


      validateFormat($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location, $errMsg);


      /**
       * IF NO Validation Error -- save into Txt. file
       **/
      saveDataToFile($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location);
  
  }



  //Data validaton here -- Format Checking
  function validateFormat($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location, $errMsg){
      if ($ID=="") {
      $errMsg .= "<p>Error ID: Empty ID Fill. </p>
      <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";

      }else if( !preg_match ("/^[P]\d{4}$/", $ID)){
        $errMsg .= "<p>Error ID: ID must start with an uppercase letter “P” followed by 4 digits. </p>
        <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
      
      }else if(strlen($ID) != 5){
        $errMsg .= "<p>Error ID: ID must have 5 characters in length. </p>
        <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";

      }
    
      if ($Title=="") {
        $errMsg .= "<p>Error Title: Empty Title Fill. </p>
        <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";;
  
        }else if( !preg_match ("/^[a-zA-Z0-9,.! ]*$/", $Title)){
          $errMsg .= "<p>Error Title: Title can only contain alphanumeric characters including spaces, comma, period, and exclamation point </p>
          <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
        
        }else if(strlen($Title) > 20){
          $errMsg .= "<p>Error Title: Title can only contain a maximum of 20 alphanumeric characters </p>
          <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
  
        }
             
  
      if ($Description=="") {
        $errMsg .= "<p>Error Description: Empty Description Fill. </p>
        <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
  
        }else if(strlen($Description) > 260){
          $errMsg .= "<p>Error Description: Description can only contain a maximum of 260 characters </p>
          <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
  
        }
        
       if ($Date=="") {
        $errMsg .= "<p>Error Date: Empty Date Fill. </p>
        <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
        }
        else if(!isDate($Date)){
          $errMsg .= "<p>Error Date: Date must be in format DD/MM/YY </p>
          <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
  
        }

        if($errMsg!=""){
          echo $errMsg;
          exit;
        }
  
  }

  //Check Format of date
  function isDate($Date) {
    $matches = array();
    $pattern = '/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{2})$/';
    if (!preg_match($pattern, $Date, $matches)) return false;
    if (!checkdate($matches[2], $matches[1], $matches[3])) return false;
    return true;
}



  //Save Data to txt. files
  function saveDataToFile($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){
  $folder = "../../data/jobposts";
  $file = '../../data/jobposts/jobposts.txt';

  if (file_exists($file)) {   
    $fileContent = file_get_contents($file);
    $arrayLine = explode("\n", $fileContent);
    array_pop($arrayLine);
    foreach ($arrayLine as $line){ 
      $arr = explode("\t", $line);
      for ($x = 0; $x <count($arrayLine)-1 ; $x++) {

        if($arr[0] == $ID){
          echo " <p>Duplicate Postion ID found. </p>
          <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>";
          exit;
        }
      }

    }  
  }
  else{  
  if (!is_dir($folder)) mkdir($folder, 0777, true); //Make new directory if directory not found
  }
  
  //Store data in txt.file with format
  $contents = $ID ."\t".
                $Title ."\t" .
                $Description ."\t". 
                $Date."\t" .
                $Position ."\t".
                $Contract ."\t";
  foreach ($Application as $checkbox){ 
    $contents.=$checkbox."\t";}

  $contents.= $Location ."\t\r\n";                         

    file_put_contents($file, $contents,FILE_APPEND);     // Save our content to the file.
    echo " <p>Successfully Saved into File </p>
    <p>Return back to <a href=\"index.php\"> Home Page</a> or <a href=\"postjobform.php\"> Post Job Form Page</a></p></br>" ;    
      

  }


?>