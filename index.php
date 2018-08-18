<html>
 <head>
  <title>PHP Test</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
  #banner{
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    color: #3E3E3E;
  }

  #name{
    font-size: 80px;
    font-weight: 300;
    margin-bottom: 20px;
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

  #second-pic {
    display: block;
    position:relative;
    transform-origin:0 100%;
    transform:skewX(-7deg);
    overflow:hidden;
  width: 35%;
  height: 74.7%;
  right: 5%;
  z-index: 2;
  border-left: 5px solid white;
  border-right: 5px solid white;
  }
  #second-pic:before{
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
  	left: 820px;
    position: fixed;
    top: 176px;
    width: auto;
    height: 73%;
    
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
 <div id = "second-level">
  <div>
    <img id = "first-pic" class = "pic-links" src = "web_design_pic.png" >
  </div>
  <div id = "second-pic" class = "pic-links">
  </div>
  <div>
    <img id = "third-pic" class = "pic-links" src = "bball.jpg" >
  </div>  
  
 </div> 

 </body>
 <script>
 	$( window ).resize(function() {
 		$("third-pic").css('top', '176px');
  		var p1 = $("#first-pic").position()
 		var p2 = $("#second-pic").position()
 		var p3 = $("#third-pic").position()
 		console.log("first-pic: ", p1.top, p1.left);
 		console.log("second-pic: ", p2.top, p2.left);
 		console.log("third-pic: ", p3.top, p3.left);
	});
	$("third-pic").css('top', '176px');
 	var p1 = $("#first-pic").position()
 	var p2 = $("#second-pic").position()
 	var p3 = $("#third-pic").position()
 	console.log("first-pic: ", p1.top, p1.left);
 	console.log("second-pic: ", p2.top, p2.left);
 	console.log("third-pic: ", p3.top, p3.left);


 </script>
</html>


