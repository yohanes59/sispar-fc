<?php
class userModel
{
	public function execute($query)
	{
		include './database/koneksi.php';
		return mysqli_query($conn, $query);
	}

	public function fetch($var)
	{
		return mysqli_fetch_array($var, MYSQLI_ASSOC);
	}

	public function numRow($data)
	{
		return mysqli_num_rows($data);
	}

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
