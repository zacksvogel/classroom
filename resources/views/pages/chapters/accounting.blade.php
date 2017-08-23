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
    		<p>Accounting I/II</p>
    	</div>

    	<div class="chart">
    		<a href="{{ asset('/files/AccountingSyllabus.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Syllabus</h1>
	    		</div>
    		</a>
    	</div>
    	<div class="sidebarBox1">
    		<a href="{{ asset('/files/Business Finance Design Sheet 2-18-16.pdf') }}">
	    		<div class="center text">
	    			<h1>Class Competencies</h1>
	    		</div>
    		</a>
    	</div>
    	<div class="sidebarBox2">
    		<div class="center text">
    			<h1>Semester Final</h1>
    			<h3>
    				{{-- <a href="{{ asset('/files/accountingFiles/accounting test/fallfinal.htm') }}"> --}}Fall Final</a> | 
    				{{-- <a href="{{ asset('/files/accountingFiles/accounting test/springfinal.htm') }}"> --}}Spring Final</a>
    			</h3>
    		</div>
    	</div>
    	
    	<div class="boxSetup unit1">
    		<a href="{{ url('/chapters/acctChapters/acctCh1') }}">
		    	<div class="center text">
		    		<h1>Chapter 1</h1>
		    		<p>Starting A Proprietorship: Changes that Affect the Accounting Equation</p>
		    	</div>
	    	</a>
	    </div>
    	<div class="boxSetup unit2">
	    	<a href="{{ url('/chapters/acctChapters/acctCh2') }}">
	    		<div class="center text">
		    		<h1>Chapter 2</h1>
		    		<p>Analyzing Transactions into Debit and Credit Parts</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit3">
	    	<a href="{{ url('/chapters/acctChapters/acctCh3') }}">
	    		<div class="center text">
		    		<h1>Chapter 3</h1>
		    		<p>Recording Transactions in a General Journal</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit4">
	    	<a href="{{ url('/chapters/acctChapters/acctCh4') }}">
	    		<div class="center text">
		    		<h1>Chapter 4</h1>
		    		<p>Posting from a General Journal to a General Ledger</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit6">
    		<a href="{{ url('/chapters/acctChapters/acctChr1a') }}">
		    	<div class="center text">
		    		<h1>Reinforcement Activity 1 - Part A</h1>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit5">
	    	<a href="{{ url('/chapters/acctChapters/acctCh5') }}">
	    		<div class="center text">
		    		<h1>Chapter 5</h1>
		    		<p>Cash Control Systems</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit7">
	    	<a href="{{ url('/chapters/acctChapters/acctCh6') }}">
	    		<div class="center text">
		    		<h1>Chapter 6</h1>
		    		<p>Work Sheet for a Service Business</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit8">
	    	<a href="{{ url('/chapters/acctChapters/acctCh7') }}">
	    		<div class="center text">
		    		<h1>Chapter 7</h1>
		    		<p>Financial Statements for a Proprietorship</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit9">
	    	<a href="{{ url('/chapters/acctChapters/acctCh8') }}">
	    		<div class="center text">
		    		<h1>Chapter 8</h1>
		    		<p>Recording Adjusting and Closing Entries for a Service Business</p>
		    	</div>
	    	<a href="#">
    	</div>
    	<div class="boxSetup unit10">
    		<a href="{{ url('/chapters/acctChapters/acctChr1b') }}">
		    	<div class="center text">
		    		<h1>Reinforcement Activity 1 - Part B</h1>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit11">
	    	<a href="{{ url('/chapters/acctChapters/acctCh9') }}">
	    		<div class="center text">
		    		<h1>Chapter 9</h1>
		    		<p>Journalizing Purchases and Cash Payments</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit12">
	    	<a href="{{ url('/chapters/acctChapters/acctCh10') }}">
	    		<div class="center text">
		    		<h1>Chapter 10</h1>
		    		<p>Journalizing Sales and Cash Receipts Using Special Journals</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit13">
	    	<a href="{{ url('/chapters/acctChapters/acctCh11') }}">
	    		<div class="center text">
		    		<h1>Chapter 11</h1>
		    		<p>Posting To General and Subsidiary Ledgers</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit14">
	    	<a href="{{ url('/chapters/acctChapters/acctCh12') }}">
	    		<div class="center text">
		    		<h1>Chapter 12</h1>
		    		<p>Preparing Payroll Records</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit15">
	    	<a href="{{ url('/chapters/acctChapters/acctCh13') }}">
	    		<div class="center text">
		    		<h1>Chapter 13</h1>
		    		<p>Payroll Accounting, Taxes, and Reports</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit16">
    		<a href="{{ url('/chapters/acctChapters/acctChr2a') }}">
		    	<div class="center text">
		    		<h1>Reinforcement Activity 2 - Part A</h1>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit17">
	    	<a href="{{ url('/chapters/acctChapters/acctCh14') }}">
	    		<div class="center text">
		    		<h1>Chapter 14</h1>
		    		<p>Distributing Dividends and Preparing a Work Sheet for a Merchandising Business</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit18">
	    	<a href="{{ url('/chapters/acctChapters/acctCh15') }}">
	    		<div class="center text">
		    		<h1>Chapter 15</h1>
		    		<p>Financial Statements for a Corporation</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit19">
	    	<a href="{{ url('/chapters/acctChapters/acctCh16') }}">
	    		<div class="center text">
		    		<h1>Chapter 16</h1>
		    		<p>Recording Adjusting and Closing Entries for a Corporation</p>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit20">
    		<a href="{{ url('/chapters/acctChapters/acctChr2b') }}">
		    	<div class="center text">
		    		<h1>Reinforcement Activity 2 - Part B</h1>
		    	</div>
	    	</a>
    	</div>
    	<div class="boxSetup unit21">
    		<a href="{{ url('/chapters/acctChapters/simulation') }}">
		    	<div class="center text">
		    		<h1>Simulation Packet</h1>
		    	</div>
	    	</a>
    	</div>
    </div>

</body>
</html>
