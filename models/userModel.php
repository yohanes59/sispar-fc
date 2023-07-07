<?php
class userModel extends model
{
	public function insert($username, $password)
	{
		$query = "INSERT INTO users(username, password, role, created_at, updated_at) VALUES ('$username', '$password', 'User', NOW(), NOW())";
		return $this->execute($query);
	}

	function select($username)
	{
		$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
		return $this->execute($query);
	}
}
