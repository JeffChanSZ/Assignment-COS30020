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
        echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }

    
    if (isset($_POST['desc'])  && $_POST['desc'] !="" ){
   
        $Description=$_POST['desc'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }


    if (isset($_POST['date'])  && $_POST['date'] !="" ){
   
        $Date=$_POST['date'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }
    

    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }
      

    if (isset($_POST['app'])  && $_POST['app'] !="" ){
   
        $Application=$_POST['app'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }


    if (isset($_POST['loc'])  && $_POST['loc'] !="" ){
   
        $Location=$_POST['loc'];

    }else {
      echo "<p>Error: Re-enter data in <a href=\"postjobform.php\"> Post Job Form </a></p>";
    }

  }  




  // function validateEmptyFill($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){

  //   if ($cardnumber=="") {
  //       $errMsg .= "<p>Please enter card number.</p>";
  //   }
  //   else if ((strlen($cardnumber)<15) || (strlen($cardnumber)>16)) {
  //     $errMsg .= "<p>Card number must be between 15 or 16.</p>";
  //   }
  //   if ($cardname=="") {
  //     $errMsg .= "<p>Please enter card name.</p>";
  //   }
  //   // else if (!preg_match("/^[a-zA-Z]*$/", $cardname)) {
  //   //   $errMsg .= "<p>Only alpha letters allowed in card name.</p>";
  //   // }
  //   if ($cardtype=="") {
  //     $errMsg .= "<p>Please enter card type.</p>";
  //   }
  //   if ($expdate=="") {
  //     $errMsg .= "<p>Please enter expired date.</p>";
  //   }
  //   if ($cvv=="") {
  //     $errMsg .= "<p>Please enter cvv.</p>";
  //   }
  //   if(($cardtype)=="visa" ){
  //     $num_length = strlen((string)$cardnumber);
  //       if($num_length == 16) {
  //       // Pass
  //         echo "true";
  //       } else {
  //       // Fail
  //       $errMsg .= "<p>Visa Card Number must be 16 digits.</p>";

  //           }
  //       }
  
  //     if(($cardtype)=="visa" ){
  //       if($cardnumber[0]=='4' ){
  //         echo 'true';
  //       }
  //       else{
  //         $errMsg .= "<p>Visa Card has to start with digit 4.</p>";

  //       }
  //     }
  
  //     if(($cardtype)=="mastercard" ){
  //       $num_length = strlen((string)$cardnumber);
  //         if($num_length == 16) {
  //         // Pass
  //           echo "true";
  //         } else {
  //         // Fail
  //           $errMsg .= "<p>Master Card Number must be 16 digits.</p>";

  //             }
  //         }
  
  //       if(($cardtype)=="mastercard" ){
  //           if(substr($cardnumber,0,2) < 51 || substr($cardnumber,0,2) > 55){
  //             echo 'Master Card Number has to start with digit 51 through to 55';
  //             $errMsg .= "<p>Master Card Number has to start with digit 51 through to 55.</p>";

  //           }
  //           else{
  //             echo 'true';
  //           }
  //         }
  
  //         if(($cardtype)=="americanexpress" ){
  //           $num_length = strlen((string)$cardnumber);
  //             if($num_length == 1) {
  //             // Pass
  //               echo "true";
  //             } else {
  //             // Fail
  //             $errMsg .= "<p>american express Card has to start with digit 4.</p>";
  //           }
  //             }
    
  //             if(($cardtype)=="americanexpress" ){
  //               if(substr($cardnumber,0,2) == 34 || substr($cardnumber,0,2) == 37){
  //                 echo 'true';
  //               }
  //               else{
  //                 $errMsg .= "<p>American Express Card Number has to start with digit 34 through to 37.</p>";

  //               }
  //             }
  //   if ($errMsg != "") {
  //     header("Location:fix_order.php?error=".$errMsg);
  //     exit;
  //   }
  
  // }
  
?>