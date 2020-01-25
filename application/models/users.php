<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model  {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function sign_in_check($username, $password)
	{
		$sql = "SELECT COUNT(*)  FROM users WHERE username = :username AND password = :password";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->bindParam(':username',$username);
		$sth->bindParam(':password',$password);
		$sth->execute();
		$result = $sth->fetchColumn();
		return $result;
	}

	public function sign_up_check($email, $username, $password)
	{
		$sql = "SELECT COUNT(*)  FROM users WHERE email = :email";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->bindParam(':email',$email);
		$sth->execute();
		$result = $sth->fetchColumn();
		return $result;
	}

	public function sign_up_input($email, $username, $password)
	{
		$sql = "INSERT INTO users (email, username, password) VALUES(:email,:username,:password)";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->bindParam(':email',$email);
		$sth->bindParam(':username',$username);
		$sth->bindParam(':password',$password);
		$sth->execute();
	}

}