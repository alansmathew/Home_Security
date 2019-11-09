<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
<?php
    $username=$_POST["uname"];
    $password=$_POST["pword"];
    $con=mysqli_connect("localhost","root","","project") or die("failed");
    $sql="select username,password from tbl_login where username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        header("location:home.html");
    }
    else{
        header("location:t.php");
    }
?>
</body>
</html>