<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate($username, $password) {
       
		
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM users WHERE username = :username");
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		if (password_verify($password, $rows['pass'])) {
			$_SESSION['auth'] = 1;
			unset($_SESSION['failedAuth']);
			header('Location: /labs');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
	}
	
	//Since username is unique, if it is duplicate, it will throw an error.
	public function register ($username, $pass, $first_name, $last_name)
	{
		try{
	
			$db = db_connect();
			//$statement = $db->prepare("INSERT INTO users(username,pass,first_name,last_name) VALUES (:username,:pass,:first_name,:last_name) ON CONFLICT (username) DO UPDATE SET id = excluded.id RETURNING *");
			$statement = $db->prepare("INSERT INTO users(username,pass,first_name,last_name) VALUES (:username,:pass,:first_name,:last_name)");
			$statement->bindValue(':username', $username);
			$statement->bindValue(':pass', $pass);
			$statement->bindValue(':first_name', $first_name);
			$statement->bindValue(':last_name', $last_name);
			$issuccess= $statement->execute(); 
			return true;
		}
		catch(Exception $e) 
		{
			return false;
		}
	
	}


}
