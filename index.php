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
  	display: block;
  	position:relative;
  	transform-origin:0 100%;
  	transform:skewX(-7deg);
  	overflow:hidden;
	width: 440px;
	height: 513px;
	right: 65px;
	z-index: 2;
	border-left: 5px solid white;
	border-right: 5px solid white;
  }
  #parallelogram:before{
  	content:'';
  	position:absolute;
  	width:175%; height:100%;
  	background-image:url('writing.jpeg');
  	background-size:cover;
  	background-position:center;
  	transform-origin:inherit;
  	transform:skewX(7deg);
  }
  #third-pic{
  	position: absolute;
  	height: 513px;
  	width: auto;
  	right: 30px;
  	top: 186px;
  }

  #first-pic{
  	height: 70%;
  	width: auto;
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
 		<img id = "first-pic" class = "pic-links" src = "web_design_pic.png" >
 	</div>
 	<div id = "parallelogram" class = "pic-links">
 	</div>
	<div>
		<img id = "third-pic" class = "pic-links" src = "bball.jpg" >
	</div>	
 	
 </div>	

 </body>
</html>
