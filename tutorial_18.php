<!DOCTYPE HTML>
<html>
<head>	
  <meta charset="utf-8">
  <title>HTML & CSS Tutorial For Beginners</title>
  <link rel="stylesheet" type="text/css" href="#">

	<style>
    .tutorial_18_heading1{color:rgb(120,322,100);}
    .box1{width:300px;height:300px;color:#fff;background:green;position: relative;}

    .box2{width:100px;height:100px;background:pink; position: absolute;top:30px;left:50px;}

    .box3{width:100px;height:100px;background:brown; position: fixed;}

    .box4{width:300px;height:100px;background:red; position: sticky;top:10px;left:500px;}

	</style>

</head>

<body>
  <h1 class="tutorial_18_heading1">Position</h1>  

  <div class="box1">
       This is main box1 position relative;

          <div class="box2">
               This is main box1 position absolute.
          </div>

  </div>

  <div class="box3">
       This is main box3 position fixed.
  </div>




  <div class="box4">
       This is main box4 position sticky.
  </div>






          <div style="height:900px;">
               This is main box1 position absolute.<br><br>

          </div>


</body>
</html>
