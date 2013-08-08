<?php

$obj = new account(1000);

$obj->debit(100);
$obj->credit(200);
$obj->debit(500);
// public $transactions =$obj->debit(100);
  
//print_r($obj);

class account{

  public $starting_balance;
  public $current_balance;
 
  function __construct($amount) {
     $this->starting_balance = $amount;
     $this->current_balance = $amount;
  }
  
  public function debit($amount) {
     $this->current_balance = $this->current_balance - $amount; 
     //echo 'You withrew: $' . $amount . '<br>'; 
     //echo 'Your current balance is: $' . $this->current_balance .'<br>';
  }

  public function credit($amount) {
       $this->current_balance = $this->current_balance + $amount; 
       //echo 'You deposited: $' . $amount . '<br>' ;
       //echo 'Your current balance is: $' . $this->current_balance .'<br>';
  }
  
  function __destruct() {
    echo "<br><br> Monlthly Balance: <br>";
    echo 'Your starting balance was: $' . $this->starting_balance . '<br>';
    echo 'Your ending balance is: $' . $this->current_balance . '<br>';
  }
}


?>