<?php
$name=$_POST["uname"];
$email=$_POST["email"];
$con=mysqli_connect("localhost","root","","project") or die("failed");
$q="select email from tbl_reg where email='$email' and login_id = (select login_id from tbl_login where username='$name')";
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)>0)
{
    echo "yes";
}
else
{
    session_start();
    $_SESSION["rec"]=true;
    header("location:forget.php");
}
?>