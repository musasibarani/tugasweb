<?php
	include "db.php";

	function showAllUserId()
	{
		global $koneksi;
		$query = "SELECT * FROM users";
		$result = mysqli_query($koneksi, $query);

		if(!$result)
		{
			die('Query Failed'.mysqli_error($koneksi));
		}

		function deleteUser(){
			global $koneksi ;
			$id = $_POST['id'];
			$username = $_POST['username'];
			$password = $_POST['passsword'];
			
			$query ="DELETE FROM users WHERE id= $id";
			$result = mysqli_query ($koneksi, $query);
			
			id (!$result){
				die("Query failed.");
			}
		}
	
	function updateUserTable(){
		global $koneksi;
		$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "UPDATE users
			SET username = '$username',
				password = '$password'
			WHERE id = $id";
			
	$result = mysqli_query($koneksi, $query);
	
	id(!$result){
		die("Query failed.");
	}
}