<?php 
include 'connection.php';
 
$username = $_POST['username'];
$password =$_POST['password'];
 
$login = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
	$password = password_hash($password, PASSWORD_DEFAULT);
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
		
	header("location:login.php");
}
 
?>