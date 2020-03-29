<?php

class Login extends Controller {

    public function index() {		
		$this->view('login/index');
    }
    
    public function verify()
    {
        $username = $_REQUEST['user_name'];
        $password = $_REQUEST['password'];
        $user = $this->model('User');
        $user->authenticate($username, $password);
    }

    public function register()
    {		
        $this->view('login/register');
    }

    public function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  
    public function validate_registration()
    {
      $user = $this->model('User');
      $error=array();
      $success="";
      $email = $this->test_input($_REQUEST['user_name']);

      if (filter_var($email, FILTER_VALIDATE_EMAIL))  //Username email Match check
      {
        array_push($error,constant("email_username_error"));
      }

      if($_REQUEST['password']!=$_REQUEST['confirm_password']) //Password Match check
      {
        array_push($error,constant("password_mismatch_error"));
      }
      else
      {

        $password=$_REQUEST['password'];
        $uppercase = preg_match('@[A-Z]@', $password); //Must contain Upper Case
        $lowercase = preg_match('@[a-z]@', $password); //Must contain Lower Case
        $number = preg_match('@[0-9]@', $password); //Must contain Number
  
        if(!$uppercase || !$number || strlen($password) < 8) 
        {
          array_push($error,constant("password_strength_error"));
        }
  
      }
		 
      if(count($error)==0)
      {
        $isSuccessfull=$user->register($_REQUEST['user_name'], password_hash($_REQUEST['password'],PASSWORD_DEFAULT),$_REQUEST['first_name'],$_REQUEST['last_name']);
        if($isSuccessfull)
        {
          $success=constant("registration_successfull");
        }
        else{
          array_push($error,constant("user_exists_error"));
        }
      }
      $this->view('login/register', ['error' => $error,'success' => $success]);
    }
      

}
