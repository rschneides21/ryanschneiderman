<html>
 <head>
  <title>Ryan Schneiderman</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>

  table.center{
  	margin-left:auto; 
    margin-right:auto;
  }
  #banner{
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    color: #3E3E3E;
  }

  #name{
    font-size: 6vw;
    font-weight: 300;

    padding-bottom: 1%;
    margin-bottom: 0;
  }

  .sub-header{
    text-align: center;
    float: left;
    font-size: 1.3vw;

  }
  #phone{
    padding-left: 32.5%;
    padding-right: 3%;
    max-width: 50%;
  }
  #email{
    padding-left: 3%;
    max-width: 50%;
  }
  #header-line{
    padding-top: 10px;
  }
  #second-level{
    padding-top: 10px;
    padding-left: 1.5%;
  }
  .pic-links{
    float: left;
  }

  #second-pic {
    display: block;
    position:relative;
    transform-origin:0 100%;
    transform:skewX(-7deg);
    overflow:hidden;
    width: 300px;
  	height: 74.7%;
  	z-index: 2;
  	border-left: 6px solid white;
  	border-right: 6px solid white;
  }
  #second-pic:before{
    content:'';
    position:absolute;
    width:175%; height:100%;
    background-image:url('webdesign2.png');
    background-size: contain;
    transform-origin:inherit;
    transform:skewX(7deg);
  }
  #third-pic{
    position: absolute;
    height: auto;
    
  }

  #first-pic{
    width: 34%;
    height: auto;
  }

  #sub-header{
    padding-bottom: 10px;
  }

  a:visited {
    	text-decoration: none;
    	color: #1A1A1A;
	}
  a:hover{
		color: #1A1A1A;
		-webkit-transition: all 0.2s linear;
       -moz-transition: all 0.2s linear;
        -ms-transition: all 0.2s linear;
         -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
   }
   a:link {
    	text-decoration: none;
    	color: #1A1A1A;
   }


  .middle {
  		opacity: 0;
  		position: absolute;
  		font-family: 'Montserrat', sans-serif;
  		font-weight: 500;
  		text-align: center;
  		font-size: 2.3vw;
  }

  #mid1{
  		left:14%;
  }
  #mid2{
  		left:43%;
  		z-index: 3;
  }
  #mid3{
  		left:80%;
  }

  .image-container:hover .pic-links {
  		opacity: .3;
  }

  .image-container:hover .middle {
 		opacity: 1;

  }

  

  

  </style>
 </head>
 <body>
 <table class = "center">
 <tr>
 <td>	
 <div id = "banner">
  <p id = "Name">RYAN SCHNEIDERMAN</p>
  <div id = "sub-header">
    <p id = "phone" class="sub-header">(802) 777 0769</p>
    <svg style = "height: 5vh; width: 1px;" class = "sub-header" id = "header-line">
      <line x1="0" y1="0" x2="1" y2="100%" style="stroke:#3E3E3E;stroke-width:2"/>
    </svg>
    <p id = "email" class = "sub-header">rschneides21@gmail.com</p>
    
  </div>  
 </div>
</td> 
</tr>
 </table>

 <div id = "second-level">
  <div class = "image-container">

    <a href = "writing.php"><img id = "first-pic" class = "pic-links" src = "writing-tapered.jpg" ></a>
    <div class = "middle" id = "mid1"><a href = "writing.php"> Writing </a></div>
  </div>
  <div class = "image-container">		
  	<a href = "web_dev.php"><div id = "second-pic" class = "pic-links"></div></a>
  	<div class = "middle" id = "mid2"><a href = "web_dev.php">Web Development </a></div>
  </div>
  <div class = "image-container">			
    <a href = "basketball.php"><img id = "third-pic" class = "pic-links" src = "basketball-tapered.jpg" ></a>
    <div class = "middle" id = "mid3"><a href = "basketball.php"> Coaching </a></div>
  </div>	  
 </div> 




 </body>
 <script>
 	function getTanDeg(deg) {
  		var rad = deg * Math.PI/180;
  		return Math.tan(rad);
	}

	function shiftPic3 () {
		var secondPicLeft = $("#second-pic").position().left;
		var secondPicWidth = $("#second-pic").width();
		$("#third-pic").css('left', secondPicLeft + secondPicWidth);
	}

	function shiftPic2 (){
    	var shift =  $("#second-pic").height() / getTanDeg(83);
    	$("#second-pic").css('right', shift);
  	}


 	$( window ).resize(function() {
  		var p1 = $("#first-pic").position()
 		$("#third-pic").css('top', p1.top);
		$("#second-pic").css("width", $("#first-pic").width() * 1.04);
		$("#second-pic").css("height", $("#first-pic").height());
		$("#third-pic").css("height", $("#first-pic").height());
	  	$("#third-pic").css("width", $("#first-pic").width());
	  	$(".middle").css("top", $("#first-pic").position().top * 1.4);
 		shiftPic2();
 		shiftPic3();
 		$("second-level").css('margin', 'auto');
 		
	});

 	$(window).on('load', function () {
      	$("#second-pic").css("width", $("#first-pic").width() * 1.04);
      	$("#second-pic").css("height", $("#first-pic").height());
	  	$("#third-pic").css("height", $("#first-pic").height());
	  	$("#third-pic").css("width", $("#first-pic").width());

		shiftPic2();
		shiftPic3();
		var pos1 = $("#first-pic").position(); 
 	});
 	$(".middle").css("top", $("#first-pic").position().top * 1.4);

	
	


 </script>
</html>


