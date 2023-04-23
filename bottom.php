<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>

    <style>
        footer
        {
        background: #f1f1f1;
        padding: 60px 50px;
        margin-top: 10%;
        }
        .footer-container
        {
        max-width: 1300px;
        margin: auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap-reverse;
        }
        .footer-container .left-col .logo
        {
        width: 200px;
        margin-left: -5px;
        }
        .social-media{
        margin: 20px 0;
        }
        .social-media a{
        color: #001a21;
        margin-right: 25px;
        font-size: 22px;
        text-decoration: none;
        transition: .3s linear;
        }
        .social-media a:hover{
        color: #38b6ff;
        }
        .right-col h1{
        font-size: 26px;
        }
        .border{
        width: 180px;
        height: 4px;
        background: #38b6ff;
        }
        .newsletter-form{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        }
        .txtb{
        flex: 1;
        padding: 18px 40px;
        font-size: 16px;
        color: #293043;
        background: #ddd;
        border: none;
        font-weight: 700;
        outline: none;
        border-radius: 30px;
        min-width: 260px;
        }
        .btn{
        padding: 18px 40px;
        font-size: 16px;
        color: #f1f1f1;
        background: #38b6ff;
        border: none;
        font-weight: 700;
        outline: none;
        border-radius: 30px;
        margin-left: 20px;
        cursor: pointer;
        transition: opacity .3s linear;
        }
        .btn:hover{
        opacity: .7;
        }

    </style>
</head>
<body>
     <footer>
          <div class="footer-container">
            <div class="left-col">
              <img src="images/logo.png" alt="" class="logo">
              <div class="social-media">
				<br><br><br><br>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <p class="rights-text">© 2022 Created By <b>Awara.com travel</b>  All Rights Reserved.</p>
            </div>
    
            <div class="right-col">
              <h1>Our Newsletter</h1>
              <div class="border"></div> <br>
              <p>Enter Your Email to get our news and updates.</p><br>
              <form action="" class="newsletter-form">
                <input type="text" class="txtb" placeholder="Enter Your Email">
                <input type="submit" class="btn" value="submit">
              </form>
            </div>
          </div>
       </footer>

    <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>

       
</body>
</html>