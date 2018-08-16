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


  #parallelogram {
  	display: block;
  	position:relative;
  	transform-origin:0 100%;
  	transform:skewX(-10deg);
  	overflow:hidden;
	width: 473px;
	height: 452px;
  }
  #parallelogram:before{
  	content:'';
  	position:absolute;
  	width:175%; height:100%;
  	background-image:url('writing.jpeg');
  	background-size:cover;
  	background-position:center;
  	transform-origin:inherit;
  	transform:skewX(10deg);
  }
  .fishes
	{
		position: relative;
		top: 0;
		left: 0;
	}
  .fish
	{
		position: absolute;
		top: 0;
		left: 80px;
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
 <div style="position: relative; left: 0; top: 0;">
		<img src="web_design_pic.png" class="fishes"/>
		<img src="writing.jpeg" class="fish"/>
 </div>
 </div>	

 </body>
</html>
