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

      .example-img{
        width: 35%;
        height: auto;
        border-radius: 3%;
      }

      #example-imgs{
        padding-left: 40%;
        padding-top: 2%;
        padding-bottom: 2%;
      }

      .design-descr{
        padding-left: 20%;
        padding-right: 10%;
      }

      .caption{
        padding-top: 1%;
      }

      #techs{
        padding-left: 25%;
        padding-bottom: 5%;
      }








  		</style>
	</head>

	<body>
		<div id = "body">
			<div id = "headers">
				<div id = "header" >Web Development</div>
				<svg style = "height: 1; width: 80%;" id = "header-line">
      				<line x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
    			</svg>
			</div>
      <div id = "sub-headers">
        <div class = "sub-header">Design Philosophy</div>
        <div class = "sub-header">Examples</div>
        <div class = "sub-header">Technologies</div>
      </div>
      <div id = "content">
        <div id = "design">
		      <div class = "header2">Design</div>
          <p class = "design-descr">Design is a form of extraverbal communication. It tells the viewer about the subject of your design. Everything from color, to font, to arrangement communicates to the viewer something about the product. Much of design communicates to the subconcious; universal associations exist in the mind which the designer should always be cognizant of. The color red evokes passion, bloodshed, love. The font 'Comic Sans' evokes childhood, partially because it is frequently used in schools, but perhaps more importantly because the form of the font is playful and unstructured, much like the mind of a child. Any design is a composition of symbols, each assumed to have associations and connotations in the mind of the viewer. The goal of the designer is to communicate a message to the viewer.</p>
          <p class = "design-descr">
          But Design should not only communicate, it should communicate clearly. A design is much like an essay; it needs a thesis or core message which supports the rest of the work. The entirety of the design should align with the thesis so the message to the viewer is clear.  Anything else serves only to distract from the core message. For example, while designing the photography website below, the thesis is simply to showcase the images in the best way possible. Every design choice was made with the images in mind. Specifically, I chose a minimalist aesthetic with little color or embellishing features so as to not draw the eye of the viewer away from the core message: the images themselves.</p>
        </div>
        <div id = "examples">
		      <div class = "header2">Examples</div>
          <div id = "example-imgs">
            <a href = "http://iotd3-dev.us-east-1.elasticbeanstalk.com/"><img class = "example-img" src = "webdesign2.png"></a>
            <div class = "caption">Jeff Schneiderman Photography</div>
          </div>  
        </div>
        <div id = "technologies">
          <div class = "header2">Technologies</div>
          <p id = "techs"> HTML/CSS/Javascript &nbsp | &nbsp  React  &nbsp | &nbsp  Bootstrap  &nbsp | &nbsp  Django  &nbsp | &nbsp  Python  &nbsp | &nbsp  Java  &nbsp | &nbsp  PHP </p>
        </div>  

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