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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="fonts\webfontkit-20160529-165819\fonts.css">
	<link rel="stylesheet" href="css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css\navbar.css">
	<style>
		body {
		    background-color:#717a7d;
		}
		.three {
		    background-color:#717a7d;
		    width: 1524px;
		    height: 900px;
		    position: absolute;
		    top:316px;
		    left:-766px;
		}
		.table {
			width: 1525px;
			margin-left: -16px;
		}
		table {
			font-size: .8em;

		}
		thead {
			background-color:#034368;
			font-family: 'amaticbold';
			font-size: 2em;
		}
		td {
			font-family: helvetica;
			font-size: 1.6em;
		}
		thead td {
			font-family: 'amaticbold';
		}
		.table-striped > tbody > tr:nth-of-type(odd) {
  			background-color: #6882a1
		}
		.table-striped > tbody > tr:nth-of-type(even) {
  			background-color: #034368;
		}
		.name {
			font-family: 'amaticbold';
			font-size: 3em;
		}
		.table > thead > tr > th,
		.table > tbody > tr > th,
		.table > tfoot > tr > th,
		.table > thead > tr > td,
		.table > tbody > tr > td,
		.table > tfoot > tr > td {
			padding:2px;
			line-height: 30px;
		}
		.table > thead > tr > td {
			line-height: 40px;
		}


		@media all and (max-width: 1545px) {
			.three {
		    width: 1218px;
		    height: 900px;
		    top:252px;
		    left:-612px;
			}
			.table {
				width: 1218px;
			}
			thead {
			font-size: 1.8em;
			}
			td {
				font-size: 1.3em;
			}
			.name {
				font-size: 2.2em;
			}
		}


		@media all and (max-width: 1245px) {
			.three {
		    width: 916px;
		    height: 900px;
		    top:192px;
		    left:-462px;
			}
			.table {
				width: 916px;
			}
			thead {
			font-size: 2.3em;
			}
			td {
				font-size: 1em;
			}
			.name {
				font-size: 2.3em;
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
		<div class="box one small shake-slow glow">
			<a href="{{ url('/') }}">
				<p><i class="fa fa-home" aria-hidden="true"></i><br><span class="subtype">Home</span></p>
			</a>
		</div>

	    <div class="box two five glow">
	    	<div class="label">
	    		<p>Class Schedules</p>
	    	</div>
	    </div>


		<div class="box three">
		<div class="container-fluid">
			<table class="table table-striped text-center">
				<thead class="">
					<td>Name</td>
					<td>1st Hour</td>
					<td>2nd Hour</td>
					<td>3rd Hour</td>
					<td>4th Hour</td>
					<td>5th Hour/Lunch</td>
					<td>6th Hour</td>
					<td>7th Hour</td>
					<td>8th Hour</td>
				</thead>
				<thead>
					<td>Mon-Thurs</td>
					<td>8:00 - 8:48</td>
					<td>8:51 - 9:39</td>
					<td>9:42 - 10:30</td>
					<td>10:33 - 11:21</td>
					<td>11:24 - 12:37</td>
					<td>12:40 - 1:28</td>
					<td>1:31 - 2:19</td>
					<td>2:22 - 3:10</td>
				</thead>
				<thead>
					<td>Friday</td>
					<td>9:00 - 8:41</td>
					<td>8:44 - 9:25</td>
					<td>9:28 - 10:08</td>
					<td>10:11 - 10:52</td>
					<td>10:55 - 11:59</td>
					<td>12:02 - 12:42</td>
					<td>12:45 - 1:26</td>
					<td>1:29 - 2:10</td>
				</thead>
				<tr>
					<td class="name">Blue</td>
					<td>Principles of Engineering</td>
					<td>Principles of Engineering</td>
					<td>Plan/Health III-CNA</td>
					<td>Physics</td>
					<td>Physics</td>
					<td>Principles of Engineering</td>
					<td>Human Body Systems</td>
					<td>Directed Studies/Health Science I</td>
				</tr>
				<tr>
					<td class="name">Braxton</td>
					<td>Band</td>
					<td>LMS</td>
					<td>LMS</td>
					<td>Lionaires</td>
					<td>LMS Lunch</td>
					<td>LMS</td>
					<td>LMS</td>
					<td>Chorus</td>
				</tr>
				<tr>
					<td class="name">Burdette</td>
					<td>Algebra II</td>
					<td>Int. College Algebra/College Algebra</td>
					<td>Pre-Calc</td>
					<td>Algebra II</td>
					<td>Algebra II</td>
					<td>Int. College Algebra/College Algebra</td>
					<td>Plan</td>
					<td>Basic Algebra</td>
				</tr>
				<tr>
					<td class="name">A. Dawson</td>
					<td>English 9</td>
					<td>English 10</td>
					<td>Plan</td>
					<td>English 10</td>
					<td>English 9</td>
					<td>21st Century Yearbook</td>
					<td>English 9</td>
					<td>English 10</td>
				</tr>
				<tr>
					<td class="name">D. Dawson</td>
					<td>Plan</td>
					<td>Debate/Forensics</td>
					<td>Directed Studies</td>
					<td>Practical Law</td>
					<td></td>
					<td>Debate/College Speech</td>
					<td>Speech I/Forensics</td>
					<td>Debate/Forensics</td>
				</tr>
				<tr>
					<td class="name">Denny</td>
					<td>Plan</td>
					<td>Trig/Stats</td>
					<td>Geometry</td>
					<td>Algebra I</td>
					<td>Algebra I</td>
					<td>Geometry</td>
					<td>Algebra I</td>
					<td>Applied Business Math</td>
				</tr>
				<tr>
					<td class="name">Foster/Eskut</td>
					<td>ROTC I</td>
					<td>ROTC I</td>
					<td>ROTC IV</td>
					<td>ROTC II/III</td>
					<td>ROTC II/III</td>
					<td>Plan</td>
					<td>Directed Studies</td>
					<td>ROTC I</td>
				</tr>
				<tr>
					<td class="name">Friess</td>
					<td>Weights and Conditioning</td>
					<td>Health/PE</td>
					<td>Health/PE</td>
					<td>Health/PE</td>
					<td>Weights and Conditioning</td>
					<td>Weights and Conditioning</td>
					<td>Plan</td>
					<td>Weights and Conditioning</td>
				</tr>
				<tr>
					<td class="name">Johnston</td>
					<td>Govt/Economics</td>
					<td>Directed Studies</td>
					<td>Business Law/Intro to LPSS</td>
					<td>Govt/Economics</td>
					<td>Psychology/Sociology</td>
					<td>World History</td>
					<td>Govt/Economics</td>
					<td>Plan</td>
				</tr>
				<tr>
					<td class="name">Nuss</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Adaptive PE</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
				</tr>
				<tr>
					<td class="name">Oborny</td>
					<td>Spanish I/Chase</td>
					<td>Spanish I</td>
					<td>Spanish I</td>
					<td>Spanish II</td>
					<td>Plan</td>
					<td>Spanish I</td>
					<td>Spanish II</td>
					<td>Spanish I</td>
				</tr>
				<tr>
					<td class="name">Pierce</td>
					<td>Counseling</td>
					<td>Counseling</td>
					<td>Counseling</td>
					<td>Counseling</td>
					<td>Counseling</td>
					<td>Counseling</td>
					<td>Counseling</td>
					<td>Counseling</td>
				</tr>
				<tr>
					<td class="name">Reid</td>
					<td>American History</td>
					<td>World History</td>
					<td>American History</td>
					<td>Plan</td>
					<td>American History</td>
					<td>Fire Science I/Fire Science II</td>
					<td>Fire Science I/Fire Science II</td>
					<td>World History</td>
				</tr>
				<tr>
					<td class="name">Robl</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
					<td>Resource Room</td>
				</tr>
				<tr>
					<td class="name">Roth</td>
					<td>Graphic Design/Photography</td>
					<td>Art I</td>
					<td>Advanced Art</td>
					<td>Photography/Graphic Design</td>
					<td>Advanced Art</td>
					<td>Plan</td>
					<td>Art I</td>
					<td>Art I/Art I/II</td>
				</tr>
				<tr>
					<td class="name">Scherer</td>
					<td>Band</td>
					<td>LMS</td>
					<td>LMS</td>
					<td>LMS</td>
					<td>LMS Lunch</td>
					<td>LMS</td>
					<td>LMS</td>
					<td>LMS</td>
				</tr>
				<tr>
					<td class="name">Schottler</td>
					<td>Auto Info/Transportation</td>
					<td>Engine Mech Repair</td>
					<td>Drafting/Plastics</td>
					<td>Transportation/Plastics</td>
					<td>Cabinet I/II</td>
					<td>Engine Mech Repair</td>
					<td>General Service I/II</td>
					<td>Plan</td>
				</tr>
				<tr>
					<td class="name">Spencer</td>
					<td>Biology</td>
					<td>Biology</td>
					<td>Biology</td>
					<td>Plan</td>
					<td>Biology</td>
					<td>Biology</td>
					<td>Applied Biology/Chemistry</td>
					<td>Applied Biology/Chemistry</td>
				</tr>
				<tr>
					<td class="name">Slupski</td>
					<td>Plan</td>
					<td>Robotics</td>
					<td>Intro to Welding/Intro to Tech</td>
					<td>Directed Studies</td>
					<td>Prod Welding I</td>
					<td>Prod Welding II</td>
					<td>Robotics</td>
					<td>Intro to Welding/Intro to Tech</td>
				</tr>
				<tr>
					<td class="name">Stover</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
					<td>PRIDE Room</td>
				</tr>
				<tr>
					<td class="name">Tommer</td>
					<td>Plan</td>
					<td>Culinary Arts I</td>
					<td>Career and Life/Foods and Nutr.</td>
					<td>Culinary Essentials/Personal Finance</td>
					<td>Career and Life/Child Development</td>
					<td>Human Growth and Development</td>
					<td>Teaching and Training/Event Management</td>
					<td>Teaching and Training/CTE Hour</td>
				</tr>
				<tr>
					<td class="name">Vogel</td>
					<td>Plan</td>
					<td>Bus Mgmt/Bus Essen</td>
					<td>Entrepreneurship/AV Fundamentals</td>
					<td>Accounting I/II/III</td>
					<td>Directed Studies</td>
					<td>Video Productions</td>
					<td>Web Design</td>
					<td>AV Fundamentals</td>
				</tr>
				<tr>
					<td class="name">Weber</td>
					<td>English 11</td>
					<td>English 12</td>
					<td>English Comp/Intro to Lit</td>
					<td>English 11</td>
					<td>English Comp/Intro to Lit</td>
					<td>Directed Studies</td>
					<td>Plan</td>
					<td>English 11</td>
				</tr>


			</table>
		</div>

	</div>


	</div>




</body>
</html>