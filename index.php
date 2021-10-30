<?php

/* Logo animation
    //CSS
    .astech{width:70px;
        padding:8px;
        margin:10px;
        border:2px solid pink;
        border-radius:50%;
        background:transparent;
        animation:astech 10s linear infinite;
    }
    .astech #logo{
          width:70px;  
        
          animation:logo 1s linear alternate infinite;        
    }

  @keyframes astech{ 
      0%{transform:rotateY(0deg);}
      100%{transform:rotateY(360deg);}    
  }
  @keyframes logo{ 
      0%{transform:rotate(-10deg);}
      100%{transform:rotate(10deg);}        
  }  

      ///HTML
      <div class="astech" id="astech">
        <img id="logo" src="astech.jpg">      
      </div>
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>HTML CSS Tutorial</title>
</head>
<body>
	 <!-- LOGO -->
      <div class="astech" id="astech">
        <img id="logo" src="public/images/astech.jpg">      
      </div>
     <!-- LOGO End -->

<div class="slide">	
	<h1>HTML AND CSS Tutorial For Beginners<h1>
	<h1><h1>
</div>

<div style="width:40%;margin-left:300px;position:absolute;background:black;">

    <!-- Box1 -->
	<div style="width:0;height:0;background:pink;float:left;padding:5px;animation:box1 4s linear infinite;">	
	</div>	


    <!-- Box2 -->
	<div style="width:10%;height:30px;background:red;float:right;padding:30px;animation:box2 9s linear infinite;">		
	</div>

	<div style="clear:both;"></div>
 		<div style="color:green;font-size:25px;">An image sprite is a collection of images put into a single image.</div>
</div>

   <!-- Floating Text -->
	<div style="width:0;height:0;color:teal;font-size:50px;margin:100px 244px;padding:5px;
	            opacity: 0.4;
	            animation:boxmodel 10s linear infinite;">		   
		<strong><b><span>Image Sprites</span></b></strong>	

	</div>	


<!-- Ovel -->	
<div class="oval" style="width:40%;height:100px;margin:150px 300px;background:rgb(255,25,44);border-radius:50%;position:absolute;animation:oval 40s linear infinite;box-shadow: 0 0 2px black;">
	<div class="pillar" style="
	width:30px;height:250px;background:pink;position:absolute;left:288px;top:-200px;border-radius:100px;
	animation:pillar 3s linear infinite;box-shadow: 0 0 3px black;"
	>	
	<div style="width:100%;height:20px;background:brown;"></div>
	</div>
</div>

</body>
</html>

<style type="text/css">
	*{margin:0;padding:0;background:rgb(242,255,255);}
/*---LOGO---- */
.astech{width:70px;
    padding:8px;
    margin:10px;
    border:2px solid blue;
    border-radius:50%;
    background:transparent;
    position: absolute; top:0;left:0;
    animation:astech 10s linear infinite;
}
.astech #logo{
    width:70px;          
    animation:logo 1s linear alternate infinite;        
}

  @keyframes astech{ 
      0%{transform:rotateY(0deg);}
      100%{transform:rotateY(360deg);}    
  }
  @keyframes logo{ 
      0%{transform:rotate(-10deg);}
      100%{transform:rotate(10deg);}        
  } 

/*---LOGO END---- */
    .slide{width:90%;margin:0px auto;padding:4px;}


	h1{
		position:relative;top:0;		
		animation:slide 6s alternate infinite;
	}

	@keyframes slide{
		0% {left:60px;}
		100% {left:500px;}
	}

	@keyframes pillar{
		0% {transform:rotateY(0deg);background:pink;}
		100% {transform:rotateY(360deg);background:blue;}
		0% {transform:rotateY(0deg);background:yellow;}
	}

	@keyframes oval{
		0% {transform:rotateY(0deg);}
		100% {transform:rotateY(360deg);}
		0% {transform:rotateY(0deg);}
	}

	@keyframes box1{
		0% {padding:0;border-radius:30px;transform:rotate(10deg);}
		100% {padding:30px;}
		0% {padding:0;}
	}

	@keyframes box2{
		0% {transform:rotateY(0deg);border-radius:50px 80px;background:blue;}
		100% {transform:rotateY(360deg);border-radius:50px 80px;}
		0% {transform:rotateY(0deg);}
	}

	@keyframes boxmodel{
		0% {transform:rotateY(0deg);color:brown;}
		100% {transform:rotateY(360deg);color:blue;}
		0% {transform:rotateY(0deg);}
	}	

</style>
