<?php
$name=$_POST["name"];
$sel=$_POST["seller"];
$dis=$_POST["dis"];
$cost=$_POST["cost"];
$rat=$_POST["rating"];

    $image0=$_FILES['1']["name"];
    $image1=$_FILES['2']["name"];
    $image2=$_FILES['3']["name"];
    $image3=$_FILES['4']["name"];
    $image4=$_FILES['5']["name"];

    $file_path0='images/'.$image0;
    $file_path1='images/'.$image1;
    $file_path2='images/'.$image2;
    $file_path3='images/'.$image3;
    $file_path4='images/'.$image4;

move_uploaded_file($_FILES["1"]["tmp_name"],$file_path0);
move_uploaded_file($_FILES["2"]["tmp_name"],$file_path1);
move_uploaded_file($_FILES["3"]["tmp_name"],$file_path2);
move_uploaded_file($_FILES["4"]["tmp_name"],$file_path3);
move_uploaded_file($_FILES["5"]["tmp_name"],$file_path4);

$con=mysqli_connect("localhost","root","","project") or die("failed");
$sql="insert into tbl_items (item_name,item_seller_name,item_discription,item_cost,item_rating,item_main_image) VALUES ('$name','$sel','$dis','$cost','$rat','$image0')";
mysqli_query($con,$sql);
$id=mysqli_insert_id($con);
$sql="insert into tbl_item_images(item_id,image_name) values('$id','$image1')";
mysqli_query($con,$sql);
$sql="insert into tbl_item_images(item_id,image_name) values('$id','$image2')";
mysqli_query($con,$sql);
$sql="insert into tbl_item_images(item_id,image_name) values('$id','$image3')";
mysqli_query($con,$sql);
$sql="insert into tbl_item_images(item_id,image_name) values('$id','$image4')";
mysqli_query($con,$sql);
header("location:add.html");
?>