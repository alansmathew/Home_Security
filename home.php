<!doctype html>
<html>
    <head>
        <title>Home Security</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <style>
        .margin{
            top:300px;
            width:1230px;
            margin:auto;
        }
        .item_class{
            display: block;
            width:1200px;
	        background:rgba(223, 223, 223, 0.378);
	        float:left;
	        margin:10;
            padding:20;    
        }  
        
        .item{
            position: relative;
            /* background-color: white; */
            display:block;
            float:left;
            height:390px;
            width:271px;
            margin:24px;
            margin-right:0;
            animation:tran 0.8s;
            /* box-shadow: 1px 1px 7px rgba(94, 93, 93, 0.233);  */
        }
        @keyframes tran {
            from{
                margin-top:100px;
            }
            to{
                margin:10;
            }
            
        }
        .item:hover{
            box-shadow: 3px 3px 10px rgba(34, 34, 34, 0.233);
        }
        .item img{
            height:271px;
            width:271px;
            align-content: center;
        }
        .mn{
            color:rgba(175, 42, 42, 0.926);
            float:left;
            display: block;
            padding: 5px;
            font-size: 18px;
            width:100%;
        }
        .itname{
            width: 100%;
            padding:5px;
            color: rgb(11,	25,	46);
            font-size: 16px;
            float: left;
            display: block;
        }
        .ct{
            font-size: 16px;
            position: absolute;
            display:block;
            bottom: 0px;
            height: 34px;
            width: 100%;
            color:black;
            background-color: rgba(245, 181, 84, 0.755);
            border-radius: 5px;
            border: solid rgba(40, 40, 40, 0.358) 1px;
        }
        .ct:hover{
            border:solid black 1px;
        }
        #nav{
            font-family:Andale Mono;
            position: sticky;
            z-index:1;
            top:0px;
            width:100%;
            padding:30px;
            background-color:rgb(11,25,	46);
            text-align: center;
        }
        #nav a{
            text-decoration: none;
            color:white;
            font-size: 18px;
            margin:20px;
        }
        #nav a:hover{
            color:rgb(100,234,203);
        }
        #main{
            position: relative;
            background-color: rgb(11,25,46);
            width:100%;
            height:680px;
            display: block;
        }
        .slider{
            margin:40px 0px 20px 0px;
	        /* margin:65 0 0; */
	        width:100%;
	        height:55vh;
        }
        .slider img{
	        width:100%;
	        height:50vh;
	        position:absolute;
	        animation:15s fade ease infinite;
        }
        .slider img:nth-of-type(1){animation-delay:12s;}
        .slider img:nth-of-type(2){animation-delay:9s;}
        .slider img:nth-of-type(3){animation-delay:6s;}
        .slider img:nth-of-type(4){animation-delay:3s;}
        .slider img:nth-of-type(5){animation-delay:0s;}
        @keyframes fade{
            0%{opacity:1;}
            17%{opacity:1;}
            25%{opacity:0;}
            92%{opacity:0;}
            100%{opacity:1;}
        }
        </style>
        
    </head>
    <body onscroll="fn()"> 

        <div id="main">
            <div class="container">
                    <h1> Home Security</h1>
                    <h2>Prevention is better than cure..</h2>
            </div>  
        </div>
         <!-- navigator -->
        <div id="nav">
                <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <a href="reg.php">Sign up</a>
                <a href="login.php">Sign in</a>
                <a href="cart.php">Bag</a>
        </div>
         <!-- navigator -->
         <!-- <div class=slider>
                <img src="images/1.jpg">
                <img src="images/2.jpg">
                <img src="images/3.jpg">
                <img src="images/4.jpg">
                <img src="images/5.jpg">
         </div> -->
    <div class="margin" style="overflow: hidden;">

    <?php
    $con=mysqli_connect("localhost","root","","project") or die("failed to connect!");
    $sql="select item_main_image,item_cost,item_name from tbl_items";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
    ?>
    <div class="item_class">
     <a href="item.php">
         <div class="item">
            <div class="image">
                <img src="images/<?php echo $row['item_main_image'];?>">
            </div>
            <div class="mn">$<?php echo $row['item_cost']; ?></div>
             <div class="itname"><?php echo $row['item_name']; ?></div></a>
             <button class="ct">Add to bag </button>
        </div> 

    <?php
    }
    ?>
     <!-- <div class="item_class">
     <a href="item.php">
         <div class="item">
             <div class="image">
                 <img src="images/test.png">
             </div>
             <div class="mn">$00.00</div>
             <div class="itname">Item name here</div></a>
             <button class="ct">Add to bag </button>
     </div>  -->

        <!-- <div class="item_class">
            <a href="item.php">
                <div class="item">
                    <div class="image">
                        <img src="images/test.png">
                    </div>
                    <div class="mn">$00.00</div>
                    <div class="itname">Item name here</div></a>
                    <button class="ct">Add to bag </button>
            </div>
            <a href="item.php">
                <div class="item">
                    <div class="image">
                        <img src="images/test.png">
                    </div>
                    <div class="mn">$00.00</div>
                    <div class="itname">Item name here</div></a>
                    <button class="ct">Add to bag </button>
                </div>
            
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
            <a href="item.php">
                    <div class="item">
                        <div class="image">
                            <img src="images/test.png">
                        </div>
                        <div class="mn">$00.00</div>
                        <div class="itname">Item name here</div></a>
                        <button class="ct">Add to bag </button>
                    </div>
        </div>
    </div>
        <div class="foot">
            <div class="ftnote">
                This website is created for study purpose only<br>
                No &copy; reserved ! 
            </div> -->

        </div>
        
    </body>
</html>