<?php

include_once("./includes/meta.php");

// php code hier

 ?>

 <!-- html code hier -->

 <!DOCTYPE html>
<html>
	<head>
		<title>Header</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="./includes/Assets/Style/headersection.css">
		<!-- link for search icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>

	<body>
        <header>
			<div id = "boxes">

				<div id = "leftbox">
					<form class="example" action="action_page.php">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div> 
				
				<div id = "middlebox">
					<img src="./includes/Assets/Img/logo.png" alt="...">
				</div>
				
				<div id = "rightbox">
					<a href="..."><img src="./includes/Assets/Img/inlog.png" alt="..."></a>
				</div>
			</div>
        </header>

	</body>
</html>