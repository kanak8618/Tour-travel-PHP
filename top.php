<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>header</title> -->

    <style>
        body
        {
            font-family: serif;
            /* margin: 0; */
            /* padding: 0; */
        }
        header
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
			z-index: 5000;
        }
        header .logo
        {
            font-size: 4rem;
            font-weight: bolder;
            color: #fff;
            text-decoration: none;
        }
        header .logo span
        {
            color: #38b6ff;
        }
		header .navbar
		{
			margin-top: 15px;
		}
        header .navbar a
        {
            color: #fff;
            font-size: 1.9rem;
            margin: 1.2rem;
            text-decoration: none;
        }
        header .navbar a:hover
        {
            color: #38b6ff;
        }
    </style>

</head>
<body>
      <header>
        <a href="index.php" class="logo"><span>Awara</span>.com</a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="booking.php">Book</a>
            <a href="category.php">Packages</a>
            <a href="service.php">Servicies</a>
            <a href="gallary.php">Gallery</a>
            <a href="v_gallary.php">Video Gallery</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
</body>
</html>