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

      #sub-headers{
        padding-left: 30%;
        padding-bottom: 5%;
      }
  		.sub-header{
        font-size: 1.5vw;
        padding-right: 5%;
        float: left;
  		}

  		#header-line{
        padding-bottom: 2%;
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
  			font-size: 1.5vw;
        padding-left: 10%;
  		}








  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "headers">
				<div id = "header" >Web Development</div>
				<svg style = "height: 1; width: 80%;" id = "header-line">
      				<line x1="0" y1="0" x2="100%" y2="1" style="stroke:#3E3E3E;stroke-width:2"/>
    			</svg>
			</div>
      <div id = "sub-headers">
        <div class = "sub-header">Design Philosophy</div>
        <div class = "sub-header">Examples</div>
        <div class = "sub-header">Technologies</div>
      </div>
      <div id = "content">
		    <p class = "header2">Design</p>
		    <p class = "header2">Examples</p>
        <p class = "header2">Technologies</p>
      </div>
			
		</div>
	</body>
	<script>
		var img = $(".side-image");

		img.on('load', function(){
 		 	console.log($(this).width());
		});
	</script>	
</html>