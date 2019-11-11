<!doctype html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <style>
            .t{
                top:100px;
                position:relative;
                width:500px;
                height:620px;
                margin:auto;
                border-radius:40px;
                border:9px solid rgba(31, 30, 30, 0.945);
                box-shadow: rgba(0, 0, 0, 0.776) 2px 2px 20px;
            }
            .t::after{
                content: "";
                top:0px;
                position: absolute;
                left:27%;
                width:230px;
                height:20px;
                border-radius:0px 0px 10px 10px;
                background-color: rgba(31, 30, 30, 0.945);
            }
            .t::before{
                position: absolute;
                content: "";
                bottom:2px;
                left:32%;
                width:180px;
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
            .animateleft{
                    position:relative;
                    animation:animateleft 0.4s;
                }
                @keyframes animateleft{
                from{
                    height:560px;
                    width:270px;
                    } 
                    to{
                        width:500px;
                        height:620px;
                    }
            }
            .inner input[type="button"]{
                margin-top:20px;
                border:none;
                border-radius:25px;
                background-color: rgb(26,152,252);
                font-size:15px;
                color:white;
                box-shadow:rgb(59, 99, 184) 1px 1px 5px;
                height:50px;
                }
            input[type="button"]:hover{
                cursor: pointer;
            }

        </style> 
        <script>
            var fields=["NAME","USERNAME","EMAIL","PASSWORD","CONFIRM PASSWORD"];
		    var patterns=[
                /^[a-zA-Z\ ]+$/,
		        /^[a-zA-Z0-9$&+,:;=?@#|'<>.-^*()%!]+$/,
		        /^([A-Za-z0-9\.]{4,30})+@[a-z\.]+\.+[a-z]+$/,
		        /^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/,
		        /^(?=.*[!@#$%^&*(),.?":{}|<>\ )(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/
            ];
            var fields=["NAME","USERNAME","EMAIL","PASSWORD","CONFIRM PASSWORD"];
            function validate(){
                var flag=true;
		        for(i=0;i<=4;i++){
			        var el=document.getElementById(i).value;
			        if(el==""){
                        flag=false;
                        document.getElementById(i).value="";
                        document.getElementById(i).style.cssText="border-color:brown;";
                        document.getElementById(i).placeholder=fields[i]+" can't be empty !"
                    }
                    else if(document.getElementById(3).value != document.getElementById(4).value){
                        document.getElementById(3).value="";
                        document.getElementById(3).placeholder="password dont match"
                        document.getElementById(3).style.cssText="border-color:brown;";
                        flag=false;
                    }
			        else{
				        var patt=patterns[i];
				        if(!el.match(patt)){
                            document.getElementById(i).value="";
                            document.getElementById(i).placeholder=fields[i]+" pattern error "+patterns[i];
                            document.getElementById(i).style.cssText="border-color:brown;";
					        flag=false;
				        }
                    }
                    
                }
                if(flag==true)
                {
                    document.getElementById('frm').submit();
                }
	        }
            function clr(box){
                document.getElementById(box).value="";
                document.getElementById(box).placeholder=fields[box];
                document.getElementById(box).style.cssText="color:rgb(94, 92, 92);border-bottom :2px solid rgba(0,0,0,.20);";
                document.getElementById(box).focus();
            }
        </script>
    </head>
    <body>
        <!-- navigator -->
        <div id="nav">
            <a href="home.php" style="border-radius:20px;padding:10px 8px 10px 10px;font-size: 29px;font-family: Herculanum;color:rgb(100,234,203);border:1px solid rgb(100,234,203); "> H
            </a>
            <a href="reg.php">Sign up</a>
            <a href="login.php">Sign in</a>
        </div>
         <!-- navigator -->
        <div class="t animateleft">
            <div class="vbut"></div>
            <div class="lbut"></div>
                <div class="inner ">
                    <h1 id="l">Register</h1>
                    <center>
                    <form action="reg_val.php" id="frm" method="POST">
                        <input type="text" placeholder="Name" id="0" name="name" onfocus="clr(0)"/>
                        <input type="text" placeholder="Username" id="1" name="uname" onfocus="clr(1)"/>
                        <input type="text" placeholder="Email" id="2" name="email" onfocus="clr(2)"/>
                        <input type="password" placeholder="Password" id="3" name="pword" onfocus="clr(3)"/>
                        <input type="password" placeholder="Confirm Password" id="4" onfocus="clr(4)"/>
                        <input type="button" onClick="validate()" value="Register"/>
                        <br><br>Already have an account ? <a href="login.php">Sign in</a><br><br>
                    </form>
                </center>
                </div>
        </div>
    </body>
</html>