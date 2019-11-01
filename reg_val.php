<?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["uname"];
    $password=$_POST["pword"];
    $con=mysqli_connect("localhost","root","","project") or die("failed");
    $sql="insert into tbl_login(username,password) values('$username','$password')";
    if(mysqli_query($con,$sql))
    {
        $id=mysqli_insert_id($con);
        $query_reg="insert into tbl_reg(login_id,name,email) values('$id','$name','$email')";
        if(mysqli_query($con,$query_reg)){
            header("location:login.html");
        }
        else{
            header("location:reg.html");
        }
    }
    else{
        echo "username error!";
    }
    
?>