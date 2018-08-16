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
	width: 150px;
	height: 100px;
	-webkit-transform: skew(-20deg);
	   -moz-transform: skew(-20deg);
	     -o-transform: skew(-20deg);
	background-image: url("writing.jpeg");
  }

  #first-pic{

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
 	<div id = "first-pic">
 		<img class = "pic-links" src = "web_design_pic.png" width = "30%" height = "auto">
 	</div>
 	<div id = "second-pic">
 		<img class = "pic-links" src = "writing.jpeg" width = "30%" height = "auto">
 	</div>
 	<div id = "third-pic" >
 		<img class = "pic-links" src = "bball.jpg" width = "30%" height = "auto">
 	</div>
 	<div id = "parallelogram" class = "pic-links">
 	</div>
 </div>	

 </body>
</html>
