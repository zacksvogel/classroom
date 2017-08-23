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

    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.pngg">

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
    		<p>Webpage Design</p>
    	</div>

    	<div class="chart">
    		<a href="{{ asset('files/Web Page Design Syllabus.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Syllabus</h1>
	    		</div>
    		</a>
    	</div>
    	<div class="sidebarBox1">
    		<a href="{{ asset('files/16-17 Business Ent Mgmt Design Sheet.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Competencies</h1>
	    		</div>
    		</a>
    	</div>

    	<div class="boxSetup unit1">
    		<a href="{{ url('/chapters/webChapters/webhtml') }}">
		    	<div class="center text">
		    		<h1>HTML/CSS</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
	    <!-- <div class="boxSetup unit2">
    		<a href="#">
		    	<div class="center text">
		    		<h1>CSS</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div> -->
	    <div class="boxSetup unit2">
	    	<a href="{{ url('/chapters/webChapters/webDesign') }}">
		    	<div class="center text">
		    		<h1>Design Fundamentals</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit3">
	    	<a href="{{ url('/chapters/webChapters/webBootstrap') }}">
		    	<div class="center text">
		    		<h1>BootStrap Framework</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit4">
	    	<a href="{{ url('/chapters/webChapters/webJavascript') }}">
		    	<div class="center text">
		    		<h1>Javascript / jQuery</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit5">
	    	<a href="{{ url('/chapters/webChapters/webDevops') }}">
		    	<div class="center text">
		    		<h1>DevOps</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit6">
	    	<a href="{{ url('/chapters/webChapters/webMisc') }}">
		    	<div class="center text">
		    		<h1>Miscellaneous</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit7">
	    	<a href="{{ url('/chapters/webChapters/webFinalProject') }}">
		    	<div class="center text">
		    		<h1>Projects</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div>
    </div>


</body>
</html>
