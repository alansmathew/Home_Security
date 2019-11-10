<?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["uname"];
    $password=$_POST["pword"];
    $con=mysqli_connect("localhost","root","","project") or die("failed");
    $sql="select username from tbl_login where username='$username'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        error_reporting(E_ERROR | E_PARSE);
        session_start();
        $_SESSION['name']=$name;
        $_SESSION['email']=$email;
        header("location:reg_invalid.php");
    }
    else{
        $sql="insert into tbl_login(username,password) values('$username','$password')";
        if(mysqli_query($con,$sql))
        {
            $id=mysqli_insert_id($con);
            $query_reg="insert into tbl_reg(login_id,name,email) values('$id','$name','$email')";
            if(mysqli_query($con,$query_reg)){
                header("location:login.php");
            }
            else{
                header("location:reg.html");
            }
        }
        else{
            echo "SOME UNXPECTED ERROR OCCURED!";
        }
    }
    
    
?>