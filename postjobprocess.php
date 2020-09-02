<?php
session_start(); 
$ID="";
$Title="";
$Description="";
$Date="";
$Position="";
$Contract="";
$Application="";
$Location="";
$errMsg = "";

//- unable to access directly through URL  [2]

if($_SESSION['fromMain'] == "false"){
  //send them back
  header("Location: index.php");
}
else{
  //reset the variable
  $errMsg = "";

  $_SESSION['fromMain'] = "false";
}



function sanitizeData($param){
  $data = stripslashes(trim($param));
  $data = htmlspecialchars($param);
  return $data;
}

//Data validaton here
  if (!empty($_POST)){
    $ID = sanitizeData($_SESSION['id']);
    $Title = sanitizeData($_SESSION['title']);
    $Description =sanitizeData( $_SESSION['desc']);
    $Position = sanitizeData($_SESSION['pos']);
    $Contract = sanitizeData($_SESSION['contract']);
    $Application = sanitizeData($_SESSION['app']);
    $Location = sanitizeData($_SESSION['loc']);


    if (isset($_POST['id']) && $_POST['id'] !="" ){
        $ID=$_POST['id'];
        $_SESSION['id'] = $ID;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['title'])  && $_POST['title'] !="" ){
        $Title=$_POST['title'];
        $_SESSION['title'] = $Title;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }

    
    if (isset($_POST['desc'])  && $_POST['desc'] !="" ){
   
        $Description=$_POST['desc'];
        $_SESSION['desc'] = $Description;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }


    if (isset($_POST['date'])  && $_POST['date'] !="" ){
   
        $Date=$_POST['date'];
        $_SESSION['date'] = $Date;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }
    

    if (isset($_POST['pos'])  && $_POST['pos'] !="" ){
   
        $Position=$_POST['pos'];
        $_SESSION['pos'] = $Position;

    }else {
        echo "<p>Error: Re-enter data in the <a href=\"postjobform.php\"> Post Job Form </a></p>";
      }

        
    if (isset($_POST['contract'])  && $_POST['contract'] !="" ){
   
        $Contract=$_POST['contract'];
        $_SESSION['contract'] = $Contract;

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


  validateEmptyFill($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location); 
  

    /*
     Before an order is written to the orders table the data format rules need to be checked.
These rules are specified in Part 1 (for customer details) and Part 2 (for product quantity and
credit card details), and a product with options should also be able to be selected and checked.
You need to replicate this checking in your PHP code
    */
    require 'settings.php';

    //CONNECT TO DATABASE HERE
    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  if ( mysqli_query( $conn,"DESCRIBE `orders`" ) ) {
    // my_table exists
}
else{

  //IF TABLE NOT EXISTS, CREATE TABLE
$sql = "CREATE TABLE orders (
  order_id INT(6)  AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(255) NOT NULL,
  lastname VARCHAR(255) NOT NULL,
  email VARCHAR(255),
  product VARCHAR(255),

  quantity INT(10),
  order_cost INT(10),
  order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  order_status VARCHAR(255),
  card_number VARCHAR(255),
  card_expdate VARCHAR(255),
  card_cvc VARCHAR(255),
  address VARCHAR(255),
  )";
      $result = mysqli_query($conn, $sql);

}
  $sql = "INSERT INTO orders (firstname,lastname,email,product,quantity,order_cost,order_status,card_type,card_number,card_expdate,card_cvc) 
  VALUES ('$firstname','$lastname','$email','$exploded_product','$quantity','$totalPrice','PENDING','$cardtype','$cardnumber','$expdate','$cvv')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    //THIS WILL RETURN ORDER_ID THAT ON THE RECORD THAT YOU JUST INSERT
    // printf ("New Record has id %d.\n", $conn->insert_id);
    $order_id=$conn->insert_id;
      header("Location: receipt.php?firstname=".$firstname.
    "&lastname=".$lastname."&email=".$email.
    "&product=".$product.
    "&quantity=".$quantity.
    "&order_cost=".$totalPrice.
    "&card_type=".$cardtype.
    "&card_number=".$cardnumber.
    "&card_expdate=".$expdate.
    "&card_cvc=".$cvv.
    "&order_id=".$order_id."");

  // exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // $sql = "select * from orders ";
  // $result = mysqli_query($conn, $sql);
// echo($result);
  $conn->close();

  }  
}
  function validateEmptyFill($ID, $Title, $Description, $Date, $Position, $Contract, $Application, $Location){

    if ($ID=="") {
        $errMsg .= "<p>Please enter Position ID.</p>";
    }
    else if ((strlen($cardnumber)<15) || (strlen($cardnumber)>16)) {
      $errMsg .= "<p>Card number must be between 15 or 16.</p>";
    }
    if ($cardname=="") {
      $errMsg .= "<p>Please enter card name.</p>";
    }
    // else if (!preg_match("/^[a-zA-Z]*$/", $cardname)) {
    //   $errMsg .= "<p>Only alpha letters allowed in card name.</p>";
    // }
    if ($cardtype=="") {
      $errMsg .= "<p>Please enter card type.</p>";
    }
    if ($expdate=="") {
      $errMsg .= "<p>Please enter expired date.</p>";
    }
    if ($cvv=="") {
      $errMsg .= "<p>Please enter cvv.</p>";
    }
    if(($cardtype)=="visa" ){
      $num_length = strlen((string)$cardnumber);
        if($num_length == 16) {
        // Pass
          echo "true";
        } else {
        // Fail
        $errMsg .= "<p>Visa Card Number must be 16 digits.</p>";

            }
        }
  
      if(($cardtype)=="visa" ){
        if($cardnumber[0]=='4' ){
          echo 'true';
        }
        else{
          $errMsg .= "<p>Visa Card has to start with digit 4.</p>";

        }
      }
  
      if(($cardtype)=="mastercard" ){
        $num_length = strlen((string)$cardnumber);
          if($num_length == 16) {
          // Pass
            echo "true";
          } else {
          // Fail
            $errMsg .= "<p>Master Card Number must be 16 digits.</p>";

              }
          }
  
        if(($cardtype)=="mastercard" ){
            if(substr($cardnumber,0,2) < 51 || substr($cardnumber,0,2) > 55){
              echo 'Master Card Number has to start with digit 51 through to 55';
              $errMsg .= "<p>Master Card Number has to start with digit 51 through to 55.</p>";

            }
            else{
              echo 'true';
            }
          }
  
          if(($cardtype)=="americanexpress" ){
            $num_length = strlen((string)$cardnumber);
              if($num_length == 1) {
              // Pass
                echo "true";
              } else {
              // Fail
              $errMsg .= "<p>american express Card has to start with digit 4.</p>";
            }
              }
    
              if(($cardtype)=="americanexpress" ){
                if(substr($cardnumber,0,2) == 34 || substr($cardnumber,0,2) == 37){
                  echo 'true';
                }
                else{
                  $errMsg .= "<p>American Express Card Number has to start with digit 34 through to 37.</p>";

                }
              }
    if ($errMsg != "") {
      header("Location:fix_order.php?error=".$errMsg);
      exit;
    }
  
  }





  
?>