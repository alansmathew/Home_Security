<?php
    session_start();
    $con=mysqli_connect("localhost","root","","project") or die("failed");
    $item=$_SESSION["item"];
    // $user=$_SESSION['user'];
    // $sql="select reg_id from tbl_reg where login_id=(select login_id from tbl_login where username='$user')";
    // $result=mysqli_query($con,$sql);
    // $row=mysqli_fetch_array($result);
    $regid=$_SESSION['reg_id'];
    $sql="insert into tbl_purchase (reg_id,item_id) values('$regid','$item')";
    mysqli_query($con,$sql);
?>