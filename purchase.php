<?php
    session_start();
    $con=mysqli_connect("localhost","root","","project") or die("failed");
    $item=$_GET["id"];
    $regid=$_SESSION['reg_id'];
    $sql="insert into tbl_purchase (reg_id,item_id) values('$regid','$item')";
    mysqli_query($con,$sql);
?>