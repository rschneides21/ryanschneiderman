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

  		
  		.header{
  			margin: auto;
  			text-align: center;
  		}

  		.sub-header{
  			float: left;
  			text-align: center;
  			margin: auto;
  		}

  		#header-line{
  			padding-top: 3%;
  		}

  		#article-header{
  			padding-left: 20px;
  		}




  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "header">
				<table style="margin:auto">
					<tr>
						<td><h1 class = "header">Writing</h1></td>
					</tr>	
					<tr>
						<td><div id = "article-header" class = "sub-header">articles</div></td>
						<td><div id = "essay-header" class = "sub-header">essays</div></td>
					</tr>
				</table>
				<table>
					<tr><td>	
					<svg style = "height: 0; width: 80%;" id = "header-line">
      					<line x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
    				</svg>
    				</td></tr>
    			<table>	
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