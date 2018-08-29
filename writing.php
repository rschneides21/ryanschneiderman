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

  		.side-image{
  			float: right;
  			opacity: .3;
  		}

  		.side-image:hover {
  			opacity: 1;
  		}

  		#side-image {
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
  		#side-image:before{
    		content:'';
    		position:absolute;
    		width:175%; height:100%;
    		background-image:url('webdesign2.png');
    		background-size: contain;
    		transform-origin:inherit;
    		transform:skewX(7deg);
  		}





  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "image-container">
				<div id = "side-image"></div>
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