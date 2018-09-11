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
		      <div class = "header2">Design Philosophy</div>

          <p class = "design-descr">I see myself as a developer first and a designer second. But in many ways, the two are intertwined and the principles that make for good code are in many ways similar to those that make for good design. The first principle of design I view as important is simplicity. Simple code is good code. Code should be self explanatory and easily readible. Elegant code should always be pursued over complex. Likewise in good design. At its core, design is a form of communication and as in any form of communication, a clear message is important. Design is much like an essay or a speech; a thesis or core message is essential. The rest of a design must clearly support the core message. Everything from color, to font, to arrangement of elements should evoke in the viewer a feeling which aligns with the core message. Anything else serves only to distract. For example, the thesis in the photography website below is simply to showcase the photographs. Every design choice was made with the photographs in mind. Specifically, I chose a minimalist aesthetic with little color or embellishing features, and a simple and symmetrical font so as to not draw the eye of the viewer away from the images.</p>
          <p class = "design-descr">
          The second principle of design I view as important is experimentation. In regards to coding, the first solution is sometimes the solution I end up using, but many times it isn't. After experimenting with different approaches to a problem, I either come to the conclusion that my initial solution is the best of the bunch or I come to the conclusion that another solution is better; both are equally valuable insights. Likewise in design, rarely is first design the best design. Usually I go through multiple iterations of a design before I am satisfied. Some ideas work, and others don't, but it is impossible to know unless you experiment. Better to try and fail, than to never have tried at all. </p>

          <p class = "design-descr">The last principle of design I view as critically important is inspiration. Design is everywhere in the world and I believe in analyzing all design, good or bad. By looking around us we can find inspiration in design that works, and critique design that doesn't thinking on how it could be improved. Similarly with coding, there is value in applying others ideas to a specific problem. If a solution already exists, why reinvent the wheel? I frequently use libraries and resources like Stack Overflow so that the majority of my mental energy is focused on the particularities of the problem at hand. </p>
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