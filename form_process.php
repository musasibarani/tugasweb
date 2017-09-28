<?php
if(isset($_POST['submit']))
{
	$name = array("MusaSibarani", "Machmud", "AldiRezaldi", "Nicolaus");
	$min = 5;
	$max = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username)<min)
	{
		echo "username harus memiliki panjang 5 atau lebih";
	}
	if(strlen($username)>max)
	{
		echo "username tidak boleh lebih panjang dari 10";
	}
	
	if(!in_array($username, $name))
	{
		echo "maaf, akses anda gagal";
	}
	else
	{
		echo "selamat datang bous!!";
	}
}
?>