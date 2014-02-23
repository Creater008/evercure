
	<head>
		<style>
			
			.top_wrapper{display:inline-block;width:100%;height:100px;margin:0px;padding:0px;background:#e4eef2;}
			.top_header_wrapper{display:block;margin:0px auto;padding:0px;width:80%;height:100px;}
			.top-content{margin-top:0px;float:right;padding-top: 15px;}
			.top_left_logo{display:inline-block;float:left;height:60px;width:20%;margin-top:1%;margin-right:1%;}

			.logo_img{display:inline-block;margin:0px;padding:0px;width:200px;height:50px;}
			.top_right_stamp{display:inline-block;margin:0px;padding:0px;float:left;width:1%;height:100px;margin-top:1%;margin-left:8%;}
			.stamp_img{display:inline-block;margin:0px;padding:0px;width:100px;height:130px;position:absolute;}
			.top_left_menu{display:inline-block;margin:0px;height:40px;padding:0px;width:66%;float:left;margin-top:1%;margin-left:2%;}


			.menu_wrapper{
        display:inline-block;margin-left:100px;width:100%;
}
#content{
    display:inline-block;
}
.total_images{
    margin: 0px auto;
    font-family: "Trebuchet MS", sans-serif;
    font-size: 15px;
    font-style: normal;
    font-weight: bold;
    letter-spacing: 1.4px;

}

.total_images .eachs{
    position:absolute;
    z-index: 400;
}

#link1{
  top:40px;
   // left:30%;
   margin-left:1%;

}
#link2{
 top:40px;
  //left:40%;
  margin-left:7%;
}
#link3{
 top:40px;
  //left:55%;
  margin-left:17%;
}
#link4{
 top:40px;
  //left:70%;
  margin-left:28%;
}
#link5{
 top:40px;
  //left:1117px;
  margin-left:39%;
}

.eachs img.images{
    width:230px;
    height:390px;
    opacity:1;
    display:none
}
.eachs h2{
    position:absolute;
    width:147px;
    height:52px;
    color:#222;
    font-size:18px;
    top:0px;
    left:52px;
    text-indent:10px;
    line-height:52px;
    text-shadow:1px 1px 1px #fff;
    text-transform:uppercase;
}

.eachs h2.active{
    color:#fff;
    text-shadow:1px 0px 1px #555;
}


a.hovered{color:#fff; height:14px; display:block; padding:8px;-moz-border-radius: 5px;text-shadow: 0px 2px 6px #A81C1F; background-color:#0099CC; text-decoration:none;
    -webkit-border-radius: 5px; }
    
a.menu{ color:#fff; height:13px; display:block; padding:8px;-moz-border-radius: 5px; background-color:#a6a7a7; color:#FFFFFF; text-decoration:none;
    -webkit-border-radius: 5px;}

