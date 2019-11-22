<!doctype html>
<html>
    <head>
        <title>forget</title>
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
        <script>
            patt=/^([A-Za-z0-9\.]{4,30})+@[a-z\.]+\.+[a-z]+$/;
            function val(){
                flag=true;
                for(var i=0;i<1;i++)
                {
                    el=document.getElementById(i);
                    if(el.value=="")
                    {
                        // alert("placeholder")
                        el.placeholder="Cant be empty !";
                        flag=false;
                        el.style.cssText="border-bottom :2px solid red";
                    }
                    else if(!el.value.match(patt)){
                            document.getElementById(i).value="";
                            document.getElementById(i).placeholder="Enter a valid email";
                            document.getElementById(i).style.cssText="margin-top:10px; border-bottom :2px solid brown;";
					        flag=false;
				        }
                }
                if(flag==true){
                    document.getElementById("frm").submit();
                }
            }
            function clr(id){
                document.getElementById(id).placeholder="Recovery email";
                document.getElementById(id).style.cssText="margin-top:10px; border-bottom :2px solid rgba(0,0,0,.20)";
            }
        </script>
    </head>
    <body>
        <!-- navigator -->
        <div id="nav">
                <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
                </a>
                <a href="reg.php">Sign up</a>
        </div>
         <!-- navigator -->
         
        <div class="t animateleft">
            <div class="vbut"></div>
            <div class="lbut"></div>
                <div class="inner">
                    <h1 id="l">Forget password</h1>
                    <center>
                    <form action="recovery_forget.php" id="frm" method="POST">
                    <input type="text" name="uname" placeholder="username" style="margin-top:50px; border-bottom :2px solid rgba(0,0,0,.20);" />
                    <input type="text" name="email" id=0 onclick="clr(id)" onkeypress="clr(id)" placeholder="Recovery email" style="margin-top:10px; border-bottom :2px solid rgba(0,0,0,.20);" />
                    <!-- <p> to be done !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                    <input type="button" onclick="val()" name="su" value="Reset" style="cursor:pointer"/>
                    </form>
                </center>
            </div>
        </div>
        
    </body>