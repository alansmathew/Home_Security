<?php 
session_start();
$con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
$item=$_GET['id'];
$regid=$_SESSION['reg_id'];
$sql="delete from tbl_purchase where reg_id=$regid and item_id=$item";
$result=mysqli_query($con,$sql);
header("location:cart.php");
?>