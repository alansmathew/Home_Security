<?php 
session_start();
$con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
$item=$_GET['id'];
$regid=$_SESSION['reg_id'];
$sql="select item_id,reg_id from tbl_wishlist where reg_id='$regid' and item_id='$item'";
$result=mysqli_query($con,$sql);
if(!mysqli_num_rows($result)>0)
{
    $sql="insert into tbl_wishlist(reg_id,item_id) values('$regid','$item')";
    mysqli_query($con,$sql);
}
$sql="delete from tbl_purchase where reg_id=$regid and item_id=$item";
$result=mysqli_query($con,$sql);
header("location:cart.php");
?>