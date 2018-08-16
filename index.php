<html>
 <head>
  <title>PHP Test</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
  #banner{
  	text-align: center;
  	font-family: 'Montserrat', sans-serif;
  	color: #3E3E3E;
  }

  #name{
  	font-size: 80px;
  	font-weight: 300;
  	margin-bottom: 30px;
  }

  .sub-header{
  	text-align: center;
  	float: left;

  }
  #email{
  	padding-left: 33%;
  	padding-right: 10px;
  	max-width: 50%;
  }
  #phone{
  	padding-left: 10px;
  	padding-right: 35%;
  	max-width: 50%;
  }
  #header-line{
  	padding-top: 10px;
  }
  #second-level{
  	padding-top: 10px;
  }
  .pic-links{
  	float: left;
  }

  #parallelogram {
	width: 473px;
	height: 452px;
	-webkit-transform: skewX(-10deg);
	   -moz-transform: skewX(-10deg);
	     -o-transform: skewX(-10deg);
	background-size:     cover;    
  }

  #unskewed{
  	-webkit-transform: skewX(10deg);
	-moz-transform: skewX(10deg);
	-o-transform: skewX(10deg);
  }

  </style>
 </head>
 <body>
 <div id = "banner">
 	<p id = "Name">RYAN SCHNEIDERMAN</p>
 	<p id = "email" class = "sub-header">rschneides21@gmail.com</p>
 	 <svg height = "40" width = "1" class = "sub-header" id = "header-line">
 		<line x1="0" y1="0" x2="1" y2="40" style="stroke:#3E3E3E;stroke-width:2"/>
 	</svg>
	<p id = "phone" class="sub-header">(802) 777 0769</p>
 </div>
 <div id = "second-level">
 	<div>
 		<img id = "first-pic" class = "pic-links" src = "web_design_pic.png" width = "30%" height = "auto">
 	</div>
 	<div>
		<img id = "second-pic" "class = "pic-links" src = "writing.jpeg" height = "452" width = "auto" >
	</div>
	<div>
		<img id = "third-pic" class = "pic-links" src = "bball.jpg" width = "30%" height = "auto">
	</div>	
 	<div id = "parallelogram" class = "pic-links">
 		<img id = "unskewed" src = "writing.jpeg">
 	</div>
 </div>	

 </body>
</html>
