<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <script>
        </script>
    </head>
    <body>    
    <center>
            <form action="log.php" method="POST">
            <input type="button" name="pleasework" value="pleasework" >
            </form>
            <?php
            if(isset($_POST['pleasework']))
            {
                echo "<p>helo_world</p>";
            }
            ?>
    </center>
    </body>
</html>