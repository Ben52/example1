<?php
session_start();

 $userform = '
  <html>
  <head>
    <title> User Info</title>
    </head>
    <body>
    <form action="index.php" method = "post">
      <label for = "first_name"> First Name: </label>
        <input type = "text" name = "first_name" > <br>
      <label for = "last_name"> Last Name: </label>
        <input type = "text" name = "last_name" > </br>
        <input type= "submit" name = "enter" > </br>

    </body>
    </html>';

if ($_SESSION== NULL) {    
  echo $userform; 
 $_SESSION['first_name'] = $_POST['first_name'];
    

 } 
 if(isset($_POST['first_name']) && isset($_POST['last_name'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
}
//if(empty($first_name) && empty($last_name)){
//echo "Please enter your name.";
//  echo $first_name . " " . $last_name;
//}
if (isset($first_name)){
    $dir = new homepage;
    $dir->start($first_name, $last_name);
}

class homepage {

  function start($first, $last) {
    $this->first_name = $first;
    $this->last_name = $last;
    echo "Hello " . $this->first_name . " " . $this->last_name ."! Welcome to this program.<br>";
    echo '<a href="./index.php?page=bankform">Click to View Bank Form</a>';
     
  }
}


$amount = $_POST['amount'];
$type = $_POST['type'];
$source = $_POST['source'];

$obj = new debitcredit();
$obj->printform();
$obj->store($amount, $source);



foreach($_POST as $key=>$value){
  $_SESSION[$key] = $value;
  }
  print_r($_SESSION);

$info = new printinfo($amount,$type,$source);

if(array_key_exists('moretranstype', $_POST)) {
  //unset($_SESSION['amount']['type']['source']);
  session_start();
  
  $obj = new debitcredit;
  $obj->printform();
  $obj->store();

}


 class debitcredit {

    public function printform() {
      $form = '<br>
              <FORM action="index.php?page=2" method="post">
                <fieldset>
                  <LABEL for="amount">Amount: </LABEL>
                    <INPUT type="text" name="amount" <BR>
                  <LABEL for="source">Source: </LABEL>
                    <INPUT type="text" name="source" <BR>
                    <INPUT type="radio" name="type" value="debit"> Debit<BR>
                    <INPUT type="radio" name="type" value="credit"> Credit<BR>
                    <INPUT type="checkbox" name="moretranstype" value="yes"> More Trans<BR>
                    <INPUT type="submit" value="Send"> <INPUT type="reset">
                </fieldset>
              </FORM>';

      echo $form;
   }
   
   public function store(&$amount, $source){
     $this->$amount = $amount;
     $this->$source = $source;
   }
}
class printinfo {
  
  function __construct(&$amount,$type,$source){
   
   $this->amount = $amount;
   $this->type = $type;
   $this->source = $source;
   echo "<br>Amount: " . $amount;
   echo "<br>Type: " . $type;
   echo "<br>Source: " . $source;
  
   echo "<br>You have entered $" . $_SESSION['amount'];
  }
}



?>
