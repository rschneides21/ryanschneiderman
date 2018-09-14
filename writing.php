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
  			padding-left: 7%;
  			padding-top: 1%;
  		}

  		.sub-header{
  			font-size: 2.5vw;
  			font-weight: 300;
  			float: left;
  			text-align: center;
  			margin: auto;
  		}

  		#header-line{
  			padding-left: 16%;
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

  		.article{
  			padding-top: 2%;
  			padding-left: 18%;
  			font-size: 1.5vw;
  		}
  		#sidebar{
        	color: white;
        	position: fixed;
        	font-size: 1.2vw;
        	width: 15%;
        	height:100%;
        	background-color: #3E3E3E;
      	}

      	.sidebar{
      		padding-left: 5%;
      		padding-top: 3%;

      	}

      	#sidebar-nav{
      		padding-top: 40%;
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

  		a {
  			text-decoration: none;
  		}

  		a:visited {
  			text-decoration: none;
  		}

  		a:link {
  			text-decoration: none;
  		}

  		a:hover {
  			text-decoration: none;
  		}

  		a.article-link:link {
  			color: #3E3E3E;
  		}

  		a.article-link:visited {
  			color: #3E3E3E;
  		}

  		a.article-link:hover {
  			color: #75ced6;
  		}

  		a.sidebar-link:visited {
  			color: white;
  		}

  		a.sidebar-link:link {
  			color: white;
  		}

  		a.sidebar-link:hover {
  			color: #85e8f1;
  		}


  		a#selected:link {
        	color: #85e8f1;
      	}

      	a#selected:visited{
        	color: #85e8f1;
      	}

      	#taper{
      		position: fixed;
      		width: 0;
			height: 0;
			border-style: solid;
			border-color: transparent transparent white transparent;
			z-index: 2;
			left: 12%;
      	}

  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "sidebar">
				<div id = "sidebar-nav">
					<div class = "sidebar-home"><a class = "sidebar-link" href = "index.php">Home</a></div>
					<svg style = "height: 1px; width: 80%;" >
      					<line id = "sidebar-line" x1="0" y1="0" x2="100%" y2="0" style="stroke:white;stroke-width:2"/>
    				</svg>
					<div class = "sidebar"><a class = "sidebar-link" id = "selected" href = "writing.php">Writing</a></div>
					<div class = "sidebar"><a class = "sidebar-link" href = "web_dev.php">Web Development</a></div>
					<div class = "sidebar"><a class = "sidebar-link" href = "basketball.php">Coaching</a></div>
				</div>	
			</div>
			<div id = "taper"></div>
			<div id = "headers">
				<div id = "header" >Writing</div>
				<div id = "line">
					<svg style = "height: 1px; width: 85%;" id = "header-line">
      					<line  x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
    				</svg>
    			</div>	
			</div>
			<div class = "header2">Sports Columnist Tufts Daily (2016 - 2017)</div>
			<div class = "article"><a class = "article-link" href = "https://tuftsdaily.com/sports/2016/03/10/chinese-super-league-and/">Chinese Super League: Here to Stay?</a></div>
			<div class = "article"><a class = "article-link" href = "https://tuftsdaily.com/sports/2016/02/18/a-walk-alone-liverpools-ticket-pricing-crisis/"> A Walk Alone - Liverpool's Ticket Pricing Crisis</a></div>
			<div class = "article"><a class = "article-link" href = "https://tuftsdaily.com/sports/2016/04/28/outside-boot-kings-italy-juve-win/"> The Kings of Italy - Juve Win Again </a></div>
			<div class = "article"><a class = "article-link" href = "https://tuftsdaily.com/sports/2016/02/18/a-walk-alone-liverpools-ticket-pricing-crisis/">Leicester City and the Decline of the Premier League Hierarchy</a>	</div>

			<div class = "header2">Selected Essays and Articles</div>
			<div class = "article"><a class = "article-link" href = "VS_Seeing.pdf">Heideggerian Notions in Seeing While Moving</a></div>
			<div class = "article"><a class = "article-link" href = "VS_Final.pdf">What is Visual Studies? - Barthes's Signs and the Yen Satori</a></div>
			<div class = "article"><a class = "article-link" href = "Journ_Socio.pdf">The Problem of Socioeconomic Diversity at Tufts</a></div>
			<div class = "article"><a class = "article-link" href = "Journ_Opio.pdf">A Commentary on the NFL’s Opioid Crisis: Why is Cannabis Being Ignored?</a></div>
			<div class = "article"><a class = "article-link" href = "Journ_Opio.pdf">A Commentary on the NFL’s Opioid Crisis: Why is Cannabis Being Ignored?</a></div>
		</div>
	</body>
	<script>
		
		function position_taper(){
      		var sidebar_width = $("#sidebar").width();
      		conosle.log(sidebar_width);
      		var sidebar_left = $("#sidebar").position().left;
      		var sidebar_height = $("#sidebar").width();
      		var taper = $("#taper");
      		taper.css("border-width", "0 0 100vh 75px");
      		taper.css("left", sidebar_left + sidebar_width - 75);
    	}

    	$(window).resize( function () {
      		position_taper();
    	});


		$(window).on('load', function () {
			position_taper();
 		});

	</script>	
</html>