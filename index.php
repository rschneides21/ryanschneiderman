<html>
 <head>
  <title>PHP Test</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
  #banner{
  	height: 25%;
  	text-align: center;
  	font-family: 'Montserrat', sans-serif;
  	color: #3E3E3E;
  }

  #name{
  	font-size: 90px;
  	font-weight: 300;
  	margin-bottom: 40px;
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

  .pic-links{
  	float: left;
  }
  </style>
 </head>
 <body>
 <div id = "banner">
 	<p id = "Name">RYAN SCHNEIDERMAN</p>
 	<div id = "sub-header">
 		<p id = "email" class = "sub-header">rschneides21@gmail.com</p>
 		<svg height = "45" width = "1" class = "sub-header" id = "header-line">
 			<line x1="0" y1="0" x2="1" y2="45" style="stroke:#3E3E3E;stroke-width:2"/>
 		</svg>
 		<p id = "phone" class="sub-header">(802) 777 0769</p>
 	</div>	
 </div>
 <div id = "second-level">
 	<div id = "first-pic" class = "pic-links">
 		<img src = "web_design_pic.png">
 	</div>
 	<div id = "second-pic" class = "pic-links">
 		<img src = "writing.jpeg">
 	</div>
 	<div id = "third-pic" class = "pic-links">
 		<img src = "bball.jpg">
 	</div>
 	</div>	
 </div>
 </body>
</html>
