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
    font-size: 60px;
    font-weight: 300;
    padding-bottom: 1%;
    margin-bottom: 0;
  }

  .sub-header{
    text-align: center;
    float: left;

  }
  #email{
    padding-left: 30%;
    padding-right: 10px;
    max-width: 50%;
  }
  #phone{
    padding-left: 10px;
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

  #second-pic {
    display: block;
    position:relative;
    transform-origin:0 100%;
    transform:skewX(-7deg);
    overflow:hidden;
    width: 300px;
  	height: 74.7%;
  	z-index: 2;
  	border-left: 5px solid white;
  	border-right: 5px solid white;
  }
  #second-pic:before{
    content:'';
    position:absolute;
    width:175%; height:100%;
    background-image:url('webdesign2.png');
    background-size: 110%;
    transform-origin:inherit;
    transform:skewX(7deg);
  }
  #third-pic{
    position: absolute;
    height: 73%;
    width: auto;
    
  }

  #first-pic{
    height: 73%;
    width: auto;
  }

  #sub-header{
    padding-bottom: 10px;
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
    <p id = "email" class = "sub-header">rschneides21@gmail.com</p>
    <svg height = "40" width = "1" class = "sub-header" id = "header-line">
      <line x1="0" y1="0" x2="1" y2="40" style="stroke:#3E3E3E;stroke-width:2"/>
    </svg>
    <p id = "phone" class="sub-header">(802) 777 0769</p>
  </div>  
 </div>
</td> 
</tr>
 </table>

 <div id = "second-level" style = "margin: auto;">
  <div>
    <img id = "first-pic" class = "pic-links" src = "writing.jpeg" >
  </div>
  <div id = "second-pic" class = "pic-links">
  </div>
  <div>
    <img id = "third-pic" class = "pic-links" src = "bball.jpg" >
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
 		shiftPic2();
 		shiftPic3();
 		$("second-level").css('margin', 'auto')
	});

 	$(window).on('load', function () {
      $("#second-pic").css("width", $("#first-pic").width() * 1.04);
		shiftPic2();
		shiftPic3();
		console.log($("#second-pic").width(), $("#second-pic").height())
		document.styleSheets[0].addRule('p.special:before','content: "'+str+'";');
 	});

	
	


 </script>
</html>


