<?php
class LoginControl

{
	
	public static function login()
	{
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
	
		if ($username!="" && $password!="")
		{
			echo "Login successful!";
			$_SESSION['id']=0;
			$_SESSION['username']=$username;
			$_SESSION['active']=true;
			
		}
		return $_SESSION['active'];
	}
	
	public static function logout()
	{
		session_start();
			$_SESSION['id']=-1;
			$_SESSION['username']='';
			$_SESSION['active']=false;
			return true;
			
	}
}

?>