<html>
<head>
	<title>Html and Css Tutorial 08</title>
	<style type="text/css">
		a[target] {background-color: yellow;} 
		a[target="_blank"] {background-color: red;} 
		[title~="flower"] {border: 5px solid yellow;}
		[class|="top"] {background: blue;} 
		[class^="cot"] {background: brown;} 
        [class$="test"] {background: lightblue;} 
        /*[class*="ne"] {background: teal;} */

        input[type="text"] {width:300px;}
        input[type="submit"] {width:300px;}
        input[type="number"] {width:300px;}


	</style>
</head>

<body>

	<h1>Attribute Selectors</h1>

  
  <a href="www.ajay.php" target="_blank">Site One</a>

  <a href="www.ajay.html">Site Two</a>

  <a href="www.ajay.pdf" target="_blank">Site Three</a>

  <a href="www.ajay.asp">Site Four</a>

  <a href="http://www.ajay.php" target="">www.ajay.php</a>
  <a href="http://www.ajay.pdf" target="">www.ajay.pdf</a>


  <div class="page" style="color:rgb(194, 41, 194);">

  	  <h2 style="color:rgb(0, 41, 194);">This is heading</h2>

  	  <p style="color:rgb(194, 0, 194);">This is paragraphp01</p>
  	  
  	  <p style="color:rgb(0, 0, 255);" title="flower">This is paragraphp02</p>

  </div>


      <p class ="cotone" style="color:rgb(194, 0, 194);">This is paragraphp03</p>  

  	  <p class ="cottwo" style="color:rgb(0, 0, 255);">This is paragraphp04</p>

  	  <p class ="cotthree" style="color:rgb(194, 0, 194);">This is paragraphp05</p>
  	  
  	  <p class ="cotfour" style="color:rgb(0, 0, 255);">This is paragraphp06</p>



  	  <input type="text" name="uname">

  	  <input type="number" name="number">

  	  <input type="submit" name="submit">


  	  <p class ="onetest" style="color:rgb(194, 0, 194);">This is paragraphp07: onetest</p>  

  	  <p class ="twotest" style="color:rgb(0, 0, 255);">This is paragraphp08: twotest</p>

  	  <p class ="threetest" style="color:rgb(194, 0, 194);">This is paragraphp09: threetest</p>
  	  
  	  <p class ="fourtest" style="color:rgb(0, 0, 255);">This is paragraphp10: fourtest</p>


 	  <p class ="top" style="color:rgb(194, 0, 194);">This is paragraphp11: top</p>  

  	  <p class ="top" style="color:rgb(0, 0, 255);">This is paragraphp12: top</p>

  	  <p style="color:rgb(0, 0, 255);" title="flower">This is paragraphp13: No Class</p>

     

 	  <p class ="myne" style="color:rgb(194, 0, 194);">This is paragraphp14: mytea</p>  

  	  <p class ="yourne" style="color:rgb(0, 0, 255);">This is paragraphp15: yourteacher</p>

  	  <p class="herneis" tyle="color:rgb(0, 0, 255);">This is paragraphp16: herteam</p>

     
</body>

</html>