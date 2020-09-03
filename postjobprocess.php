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



//Data validaton here
  if (!empty($_POST)){
    if (isset($_POST['id']) && $_POST['id'] !="" ){
        $ID=$_POST['id'];

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }

    
    if (isset($_POST['desc'])  && $_POST['desc'] !="" ){
   
        $Description=$_POST['desc'];

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }


    if (isset($_POST['date'])  && $_POST['date'] !="" ){
   
        $Date=$_POST['date'];

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
      

    if (isset($_POST['app'])  && $_POST['app'] !="" ){
   
        $Application=$_POST['app'];
        $_SESSION['app'] = $Application;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['loc'])  && $_POST['loc'] !="" ){
   
        $Location=$_POST['loc'];
        $_SESSION['loc'] = $Location;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }


  // validateEmptyFill($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location); 


  }  

  // function validateEmptyFill($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){

  //   if ($ID=="") {
  //       $errMsg .= "<p>Please enter Position ID.</p>";
  //   }
  //   if ($errMsg != "") {
  //     header("Location:fix_order.php?error=".$errMsg);
  //     exit;
  //   }
  
  // }





  
?>