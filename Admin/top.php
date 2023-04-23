<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> </title>

		<style>
		
		 	.header
			{
				font-family: serif;
				position: fixed;
				top: 0;
				left: 0;
				right: 0;
				background: #333;
				z-index: 5;
				display: flex;
				/* align-items: center; */
				justify-content: space-between;
				padding: 0.2rem 3%;
				height: 65px;
				z-index: 1;
			}
			.header .logo
			{
				font-size: 4rem;
				font-weight: bolder;
				color: #fff;
				text-decoration: none;
			}
			.header .logo span
			{
				color: #38b6ff;
			}
			#nav
			{
				margin-top: 15px;
				margin-right: -70px;
			}
			#nav li a:hover
			{
				color: #fff;
			}
		</style>

</head>
<body>
		
	
	 <div class="header">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
							<a href="index.php" class="logo"><span>Awara</span>.com</a>
						</div>
						<div class="menu">
							<ul id="nav">
								<li><a href="../index.php" target="_blank">Preview Website</a></li>
								<li><a href="logout.php">Log Out</a></li>
								<div class="clearfix"></div>
							</ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
		 </div>
		 <!--/container-->
	 </div>

</body>
</html>