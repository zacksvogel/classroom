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

    <link rel="stylesheet" type="text/css" href="css\reset.css">
	<link rel="stylesheet" href="css\font-awesome.min.css">
	<link rel="stylesheet" href="fonts\webfontkit-20160529-165819\fonts.css">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\navbar.css">
	<link rel="stylesheet" type="text/css" href="css\ctelab.css">
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
    		<p>CTE Lab</p>
    	</div>
    </div>

    <div class="wrapper">
    	<div class="featureLeft">
    		<div class="picture">
    			<img src="{{ url('/images/3dprinter.png') }}">
    		</div>
    		<div class="content">
    			<h1 class="heading">3D Printer</h1>
    			<p>The CTE Lab has a Makerbot Replicator 3D Printer. The 3D printer was made possible with donations from KNW and Lyons Manufacturing. The 3D printer is used by drafting students to allow them to print objects that they design in a modeling software program on the computers. The students from the Entrepreneurship class also run a school business selling prints from the printer.</p>
    			<p><a href="https://www.youtube.com/watch?v=1jaklFe_740#" target="_blank">Video</a></p>
    		</div>
    	</div>
    	<div class="featureRight">
    		<div class="picture">
    			<img src="{{ url('/images/computer.png') }}">
    		</div>
    		<div class="content">
    			<h1 class="heading">Computers</h1>
    			<p>The CTE Lab has ten high performance video and picture editing desktop computers. Students use the computers to create websites, edit videos/pictures, and create 3D models. Each computer has the Adobe Suite(Photoshop, Premiere Pro, After Effects, Illustrator, InDesign, and Lightroom) installed, allowing students to work with professional level editing software.</p>
    		</div>
    	</div>
    	<div class="featureLeft">
    		<div class="picture">
    			<img src="{{ url('/images/camera.jpg') }}">
    		</div>
    		<div class="content">
    			<h1 class="heading">Camera Equipment</h1>
    			<p>Students have access to a wide array of camera equipment so that they can create profession videos in the classroom. Students have access to professional HD video cameras, tripods, lapel/shotgun/hand-held microphones, camera grips, and more. Click on the link below to see some of the students work.</p>
    			<p><a href="https://www.youtube.com/watch?v=1jaklFe_740#" target="_blank">USD 405 YouTube Channel</a></p>
    		</div>
    	</div>
    	<div class="featureRight">
    		<div class="picture">
    			<img src="{{ url('/images/green.jpg') }}">
    		</div>
    		<div class="content">
    			<h1 class="heading">Green Screen</h1>
    			<p>Green screen or chroma key is a special effects technique that allows students to layer or composite two or more images/videos on top of each other. The technique allows students to remove the green from the video and layer it on another video. Students use the green screen to create weekly and monthly newscasts.</p>
    		</div>
    	</div>
    	<div class="featureLeft">
    		<div class="picture">
    			<img src="{{ url('/images/tricaster.jpg') }}">
    		</div>
    		<div class="content">
    			<h1 class="heading">Tricaster</h1>
    			<p>A Tricaster is a multi-camera production system that allows students to create profession videos in the classroom and at events. Using the Tricaster allows students to add graphics, titles, virtual sets, use the green screen, and multiple cameras. Students use the Tricaster to create weekly and monthly newscasts. Students also video stream live events, such as graduation, sporting events, and assemblies.</p>
    		</div>
    	</div>
    </div>
</body>
</html>


