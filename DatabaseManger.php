<?php
$user = 'root';
$pass = '';
$db = 'universitiesdirectory';
$connect = mysqli_connect('localhost', $user, $pass, $db) or die("unable to connect");
$result = "";
$id = $_REQUEST['selectUniversity'];
$query = "select * from  `universitymain` where id = '$id'";
$result = mysqli_query($connect, $query);
if ($result) {
     $row = mysqli_fetch_assoc($result);
     session_start();
     $_SESSION["name"] = $row["name"];
     header("location:MainView.php");
}

mysqli_close($connect);
?>