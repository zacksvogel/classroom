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
    		<p>Business Essentials</p>
    	</div>

    	<div class="chart">
    		<a href="{{ asset('/files/Business Essentials Syllabus.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Syllabus</h1>
	    		</div>
    		</a>
    	</div>
    	<div class="sidebarBox1">
    		<a href="{{ asset('/files/16-17 Business Ent Mgmt Design Sheet.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Competencies</h1>
	    		</div>
    		</a>
    	</div>
    	<div class="sidebarBox2">
    		{{-- <a href="https://docs.google.com/a/usd405.com/forms/d/e/1FAIpQLScqfe87LVEaUBXrh-Kurfpc8MCggDIVHYN7ufGt9bPLQErGmg/viewform"> --}}
	    		<div class="center text">
	    			<h1>Semester Final</h1>
	    		</div>
    		{{-- </a> --}}
    	</div>

    	<div class="boxSetup unit1">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh1') }}">
		    	<div class="center text">
		    		<h1>Chapter 1</h1>
		    		<p>Economic Decisions and Systems</p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit2">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh5') }}">
		    	<div class="center text">
		    		<h1>Chapter 5</h1>
		    		<p>Business Organization</p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit3">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh6') }}">
		    	<div class="center text">
		    		<h1>Chapter 6</h1>
		    		<p>Entrepreneurship and Small Business Management</p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit4">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh7') }}">
		    	<div class="center text">
		    		<h1>Chapter 7</h1>
		    		<p>Management and Leadership</p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit5">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh9') }}">
		    	<div class="center text">
		    		<h1>Chapter 9</h1>
		    		<p>Career Planning and Development</p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit6">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh10') }}">
		    	<div class="center text">
		    		<h1>Chapter 10</h1>
		    		<p>Marketing</p>
		    	</div>
	    	</a>
	    </div>
	    <div class="boxSetup unit7">
    		<a href="{{ url('/chapters/busEssentials/busEssentialsCh16') }}">
		    	<div class="center text">
		    		<h1>Chapter 16</h1>
		    		<p>Money Management and Financial Planning</p>
		    	</div>
	    	</a>
	    </div>
	    <!-- <div class="boxSetup unit8">
    		<a href="busEssentials\busEssentialsCh17.html">
		    	<div class="center text">
		    		<h1>Chapter 17</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div> -->
	    <!-- <div class="boxSetup unit9">
    		<a href="busEssentials\busEssentialsCh18.html">
		    	<div class="center text">
		    		<h1>Chapter 18</h1>
		    		<p></p>
		    	</div>
	    	</a>
	    </div> -->


    </div>


</body>
</html>
