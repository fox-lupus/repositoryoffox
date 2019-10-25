<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/header.css?<?php echo microtime();?>"> 	
	<!--<link rel="stylesheet" type="text/css" href="css/slate-mobile-css?<?php echo microtime();?>"> -->
	<link rel="stylesheet" type="text/css" href="css/home.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/dots.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/curtistuff.css?<?php echo microtime();?>">
	<link rel="stylesheet" type="text/css" href="css/coursesectionsdirectory.css?<?php echo microtime();?>">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text?<?php echo microtime();?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto<?php echo microtime();?>" rel="stylesheet">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Zilla+Slab?<?php echo microtime();?>" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato?<?php echo microtime();?>" rel="stylesheet">	
</head>
<body>	
<div class="nav">
	<div class="slate-logo">
		<svg version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 392.4" height="38">
			<g fill="#fff">
			<path d="M493.5 190.5h-33.9v92.1H500v22.9h-66.2V60.1h66v22.5h-40.2v84.2h33.9M126.4 60.1v222.5h37.1v23.2H99.1V60.1m-52.5 67V95.8s0-10.7-8.8-10.6c-8 .1-7.1 11.3-7.1 11.3V122s-.3 5.5 2.1 12.1l39.1 69.8c5.7 10 4.9 16.6 5 23.4.1 3.4 0 22.8 0 49.7 0 16.2-13.6 28.5-36.6 29.5-.9 0-1.8.1-2.8.1-26 .1-37.6-14.5-37.5-31.7v-39.5h26.6s-.2 33.1 0 35.5-.2 11.7 11.5 11.8c10.9.1 12.5-8.7 12.6-11.8v-40c-.1-4.1-1.5-11.2-5.1-17.4-1.3-2.3-29.8-50.1-32.5-55.5-6.6-12.9-10.8-19.4-10.7-32.3.2-12.9 0-36.3 0-40.6 0-11.2 10.8-25.3 35.1-25.5C60.9 59.5 72 76.5 72 85.2l-.2 41.9"/><circle cx="197.4" cy="353.4" r="14.5"/><path d="M188.5 383.2l4.5 9.2v-9.1z"/><circle cx="303.8" cy="353.6" r="14.5"/><path d="M323.8 310.6m29.6-5.1v-223h-29.3V60.1h86.2v22.4h-28.9v223"/><circle cx="251" cy="80.8" r="14.5"/><path d="M328.4 215.7h-30.1L267 45h-5.7l-2.2-4.2-4-4.8 3.2-33.7s-1.8-2.4-6.8-2.4-6.9 2.4-6.9 2.4l3.2 33.6-4.3 4.8-1.8 4.2h-6.1L204 215.7h-32.4s-2.6 1.7-2.6 7 2.6 7 2.6 7h29.8l-22.6 122.1 6.2 19.7 2.9 10.5 5 10.2.5-10.1s1.2-5.5 3.1-14.5c-7.4-.5-13.3-6.7-13.3-14.2 0-7.9 6.4-14.2 14.2-14.2 1.7 0 3.4.3 4.9.9l20.9-110.4h56.6l20.1 110.2c.2 0 .3-.1.5-.1 1.1-.3 2.2-.4 3.4-.4 7.9 0 14.2 6.4 14.2 14.2 0 7.2-5.4 13.2-12.4 14.1 1.8 8.7 2.9 14.1 2.9 14.1l.8 4.5.1 5.7 3.1-5.9 2.2-4.3 2.1-10.3 5-20-5.9-38.1 2.6-.5 1 6.7c.2 1.3 1.4 2.2 2.8 2 1.3-.2 2.2-1.4 2-2.8l-1-6.7c0 .2.1.4.1.4 1.2-.2 2.1-1.3 2-2.5v-.4c-.3-1.2-1.4-2.1-2.7-1.9l-1-6.3c-.2-1.3-1.4-2.2-2.8-2-1.3.2-2.2 1.4-2 2.8l1 6.8-2.7.5-14.7-79.9H328s2.6-1.7 2.6-7-2.2-6.9-2.2-6.9zm-102.6 0l22.9-120.8c-6.7-1.1-11.9-7-11.9-14 0-7.9 6.4-14.2 14.2-14.2 7.9 0 14.2 6.4 14.2 14.2 0 6.5-4.3 11.9-10.3 13.7L277 215.8h-51.2z"/>
			</g>
		</svg>
	</div>
	<div class="flexbox-container">
		<div class="Search" id="search-bar">
			<form>
				<input type="text" placeholder="Search...">
			</form>
		</div>
		<img src="img/bitmap.png">
		<div class="menu">
			<span class="menu-text">menu</span>
			<div class="dropdown_menu">
				<a href="slatedashboard.php">Dashboard</a>
				<a href="coursesectionsdirectory.php">Course Sections Directory</a>
				<a href="competencydashboard.php">Competency Dashboard</a>
				<a href="taskdashboard.php">Task Dashboard</a>
				<a href="upcomingevents.php">Upcoming Events</a>
				<a href="contactus.php">Contact Us</a>
			</div>
		</div>
	</div>
</div>