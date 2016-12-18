<?php
/**
* 
*/
class Login
{
	private $password;
	private $username;
	private $db_con;
	function __construct($password,$username,$db_con)
	{
		$this->password=$password;
		$this->username=$username;
		$this->db_con=$db_con;
	}

	public function login(){

		try {
			$res=$this->db_con->prepare("SELECT * FROM users WHERE username=:uname");
			$res->execute(array(':uname'=>$this->username));
			$userRow=$res->fetch(PDO::FETCH_ASSOC);
			if($res->rowCount() > 0)
			{
				if(password_verify($this->password,$userRow['password'])){
					
					$_SESSION['email']=$userRow['username'];
					$_SESSION['fullname']=$userRow['fullname'];
					$_SESSION['phone']=$userRow['phone'];
					$_SESSION['location']=$userRow['location'];
					$_SESSION['profile']=$userRow['profile'];

					return 0;
				}else{
					//user exist but wrong password
					return 1;
				}

			}else{
				//user does not exist
				return 2;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		

	}
}