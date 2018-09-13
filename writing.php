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

  		.sub-header{
  			font-size: 2.5vw;
  			font-weight: 300;
  			float: left;
  			text-align: center;
  			margin: auto;
  		}

  		#header-line{
  			padding-left: 13%;
  		}

  		#article-header{
  			padding-left: 37%;
  			padding-right: 10%;
  		}
  		#essay-header{
  			padding-left: 0;
  		}

  		.header2{
  			text-align: center;
  			padding-top: 3%;
  			font-size: 2vw;
  		}

  		.article-link{
  			padding-top: 2%;
  			padding-left: 15%;
  			font-size: 1.5vw;
  		}
  		#sidebar{
        	color: white;
        	position: fixed;
        	font-size: 1.2vw;
        	width: 13%;
        	height:100%;
        	background-color: #3E3E3E;;
      	}

      	.sidebar{
      		padding-left: 5%;
      		padding-top: 3%;

      	}

      	#sidebar-nav{
      		padding-top: 41%;
      	}

      	.sidebar-home{
      		padding-left: 5%;
      		padding-bottom: 3%;
      	}

      	#sidebar-line{
      		padding-left: 5%;
  		}

  		#line{
  			
  		}

  		a.sidebar-link:visited {
  			text-decoration: none;
  			color: white;

  		}

  		a.sidebar-link:link {
  			text-decoration: none;
  			color: white;
  		}








  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "sidebar">
				<div id = "sidebar-nav">
					<div class = "sidebar-home">Home</div>
					<svg style = "height: 1px; width: 80%;" >
      					<line id = "sidebar-line" x1="0" y1="0" x2="100%" y2="0" style="stroke:white;stroke-width:2"/>
    				</svg>
					<div class = "sidebar"><a class = "sidebar-link" href = "writing.php">Writing</a></div>
					<div class = "sidebar"><a class = "sidebar-link" href = "web_dev.php">Web Development</a></div>
					<div class = "sidebar"><a class = "sidebar-link" href = "basketball.php">Coaching</a></div>
				</div>	
			</div>
			<div id = "headers">
				<div id = "header" >Writing</div>
				<div id = "line">
					<svg style = "height: 1px; width: 82%;" id = "header-line">
      					<line  x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
    				</svg>
    			</div>	
			</div>
			<div class = "header2">Sports Columnist Tufts Daily (2016 - 2017)</div>
			<div class = "article-link"><a href = "https://tuftsdaily.com/sports/2016/03/10/chinese-super-league-and/">Chinese Super League: Here to Stay?</a></div>
			<div class = "article-link"><a href = "https://tuftsdaily.com/sports/2016/02/18/a-walk-alone-liverpools-ticket-pricing-crisis/"> A Walk Alone - Liverpool's Ticket Pricing Crisis</a></div>
			<div class = "article-link"><a href = "https://tuftsdaily.com/sports/2016/04/28/outside-boot-kings-italy-juve-win/"> The Kings of Italy - Juve Win Again </a></div>
			<div class = "article-link"><a href = "https://tuftsdaily.com/sports/2016/02/18/a-walk-alone-liverpools-ticket-pricing-crisis/">Leicester City and the Decline of the Premier League Hierarchy</a>	</div>

			<div class = "header2">Selected Essays and Articles</div>
			<div class = "article-link"><a href = "VS_Seeing.pdf">Heideggerian Notions in Seeing While Moving</a></div>
			<div class = "article-link"><a href = "VS_Final.pdf">What is Visual Studies? - Barthes's Signs and the Yen Satori</a></div>
			<div class = "article-link"><a href = "Journ_Socio.pdf">The Problem of Socioeconomic Diversity at Tufts</a></div>
			<div class = "article-link"><a href = "Journ_Opio.pdf">A Commentary on the NFL’s Opioid Crisis: Why is Cannabis Being Ignored?</a></div>
		</div>
	</body>
	<script>
		var img = $(".side-image");

		img.on('load', function(){
 		 	console.log($(this).width());
		});
	</script>	
</html>