<!DOCTYPE html>
<html>
<head>
    <title>Matt's Blog</title>
    <meta http-equiv='Content=Type' content='text/html' charset='utf-8' />
    <style media='screen' type='text/css'>
        body {
            background: #F1F1F1;   
        }
        .url{
            display: block;
            position: relative;
            font-size: 18px;
        }        
        a.site{
            position:absolute;
            font-family:arial;
            font-size:17px;
            color:white;
            top:2px;
            text-decoration: none;
        }
        a.account:hover{
            color:white
        }
        a.account{
            position:absolute;
            font-family:arial;
            font-size:17px;
            top:2px;
            text-decoration: none;
            left:50px;
            color:rgb(187, 187, 187);
        }        
        a.l_out{
            position:absolute;
            font-family:arial;
            font-size:17px;
            color:rgb(187, 187, 187);
            top:2px;
            text-decoration: none;
            right:25px
        }
        a.l_out:hover{
            color:white
        }
        #home {
            top: 4px;
            left: 12px;
            display:block;
        }
        #bottom-sp{
            display: block;
            padding-bottom:10px;
            padding-top:0px;
            padding-left:0px;
            padding-right:0px
        }
        #post_list {
            display:block;
            position:relative;
            top:-30px;
            left:-50%;
            right:-50%;
            border:1px solid black;
            width:300px;
            border-radius:5px;
            background-color:white;
            text-align:left;
            padding:20px;
        }
        #navbar {
            position: fixed;
            top: 0px;
            right: 0;
            left: 0;
            z-index: 80;
            border: 1px solid black;
            border-width: 100%;
            height: 30px;
            background: black;
            border-top-style: hidden;
            border-right-style: hidden;
            border-left-style: hidden;
            border-bottom-style:solid;
            min-width:800px;
        }
        #content{
            display:block;
            position:relative;
            width:800px;
            min-width:800px;
            margin-left: auto;
            margin-right:auto
        }        
        /* Normal */
        .newPost {
            
            display:block;
            position:relative;
            top:30px;
            right:20px;
            z-index:90;
            
            border-radius: 5px;
            background-color: #E2E5EC;
            border: 1px solid #8E98A9;
            -moz-box-shadow:inset 0px 0px 1px rgba(160,170,184,1);
            -webkit-box-shadow:inset 0px 0px 1px rgba(160,170,184,1);
            box-shadow:inset 0px 0px 1px rgba(160,170,184,1);
            background-image: -o-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: -moz-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: -webkit-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: -ms-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            color: #444D59;
            text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
        }
        .newPost-fx {
            display:block;
            position:relative;
            top:34px;
            right:20px;
            z-index:90;
            
            border-radius: 5px;
            background-color: #E2E5EC;
            border: 1px solid #8E98A9;
            -moz-box-shadow:inset 0px 0px 1px rgba(160,170,184,1);
            -webkit-box-shadow:inset 0px 0px 1px rgba(160,170,184,1);
            box-shadow:inset 0px 0px 1px rgba(160,170,184,1);
            background-image: -o-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: -moz-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: -webkit-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: -ms-linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            background-image: linear-gradient(90deg , rgb(214,219,223) 0%, rgb(244,244,248) 100%);
            color: #444D59;
            text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
        }
        /* Hover */
        .newPost:hover, .newPost-fx:hover {
            border-radius: 5px;
            background-color: #EAEAF0;
            background-image: -o-linear-gradient(90deg , rgb(229,235,240) 0%, rgb(249,248,255) 100%);
            background-image: -moz-linear-gradient(90deg , rgb(229,235,240) 0%, rgb(249,248,255) 100%);
            background-image: -webkit-linear-gradient(90deg , rgb(229,235,240) 0%, rgb(249,248,255) 100%);
            background-image: -ms-linear-gradient(90deg , rgb(229,235,240) 0%, rgb(249,248,255) 100%);
            background-image: linear-gradient(90deg , rgb(229,235,240) 0%, rgb(249,248,255) 100%);
        }
        /* Active */
        .newPost:active, .newPost-fx:active {
            border-radius: 5px;
            background-color: #C6CDD3;
            background-image: -o-linear-gradient(90deg , rgb(244,244,248) 0%, rgb(214,219,223) 100%);
            background-image: -moz-linear-gradient(90deg , rgb(244,244,248) 0%, rgb(214,219,223) 100%);
            background-image: -webkit-linear-gradient(90deg , rgb(244,244,248) 0%, rgb(214,219,223) 100%);
            background-image: -ms-linear-gradient(90deg , rgb(244,244,248) 0%, rgb(214,219,223) 100%);
            background-image: linear-gradient(90deg , rgb(244,244,248) 0%, rgb(214,219,223) 100%);
            text-shadow: none;
        }
        #nw{
            display:block;
            position:relative;
            top:6px;
            right:-1px;
            z-index:90
        }
    </style>
         
    
        </head>
<body>
            <div id='navbar'>
            <div class='url' id='home'>
                <a href='./' class='site'>Blog</a><a href='./contact' class='account' id='contact'>Contact</a>            </div>
        </div>
        <div id='content'>
        <span style='display:block;position:absolute;left:87%;top:36px'>Sort by: <b>Date</b></span><br/><br/><b><span style='display:block;position:relative;padding:0px;text-align:center'>Posts</b></span><span style='display:block;position:absolute;left:50%;z-index:40;top:30px;'><span style='display:block;position:relative;top:25px;opacity:3;z-index:800;padding-bottom:28px'></span><br/><span id='bottom-sp'><br/><div id='post_list'><a href='./post?t=hello-world' id='titleee' style='display:block;position:relative;padding:0px;
                        
                                word-wrap: break-word;
                                 
    
                                line-height:20px;width:300px;color:black;font-family:arial;text-decoration:none;font-size:18px;'><b>Hello, World!</b>
                                </a><a href='./post?t=hello-world' style='display:block;position:relative;padding:0px;word-wrap: break-word;color:blue;text-decoration:none'>View</a><hr size='1'/><span style='font-family:arial'>Modified: December 03, 2013 at 08:01:26 PM</span><br/><span style='font-family:arial'>Created: August 25, 2013 at 08:40:49 PM<span><br/><span style='font-family:arial'>Location: Bloomington, Indiana</span></div></div></center></span>   
        </div>
		    <div style='position:fixed;bottom:0%;right:0;left:0;z-index:80;min-width:800px;border:1px solid #C0C0C0; border-width:100%;height:20px;background-color:#F1F1F1;border-right-style:hidden;border-left-style:hidden;border-bottom-style:hidden'>
			<span style='position:absolute;font-family:arial;font-size:13px;right:10px;top:2px'>
			    <a href='./compatibility' style='display:block;position:absolute;right:370px;text-decoration:underline;color:black'>
				Compatibility
			    </a>
                            <a href='./terms' style='display:block;position:absolute;left:-48px;text-decoration:underline;color:black'>
				Terms
			    </a>
			    Copyright &copy 2013 Matthew Kunin. All rights reserved.
			</span>
		    </div>
    </body>
</html>
