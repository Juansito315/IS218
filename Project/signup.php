<?php
/**
* 
*/
class Signup
{
	private $username;
	private $password;
	private $db_con;
	private $fullname;
	private $phone;
	private $location;
	function __construct($username,$password,$fullname,$phone,$location,$db_con)
	{
		$this->username=$username;
		$this->password=$password;
		$this->db_con=$db_con;
		$this->fullname=$fullname;
		$this->phone=$phone;
		$this->location=$location;
	}
	public function new_user(){
		try {
			$res=$this->db_con->prepare("INSERT INTO users(username,password,fullname,phone,location) VALUES (:username,:password,:fullname,:phone,:location)");
			$res->bindParam(":username",$this->username);
			$p=password_hash($this->password, PASSWORD_DEFAULT);
			$res->bindParam(":password",$p);
			$res->bindParam(":fullname",$this->fullname);
			$res->bindParam(":phone",$this->phone);
			$res->bindParam(":location",$this->location);
			$res->execute();
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function user_edit($profile_pic){
		try {
			$res=$this->db_con->prepare("UPDATE users SET username=:username,password=:password,fullname=:fullname,phone=:phone,location=:location,profile=:profile_pic");
			$res->bindParam(":username",$this->username);
			$p=password_hash($this->password, PASSWORD_DEFAULT);
			$res->bindParam(":password",$p);
			$res->bindParam(":fullname",$this->fullname);
			$res->bindParam(":phone",$this->phone);
			$res->bindParam(":location",$this->location);
			$res->bindParam(":profile_pic",$profile_pic);
			$res->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

}
