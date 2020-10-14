<!doctype html>
<html>
<head>
<title>Hello, World!</title>
</head>
<body>
	<!--
if(isset($_GET["login"])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
        	$email = $_GET['email'];
			$password = $_GET['password'];
	if($email && $password){
	echo "Hello, you have provided <b>$email</b> as your login ID ",
 "and your password is <b>$password</b>.";
}
	else{
 "Please <a href='index.php'>try again</a>.";
}
}
} -->
<?php
session_start();
$id = $_POST['id'];
$password = $_POST['password'];
if($id == "admin" && $password == "123") {
$_SESSION['auth'] = true;
$_SESSION['id'] = "Admin";
}
header("location: index.php");
?>

</body>
</html>