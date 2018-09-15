<html>
	<head>
		<title>Coaching</title>
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

      #headers{
        position: fixed;
        width: 100%;
        top: 0;
        background: rgba(255, 255, 255, 1);
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

  		.article-link{
  			padding-top: 2%;
  			padding-left: 10%;
  			font-size: 1.5vw;
  		}

      #sidebar{
          color: white;
          position: fixed;
          font-size: 1.2vw;
          width: 15%;
          height:100%;
          background-color: #3E3E3E;
          z-index: 2;
        }

      p {
        text-align: justify;
        padding-left: 17%;
        padding-right: 15%;
      }

      .sidebar{
          padding-left: 5%;
          padding-top: 3%;

        }

        #sidebar-nav{
          padding-top: 37%;
        }

        .sidebar-home{
          padding-left: 5%;
          padding-bottom: 3%;
        }

        #sidebar-line{
          padding-left: 5%;
      }

      a.sidebar-link:visited {
        text-decoration: none;
        color: white;
      }

      a.sidebar-link:link {
        text-decoration: none;
        color: white;
      }

      a.sidebar-link:hover {
        text-decoration: none;
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
          z-index: 3;
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
          <div class = "sidebar"><a class = "sidebar-link" href = "writing.php">Writing</a></div>
          <div class = "sidebar"><a class = "sidebar-link" href = "web_dev.php">Web Development</a></div>
          <div class = "sidebar"><a class = "sidebar-link" id = "selected" href = "basketball.php">Coaching</a></div>
        </div>
      </div>
      <div id = "taper"></div>
			<div id = "headers">
				<div id = "header" >Basketball Coaching</div>
				<svg style = "height: 1px; width: 85%;" id = "header-line">
                <line  x1="0" y1="0" x2="100%" y2="0" style="stroke:#3E3E3E;stroke-width:2"/>
            </svg>
			</div>
      <div id = "content">
			<div class = "header2">Why Coach?</div>
      <p>Since my sophomore year in college, I knew that I wanted to be a basketball coach, mostly because I missed basketball. Basketball had been a part of my life as far as I could remember. From playing rec basketball in first grade all the way to varsity captain my senior year of high school. In college, I read a book called "My Turn" by soccer legend Johan Cruyff wherein he talked about his playing days for Ajax and FC Barcelona and then his time coaching for Barcelona. He also talked about a notion called "Total Football" which is characterized by an egalitarian style of play. The striker is the first line of defense and the defenders and goalkeeper are the first line of attack. I became inspired. I researched the inception of this style of play and found that it was coined by the coach of Cruyff's boyhood club, Rinus Michels. I read Michels's book and came to realize that many of the same principles that constitute Total Football could also be applied to basketball. It was at this point I knew that I would make it my life's goal to do just that: implement Total Basketball. </p>

      <p>Since then, I have devised numerous plays and schemes which lean into the principles outined in Total Football. Specifically, I have focused on devising presses and offensive sets which aim to create space in the most dangerous areas on the court, namely near the basket and around the three point line.</p>

      <p>I have also constucted plans for how to create an egalitarian development system whereby no player is pidgeonholed based on their size or current skill level.  A 5'0" guard may have a growth spurt later in life and a 6'0" forward may be done growing. If a basketball player is to succeed at the higher levels of the game they will should develop all facets of their game. Teaching a wide range of skills to everyone is also an effective strategy in the short term. A versatile team means greater flexiblity in exploiting matchups during a game. It may very well be that a guard possess the greatest size differential against his opponent or a forward possess the greatest differential in speed. Total Basketball is positionless basketball.</p>

      <p>I intend to start my career coaching at the middle school level for a couple of reasons. First of all, I think it is important to begin my career as a head coach because many of my ideas are perhaps unconventional in the current basketball coaching space and I want the freedom to experiment. Second of all, I view middle school as a critical time of development. It was the time that I was discouraged from shooting threes because I was tall and encouraged to focus on my post moves, which established a framework of thought that I carried for the rest of my basketball career. I want to impart on my players a sense of freedom to explore all parts of their game to establish a strong foundation for the rest of their basketball careers.</p>

      <div class = "header2">Practice Philosophy</div>

      <p>In the younger age groups I believe winning should never drive coaching decisions. Rather, the development of the kids should take the highest priority. As such, it is important to instill in young players an inner drive to improve on a daily basis in practice. I believe the most effective way to do this is to make practice fun; to make the kids look forward to practice instead of dread it. If a player is to succeed at the high school and college level they must develop a love for the game. So how do you make practice fun?</p> 

      <p>Be democratic. Listen to the kids. I believe a coach should be uncompromising on certain things like effort and the sorts of plays that are run, but it is important for the kids to feel heard. Encourage input from the players to make the team feel like a collective.</p>

      <p>Have times for music, and let the kids choose what plays. Music can be an awesome resource for developing rhythm particularly for dribbling drills.</p>

      <p>Scrimmage. Have scrimmages meant to reinforce plays which will be used in games, and have scrimmages that are meant for having fun and expirementing and developing chemistry. </p>

      <p>Allow kids to express themselves and play with camaraderie. Sports are valuable in life as much as they are inside the gym. Allow and encourage teammates to become friends.</p>

      <p>Win. Winning feels good and its why you play the game. As I mentioned above, I believe winning for winnings sake is pointless, but winning as a direct correlation of the work that the team puts in is a valuable teaching tool.  Development is first priority but a competitive spirit is important too. </p>

      <p>It is crucial that practice be fun, but the functionality of practice extends beyond enjoyment. Practice is a time for development, and in the younger age groups the fundamentals should be prioritized. I believe in set times during practice where players have time to work on their skills; to experiment with different approaches to the problems they face during a game. Mistakes should be made during this time in practice because mistakes mean that players are pushing beyond their comfort zones. Whenever a player makes a mistake, they should be encouraged to think critically about what happened and what possible solutions might exist to correct the mistake in the future.</p>
    </div>


			
		</div>
	</body>
	<script>

    function content_padding (){
      var header_height = $("#headers").height();
      console.log(header_height);
      $("#content").css("padding-top", header_height);
    }

    function taper_sidebar(){
          var sidebar_width = $("#sidebar").width();
          var sidebar_left = $("#sidebar").position().left;
          var sidebar_height = $("#sidebar").width();
          var taper_width = sidebar_width / 2.5;
          var taper = $("#taper");
          taper.css("border-width", "0 0 100vh " + taper_width + "px");
          taper.css("left", sidebar_left + sidebar_width - taper_width + 1);
      }
    $(window).resize(function() {
      content_padding();
      taper_sidebar();
    });

		$(window).on('load', function () {
      content_padding();
      taper_sidebar();
    });
	</script>	
</html>