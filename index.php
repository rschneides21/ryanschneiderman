<html>
 <head>
  <title>PHP Test</title>
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

  .backlight{
  	transition: .5s ease;
  	opacity: 1;
  }

  .image-container:hover .pic-links {
  		opacity: .3;
	}

   .image-container:hover .backlight {
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
    <svg style = "height: 10%; width: 1px;" class = "sub-header" id = "header-line">
      <line x1="0" y1="0" x2="1" y2="10%" style="stroke:#3E3E3E;stroke-width:2"/>
    </svg>
    <p id = "email" class = "sub-header">rschneides21@gmail.com</p>
    
  </div>  
 </div>
</td> 
</tr>
 </table>

 <div id = "second-level">
  <div class = "image-container">	
  	<div class = "backlight">
    	<img id = "first-pic" class = "pic-links" src = "writing-copy.jpg" >
  	</div>
  </div>
  <div class = "image-container">		
  	<div class = "backlight">
  		<div id = "second-pic" class = "pic-links">
  		</div>
  	</div>
  </div>
  <div class = "image-container">			
  	<div class = "backlight">
    	<img id = "third-pic" class = "pic-links" src = "bball-copy.jpg" >
  	</div> 
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
	  
	  
 	});

	
	


 </script>
</html>


