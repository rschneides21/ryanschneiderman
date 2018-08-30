<html>
	<head>
		<title>Writing</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  		<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  		<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<style>

  		
  		#header{
  			font-family: 'Montserrat', sans-serif;
    		color: #3E3E3E;
  		}
  		.header{
  			font-size: 5vw;
  			font-weight: 300;
  			margin: auto;
  			text-align: center;
  		}

  		.sub-header{
  			font-size: 2.5vw;
  			font-weight: 300;
  			float: left;
  			text-align: center;
  			margin: auto;
  		}

  		#header-line{
  			padding-top: 3%;
  		}

  		#article-header{
  			padding-right: 100px;
  		}
  		#essay-header{
  			padding-left: 0;
  		}

  		table{
  			border-spacing: 0;
  			border-collapse: collapse;
  		}




  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "header">
				<div class = "header">Writing</div>
				<div id = "article-header" class = "sub-header">articles</div>
				<div id = "essay-header" class = "sub-header">essays</div>
				<svg style = "height: 0; width: 80%; margin: auto;" id = "header-line">
      				<line x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
    			</svg>
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