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

    <link rel="stylesheet" type="text/css" href="..\css\reset.css">
	<link rel="stylesheet" href="..\css\font-awesome.min.css">
	<link rel="stylesheet" href="..\fonts\webfontkit-20160529-165819\fonts.css">
	<link rel="stylesheet" href="..\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="..\css\navbar.css">
	<link rel="stylesheet" type="text/css" href="..\css\classes.css">

    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">

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
    		<p>AV Productions</p>
    	</div>

    	<div class="chart">
    		<a href="{{ asset('files/Video Production Syllabus.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Syllabus</h1>
	    		</div>
    		</a>
    	</div>
    	<div class="sidebarBox1">
    		<a href="{{ asset('/files/16-17 AV Communication Design Sheet.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Competencies</h1>
	    		</div>
    		</a>
    	</div>

    	<div class="boxSetup unit1">
    		<a href="{{ url('/chapters/avChapters/videoEquipment') }}">
		    	<div class="center text">
		    		<h1>Video Equipment</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit2">
	    	{{-- <a href="{{ url('/chapters/avChapters/videoComposition') }}"> --}}
		    	<div class="center text">
		    		<h1>Video Composition</h1>
		    		<!-- <p></p> -->
		    	{{-- </div> --}}
	    	</a>
	    </div>
	    <div class="boxSetup unit3">
	    	<a href="{{ url('/chapters/avChapters/mutedNewsPackage') }}">
		    	<div class="center text">
		    		<h1>Muted News Package</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit4">
	    	{{-- <a href="{{ url('/chapters/avChapters/firstNewsPackage') }}"> --}}
		    	<div class="center text">
		    		<h1>1st News Package</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	{{-- </a> --}}
	    </div>
	    <div class="boxSetup unit5">
	    	<a href="{{ url('/chapters/avChapters/badLipReading') }}">
		    	<div class="center text">
		    		<h1>Bad Lip Reading</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit6">
	    	{{-- <a href="{{ url('/avChapters/stopMotion') }}"> --}}
		    	<div class="center text">
		    		<h1>Stop Motion Project</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	{{-- </a> --}}
	    </div>
	    <div class="boxSetup unit7">
    		<a href="https://docs.google.com/presentation/d/1MuKS19kakz9ZMhSNaC02hjU-gJM3czCHR5BPe4-Ggww/edit?usp=sharing">
		    	<div class="center text">
		    		<h1>Video Production Careers</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit8">
	    	<div class="center text">
	    		<h1>Videos Assignment</h1>
	    		{{-- <p><a href="https://www.youtube.com/watch?v=H8aoUXjSfsI">Video 1</a> | <a href="https://www.youtube.com/watch?v=VAVwZawA6eA">Video 2</a> | <a href="https://www.youtube.com/watch?v=EaPc_BIp9k4">Video 3</a></p> --}}
	    	</div>
	    </div>
	    <div class="boxSetup unit9">
    		{{-- <a href="https://docs.google.com/document/d/1KUOJQkve-HhMhq89IjGZW2N5SQsO4Nex2zGFYrusAYc/edit?usp=sharing"> --}}
		    	<div class="center text">
		    		<h1>Final Project</h1>
		    		<!-- <p></p> -->
		    	</div>
	    	{{-- </a> --}}
	    </div>
    </div>


</body>
</html>
