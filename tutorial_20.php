<!DOCTYPE HTML>
<html>
<head>	
  <meta charset="utf-8">
  <title>HTML & CSS Tutorial For Beginners</title>
  <link rel="stylesheet" type="text/css" href="#">

	<style>   
    .tutorial_20_heading1{color:rgb(120,322,100);}   
    ul{list-style-type:none;}
    ul li{
      width:40px;
      height:34px;
      background-image: url("public/images/sprites.png");
      display: inline-block;
    }
    ul li#facebook{
      background-position: 377px 162px
    }
    ul li#twitter{
      background-position: 262px 163px
    }

    ul li#github{
      background-position: 146px 163px
    }
    ul li#linkedin{
      background-position: 205px 163px
    }

    ul li#facebook:hover{
      background-position: 377px 88px;
    }
    ul li#twitter:hover{
      background-position: 262px 88px
    }
    ul li#github:hover{
      background-position: 146px 88px
    }  
    ul li#linkedin:hover{
      background-position: 205px 88px
    }

	</style>

</head>

<body>
  <h1 class="tutorial_20_heading1">Image Sprites</h1>  


 <ul>
    <li id="facebook"></li>
    <li id="twitter"></li>
    <li id="github"></li>
    <li id="linkedin"></li>
 </ul>


</body>
</html>
