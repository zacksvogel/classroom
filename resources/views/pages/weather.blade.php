<!DOCTYPE html>
<html>
<head>
    <title>Mr Vogels Classroom Website</title>
    <meta name="description" content="Mr.Vogel's Classroom website for Lyons High School, USD 405" />
    <meta name="keywords" content="Zack Vogel, Lyons High School, USD 405, Lyons, Lyons KS, Vogel, Vogel's website, vogel's classroom" />
    <meta name="author" content="Zack Vogel">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="css\font-awesome.min.css">
	<link rel="stylesheet" href="fonts\webfontkit-20160529-165819\fonts.css">
	<link rel="stylesheet" type="text/css" href="css\cssshakeslow.min.css">
	<link rel="stylesheet" type="text/css" href="css\navbar.css">
	<style>
		html {
		  width: 100%;
		  height: 100%;
		  /*background: #1192d3 url(images/IMG_6711.jpg) no-repeat bottom right;
		  background-size: cover;*/
		  background-color:#717a7d;
		}
		.container3{
			width: 85%;
			margin-left: auto;
			margin-right: auto;
			padding-top: 250px;
			padding-bottom: 10px;
			border-bottom: 5px solid white;
		}
		#weather, #weather2 {
		  font-family: 'amaticbold';
		  margin: 0px auto;
		  text-align: center;
		  text-transform: uppercase;
		}
		#weather h2,#weather2 h2 {
		  margin: 0 0 8px;
		  margin-bottom: -50px;
		  color: #fff;
		  font-size: 18em;
		  font-weight: 300;
		  text-align: center;
		  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
		}
		#weather ul, #weather2 ul {
		  margin: 0;
		  padding: 0;
		}
		#weather li, #weather2 li {
		  background: #fff;
		  background: rgba(255,255,255,0.90);
		  padding: 20px;
		  font-size: 3em;
		  margin:10px;
		  display: inline-block;
		  color:white;
		}
		#weather li:nth-of-type(odd), #weather2 li:nth-of-type(odd) {
  			background-color: #0e1e31;
		}
		#weather li:nth-of-type(even), #weather2 li:nth-of-type(even) {
  			background-color: #034368;
		}
		#weather img {
		    height: 25%;
		}
		.glow:hover {
		    transition: box-shadow 0.4s ease;
		    box-shadow: 0 0 20px white;
		}
		h2 {
			font-family: 'amaticbold';
			color: white;
			font-size: 5em;
			text-align: center;
		}
		h3 {
			display: none;
		}
		@media all and (max-width: 1545px) {
			.container3{
				padding-top: 200px;
			}
			#weather h2 {
				font-size: 15em;
			}
			#weather li {
				font-size: 2.5em;
			}
		}


		@media all and (max-width: 1245px) {
			.container3{
				padding-top: 150px;
			}
			#weather h2 {
				font-size: 10em;
				padding-bottom: 10px;
			}
			#weather li {
				font-size: 2em;
			}
		}


	</style>

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-78250561-2', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="container2">
		<div class="box one small glow">
			<a href="{{ url('/') }}">
				<p><i class="fa fa-home" aria-hidden="true"></i><br><span class="subtype">Home</span></p>
			</a>
		</div>
	    <div class="box two glow">
	    	<div class="label">
	    		<p>Weather</p>
	    	</div>
	    </div>
	</div>


	<div class="container3">
		<div id="weather"></div>
	</div>
	<div class="container4">
		<h2>10 Day Forecast</h2>
		<div id="weather2"></div>
	</div>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Footer2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7298808958212532"
     data-ad-slot="6208093405"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src="js\jquery.min.js"></script>
	<script src="js\jquery.simpleWeather.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {  
			  getWeather(); //Get the initial weather.
			  setInterval(getWeather, 600000); //Update the weather every 10 minutes.
			});

			function getWeather() {
			  $.simpleWeather({
			    location: '67554',
			    unit: 'f',
			    success: function(weather) {
			      html = '<h2>'+weather.temp+' '+weather.units.temp+'</h2>';
			      html += '<ul><li class="glow shake-slow">'+weather.city+', '+weather.region+'</li>';
			      html += '<li class="glow shake-slow">'+weather.currently+'</li>';
			      html += '<li class="glow shake-slow">HIGH '+weather.high+' '+weather.units.temp+'</li>';
			      html += '<li class="glow shake-slow">LOW '+weather.low+' '+weather.units.temp+'</li>';
			  	  html += '<li class="glow shake-slow">HUMIDITY '+weather.humidity+'&#37;</li>';
			  	  html += '<li class="glow shake-slow">PRESSURE '+weather.pressure+'</li>';
			  	  html += '<li class="glow shake-slow">SUNRISE '+weather.sunrise+'</li>';
			  	  html += '<li class="glow shake-slow">SUNSET '+weather.sunset+'</li>';
			  	  html += '<li class="glow shake-slow">HEAT INDEX '+weather.heatindex+' '+weather.units.temp+'</li>';
			  	  html += '<li class="glow shake-slow">WIND CHILL '+weather.wind.chill+' '+weather.units.temp+'</li>';
			  	  html += '<li class="glow shake-slow">Wind '+weather.wind.speed+' '+weather.units.speed+' '+weather.wind.direction+'</li>';
			  	  html += '<li class="glow shake-slow">VISBILITY '+weather.visbility+'</li>';
			      $("#weather").html(html);
			    },
			    error: function(error) {
			      $("#weather").html('<p>'+error+'</p>');
			    }
			  });
			}

			  $.simpleWeather({
			    location: '67554',
			    unit: 'f',
			    success: function(weather) {
			      html = '<h3>'+weather.temp+'</h3>';
			      for(var i=0;i<weather.forecast.length;i++) {
			        html += '<ul><li>'+weather.forecast[i].day+'</li>';
			        html += '<li>high: '+weather.forecast[i].high+'</li>';
			        html += '<li>low: '+weather.forecast[i].low+'</li>';
			        html += '<li>'+weather.forecast[i].text+'</li></ul>';
			      }
			      $("#weather2").html(html);
			    },
			    error: function(error) {
			      $("#weather2").html('<p>'+error+'</p>');
			    }
			  });

	</script>

</body>
</html>