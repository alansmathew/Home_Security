<!doctype html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <style>
            .t{
                top:100px;
                position:relative;
                height:560px;
                width:270px;
                margin:auto;
                border-radius:40px;
                border:9px solid rgba(31, 30, 30, 0.945);
                box-shadow: rgba(0, 0, 0, 0.776) 2px 2px 20px;
            }
            .t::after{
                content: "";
                top:0px;
                position: absolute;
                left:17%;
                width:180px;
                height:18px;
                border-radius:0px 0px 10px 10px;
                background-color: rgba(31, 30, 30, 0.945);
            }
            .t::before{
                content: "";
                bottom:2px;
                left:25%;
                position: absolute;
                width:130px;
                height:5px;
                border-radius: 10px;
                background-color:rgb(86,86,96);
                z-index:1;
            }
            .vbut{
                width:4px;
                height:28px;
                position: absolute;
                top:10%;
                left:-11px;
                background-color: rgba(29, 28, 28, 0.945);
            }
            .vbut::before{
                content: "";
                width:4px;
                height:60px;
                border-radius:10px;
                position: absolute;
                top:60px;
                background-color: rgba(29, 28, 28, 0.945);  
            }
            .vbut::after{
                content: "";
                width:4px;
                height:60px;
                border-radius:10px;
                position: absolute;
                top:135px;
                background-color: rgba(29, 28, 28, 0.945);  
            }
            .lbut{
                position: relative;
                width:4px;
                height:58px;
                border-radius:10px;
                position: absolute;
                top:12%;
                right:-11px;
                background-color: rgba(29, 28, 28, 0.945);
            }
            .inner img{
                position: absolute;
                left:40%;
                top:40px;
                width:60px;
                height:60px;
                border-radius: 50%;
            }
            .animateleft{
                    position:relative;
                    animation:animateleft 0.4s;
                }
                @keyframes animateleft{
                from{
                        width:500px;
                        height:620px;
                    } 
                    to{
                        height:560px;
                        width:270px;
                    }
                }
        </style>
    </head>
    <body>
        <!-- navigator -->
        <div id="nav">
                <a href="home.html" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <a href="reg.html">Sign up</a>
                <a href="login.html">Sign in</a>
                <a href="cart.html">Bag</a>
        </div>
         <!-- navigator -->
        <div class="t animateleft">
            <div class="vbut"></div>
            <div class="lbut"></div>
                <div class="inner">
                    <h1 id="l">Login</h1>
                    <center>
                    <form action="log.php" method="POST">
                    <input type="text" name="uname" placeholder= Username style="border-bottom: 2px; border-bottom :2px solid rgba(0,0,0,.20);" />
                    <input type="password" name="pword" placeholder=Password />
                    <input type="submit" value="Secure Login" />
                    <br><br>Don't have an account ? <a href="reg.html">Sign up Now !</a><br><br>
                    <hr><br>
                    Sign in with Social Networks<br>
                    <button>Facebook</button>
                    <button style="background-color:rgb(217,76,62)">Google</button>
                </form>
                </center>
                </div>
        </div>
    </body>
</html>