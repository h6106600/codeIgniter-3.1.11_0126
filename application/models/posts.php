<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Model  {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	public function show()
	{
		$sql = "SELECT * FROM posts";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function insert_post($title,$content)
	{
		$sql = "INSERT INTO posts (title, content) VALUES (:title,:content)";
		$sth = $this->db->conn_id->prepare($sql);
		$sth->bindParam(':title',$title);
		$sth->bindParam(':content',$content);
		$sth->execute();
	}

}