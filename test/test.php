<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form action="" method="POST">
        <center>
            <input type="text" placeholder= Username style="border-bottom: 2px; border-bottom :2px solid rgba(0,0,0,.20);" /><br>
            <input type="password" placeholder=Password /><br>
            <input type="button" value="Secure Login" name="submit"/>
        </center>
        <?php
            if(isset($_POST["submit"])){
                echo "<script>alert('yes')</script>";
            }
        ?>
        </form>
        
    </body>
</html>