h1 { font: bold 30px/30px Helvetica, Arial, Sans-serif; text-align: center; color: #00f2f5; text-shadow: 0px 2px 6px #333; }

.total_images .eachs a.menu:hover{color:#fff;-moz-border-radius: 5px;text-shadow: 0px 2px 6px #A81C1F; background-color:#A81C1F;
    -webkit-border-radius: 5px; }

.eachs {width:105px; text-align:center; font: bold 10px/10px Helvetica, Arial, Sans-serif; text-align: center; color: #eee; text-shadow: 0px 2px 6px #333;}

.eachs div{
    list-style:none;
    position:absolute;
    width:110px;
    left:10px;
    top:55px; font-size:18px;
    color:#fff;
    text-align:center;
    display:none;
}

.eachs div ul{ margin:14px; padding:0px 0px 0px 0px; list-style-type:none;}
.eachs div li{ width:160px;}
.eachs div li a{ font-size:10px; width:160px;padding-top:15px; vertical-align:bottom;  display:block; }
.eachs div li a:hover{ color:#FF0000}
.eachs div a{
    text-decoration:none;
    text-transform:uppercase;
    color:#fff;
}

		</style>
    <script type="text/javascript" src="jquery.easing.1.3.js"></script> 
        <script type="text/javascript"> 
			$(function() {
                $('#navigation > div').hover(
                function () {
                    var $this = $(this);
					//$this.find('.images').fadeIn();
					
					$this.find('a.menu').removeClass('menu').addClass('hovered');
					
                    $this.find('.images').stop().animate({
                        'width'     :'230px',
                        'height'    :'390px',
                        'opacity'   :'1.0'
                    },400,'easeOutBack',function(){
					
                        $(this).parent().find('div').fadeIn('fast');
                    });
                },
                function () {
                    var $this = $(this);
					
                    $this.find('div').fadeOut(500);
					//$this.find('.images').hide();
                   $this.find('a.hovered').removeClass('hovered').addClass('menu');
				   
				    $this.find('.images').stop().animate({
                        'width'     :'100px',
                        'height'    :'0px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.9'
                    },600,'easeOutBack'); 
              }
            );
            });
        </script>
        
	</head>
	
		<div class="top_wrapper">
			<div class="top_header_wrapper">
				<div class="top_left_logo">
					<a href="http://evercurehelp.com" class="top-content"><img src='./images/newlogo.png' class="logo_img"/></a>
				</div>
				<div class="top_left_menu">
						

						<div id="content" > 
 
            <div class="total_images" id="navigation" style="height:100px;">
			 
                <div class="eachs" id="link1"> 
					
					<a href="./" class="menu" style=" width:50px;">HOME</a>
					
                
                </div> 
				
				<div class="eachs" id="link4"> 
					<a href="#" onmouseover="this.parentNode.childNodes[3].style.visibility='initial';" class="menu" style=" width:120px;">Internet Support</a>
                    <img src="bg.png" style="display:block;visibility:hidden;height:0px;" alt="" width="140" height="140" class="images"/> 
                   
                    <div>
						<ul>
							<li><a href="./aol.php">AOL support</a></li>
							<br>
							<li><a href="./facebook.php">Facebook Support</a></li>
							<br>
							<li><a href="./yahoo.php">Yahoo Support</a></li>
							<br>
							<li><a href="./incredimail.php">IncrediMail Support</a></li>
							<br>
							<li><a href="./gmail.php">Gmail Support</a></li>
							<br>
							<li><a href="./verizon.php">Verizon Support</a></li>
							
							
							<br>
							<li><a href="./outlook.php">Microsoft Outlook</a></li>
							
						</ul>
                    </div> 
                </div> 
				
				
                <div class="eachs" id="link2"> 
					<a href="#" onmouseover="this.parentNode.childNodes[3].style.visibility='initial';" class="menu" style=" width:110px;">Subscriptions</a>
                    <img src="bg.png" style="display:block;visibility:hidden;height:0px;" alt="" width="160" height="199" class="images"/> 
                    
                  <div> <br><br>
						<ul>
							<li><a href="./onetime.php">1 Time Support</a></li>
							<br><br>
							<li><a href="./1year.php">1 Year Support</a></li>
							<br><br>
							<li><a href="./6month.php">6 Months Support</a></li>
							<br><br>
							<li><a href="./1year2pc.php">1 Year 2 PC Support</a></li>
							<br><br>
							<li><a href="1year3pc.php">1 Year 3 PC Support</a></li>
							
							<!--<li><a href="http://www.99points.info/tag/youtube/">YOUTUBE</a></li>
							<li><a href="http://www.99points.info/category/web-development/css/">CSS</a></li>
							<li><a href="http://www.99points.info/category/mysql/">MYSQL</a></li>
							<li><a href="http://www.99points.info/category/web-development/">Tutorials</a></li>-->
						</ul>
                    </div>  
                </div> 
				
				
                <div class="eachs" id="link3">
					<a href="#" class="menu" style=" width:120px;" onmouseover="this.parentNode.childNodes[3].style.visibility='initial';">System Support</a>
                    <img src="bg.png" style="display:block;visibility:hidden;height:0px;" alt="" width="160" height="199" class="images"/> 
                   
                    <div> 
						<ul>
							<li><a href="./p4.php">HP Printer Support</a></li>
							<li><a href="./p1.php">Lexmark Printer Support</a></li>
							<li><a href="./p2.php">Brother Printer Support</a></li>
							<li><a href="./p3.php">Dell Printer Support</a></li>
							<br><br>
							<li><a href="./support.php">Speed & Optimization</a></li>
							<li><a href="diagnostic.php">Diagnostic & Repair</a></li>
							<li><a href="./setup.php">Setup & Installation</a></li>
							<li><a href="./peripheral.php">Peripheral Support</a></li>
							 <li><a href="./virus.php">FBI Virus Support</a></li>
						</ul>
                    </div> 
                </div> 
                <div class="eachs" id="link5"> 
					
					<a href="./about.php" class="menu" style=" width:60px;">About Us</a>
					
                
                </div> 
               
               <!-- <div class="eachs" id="link5"> 
					
					<a href="#" class="menu" style=" width:84px;">AJAX</a>
					
                    <img src="bg.png" alt="" width="160" height="199" class="images"/> 
                    
                    <div> 
						<ul>
							<li><a href="http://www.99points.info/category/php/">PHP</a></li>
							<li><a href="http://www.99points.info/category/codeigniter/">CodeIgniter</a></li>
							<li><a href="http://www.99points.info/category/web-development/jquery/">JQuery</a></li>
							<li><a href="http://www.99points.info/category/web-development/ajax/">AJAX</a></li>
							<li><a href="http://www.99points.info/category/facebook/">Facebook</a></li>
							
							<li><a href="http://www.99points.info/tag/youtube/">YOUTUBE</a></li>
							<li><a href="http://www.99points.info/category/web-development/css/">CSS</a></li>
							<li><a href="http://www.99points.info/category/mysql/">MYSQL</a></li>
							<li><a href="http://www.99points.info/category/web-development/">Tutorials</a></li>
						</ul>
                    </div> 
                </div> -->
				
				
				<br clear="all" /><br clear="all" /><br clear="all" /><br clear="all" />
				
            </div> 
        </div> 


				</div>
				<div class="top_right_stamp">
					<img src='./images/g.png' class="stamp_img"/>
				</div>
			</div>
		</div>
	<center style="margin-top:-23px;">



		