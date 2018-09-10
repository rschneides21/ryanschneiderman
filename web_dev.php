<html>
	<head>
		<title>Web Development</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  		<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  		<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<style>

  		
  		#body{
  			font-family: 'Montserrat', sans-serif;
    		color: #3E3E3E;
  		}
  		#header{
  			font-size: 5vw;
  			font-weight: 300;
  			margin: auto;
  			text-align: center;
  			padding-bottom: 1%; 
  		}

  		.sub-headers{
        float: left;
  		}

  		#header-line{
  			padding-top: 2%;
  			padding-left: 10%;
  		}

  		#article-header{
  			padding-left: 37%;
  			padding-right: 10%;
  		}
  		#essay-header{
  			padding-left: 0;
  		}

  		.header2{
  			font-size: 1vw;
        padding-right: 10%;
  		}








  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "headers">
				<div id = "header" >Web Development</div>
				<svg style = "height: 0; width: 80%;" id = "header-line">
      				<line x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
    			</svg>
			</div>
      
      <div class = "sub-headers">Design Philosophy</div>
      <div class = "sub-headers">Examples</div>
      <div class = "sub-headers">Technologies</div>
			<div class = "header2">Design</div>
			<div class = "header2">Examples</div>
      <div class = "header2">Technologies</div>
			
		</div>
	</body>
	<script>
		var img = $(".side-image");

		img.on('load', function(){
 		 	console.log($(this).width());
		});
	</script>	
</html>