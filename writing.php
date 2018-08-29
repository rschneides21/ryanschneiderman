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

  		#side-image-container{
  			float:left;
    		overflow: auto;
  		}
  		#side-image {
    		display: block;
   			position:relative;
    		transform-origin:0 100%;
    		transform:skewX(-7deg);
    		height: 200%;
    		width: auto;
  			z-index: 2;
  			border-left: 6px solid white;
  			border-right: 6px solid white;
  		}
  		#side-image:before{
    		content:'';
    		position:absolute;
    		width:15%; height:100%;
    		background-image:url('webdesign2.png');
    		background-size: cover;
    		transform-origin:inherit;
    		transform:skewX(7deg);
  		}



  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "side-image-container">
				<div id = "side-image"></div>
			</div>	
		</div>
	</body>
</html>