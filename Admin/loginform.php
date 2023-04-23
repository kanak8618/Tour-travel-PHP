<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->
	<!-- <link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/> -->
	
	<link href="../css/login.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--js--> 
	<script src="js/jquery.min.js"></script>
	<!--/js-->

	<!--animated-css-->
	<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="../js/wow.min.js"></script>
	<script>
	new WOW().init();
	</script>
	<!--/animated-css-->
</head>
<body>
<!--header-->

<!--sticky-->
	<?php include('function.php'); ?>
	<?php
		$_SESSION['loginstatus']="";
		if(isset($_POST["sbmt"]))
		{
			$cn=makeconnection();
			$s="select * from users where Username='" . $_POST["t1"] . "' and Pwd='" . $_POST["t2"] ."'";
			
			$q=mysqli_query($cn,$s);
			$r=mysqli_num_rows($q);
		$data=mysqli_fetch_array($q);
			mysqli_close($cn);
			if($r>0)
			{
				$_SESSION["Username"]= $_POST["t1"];
				$_SESSION["usertype"]=$data[2];
				$_SESSION['loginstatus']="yes";
				header("location:index.php");
			}
			else
			{
			echo "<script>alert('Invalid User Name or Password');</script>";
		}
		}
	?>
<!--/sticky-->


	<!-- <div style="padding-top:150px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
		<div class="col-sm-3" style=" min-height:450px;"></div>
		<div class="col-sm-9"> -->
		
    
		
	
	<div class="container">
        <div class="drop">
            <div class="content">
                <h2>Sign in</h2>

					<form method="post">
					    <div class="inputBox">
							<input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" placeholder="Username" />
						</div>
						<div class="inputBox">
							<input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" placeholder="password" />
						</div>
						<div class="inputBox">
							<input type="submit" value="LOGIN" name="sbmt" />
						</div>	
					</form>

		    </div>
        </div>
        <a href="../index.php" class="btns">Go To home</a>
        <a href="#" class="btns signup">Reset</a>
    </div>	

</body>
</html>