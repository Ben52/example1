<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" 
		href="mystyle1.css">
</head>		
<body>   
<div id="container"></div>
  
<?php

if ($_REQUEST == NULL) {

	$enter = new login;	
	
} elseif($_REQUEST['page'] == 'userform'){
		$newuser = new signup;
	
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$account_num = mt_rand(100000,10000000);
	
	echo '<br>Welcome to the bank program, ' . $first . $last  . '!<br>';
	echo "Your account number is " . $account_num ."<br>";
	echo "Your username is " . $username . ". Please remember your username and password.<br>"; 
	
	$userinfo = new users_csv;
	$userinfo -> setUsers($username,$password,$first,$last,$account_num);
	$userinfo -> write_users();
	
	}

class login {
	
public $loginform =' 

	<html>
	<head>Login<br><br></head>
	<body>
	
	Welcome to the bank program! <br>
	Please enter your username and password:<br>
	
	<form action="bankproject?page=login" method ="post">
	<label for "username">Username:</label>
	  <input type ="text" name="username" ><br>
	<label for ="password">Password:</label>
	  <input type = "text" name="password"><br>
      <INPUT type="submit" value="Send"><br>

         
		
	<a href="?page=userform">
			I dont have a username or password yet.</a> 
			
	</body>		
	</html>';	
	
	
	function __construct(){
		echo $this->loginform;
		
  }	
}


class signup {

	public $userform = '
	
  <html>
  <head>
    <title> User Info</title>
    </head>
    <body>
    <form action="bankproject?page=userform" method = "post">
      <label for = "first"> First Name: </label>
        <input type = "text" name = "first" > <br>
      <label for = "last"> Last Name: </label>
        <input type = "text" name = "last" > </br>
      <label for = "username"> Choose your Username: </label>
        <input type = "text" name = "username" > </br>
      <label for = "password"> Choose a Password: </label>
        <input type = "text" name = "password" > </br>
        
        <input type= "submit" name = "enter" > </br>

    </body>
    </html>';

  function __construct() {
  
    //header('Location: ./bankproject.php?page=userform');
  	echo $this->userform;
    print_r($_POST);
  }
}



class users_csv {

        public $username;
		public $password;
		public $first;
		public $last;
		public $account_num;
		
	public function setUsers($username,$password,$first,$last,$account_num) {
		
		$this->username = $username;
		$this->password = $password;
		$this->first = $first;
		$this->last = $last;
		$this->account_num = $account_num;
				
	}	
	
	public function write_users(){	
		
		$users = array();
		$users['username'] = $this->username; 
		$users['password'] = $this->password;
		$users['first'] = $this->first;
		$users['last'] = $this->last;
		$users['account_num'] = $this->account_num;
		print_r($users);
		$file = fopen("write/usersinfo.csv", "a");
		
		fputcsv($file, $users);
		fclose($file);
	}	
	
	public function write_trans() {
	
		
	}
}

class bankform {

  public $bankform = '<br>
              <FORM action="index.php?page=bankform" method="post">
                <fieldset>
                  <LABEL for="amount">Amount: </LABEL>
                    <INPUT type="text" name="amount" <BR>
                  <LABEL for="source">Source: </LABEL></n>
                    <INPUT type="text" name="source" <BR>
                    <INPUT type="radio" name="type" value="debit"> Debit<BR>
                    <INPUT type="radio" name="type" value="credit"> Credit<BR>
                    <INPUT type="checkbox" name="moretranstype" value="yes"> More Trans<BR>
                    <INPUT type="submit" value="Send"> <INPUT type="reset">
                </fieldset>
              </FORM>';
   
    public function displayForm() {
       echo $this->bankform;
    
    }    
}




?>


</body>
</html>