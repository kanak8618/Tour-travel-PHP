<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awara.com</title>

    <!-- css link  -->
    <link rel="stylesheet" href="css/home.css">
    <!-- branding slider link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>
<body>
<!-- -----------------------------------------------------------------------home section -->
    <header>
        <a href="#" class="logo"><img src="images/logo.png"></a></a>
    </header>
    <!-- -----------------video slide  -->

    <section class="main">   
        <img src="images/mask.jpg" class="mask">
          <h2>Awara.com <p>it's a world out there <br>go explore</p></h2>

        <div class="controls">
            <span class="vid-btn active" data-src="video/Lake.mp4" style="--clr: #2196f3;"></span>
            <span class="vid-btn" data-src="video/Coastline.mp4" style="--clr:#ffa117;"></span>
            <span class="vid-btn" data-src="video/vid-4.mp4" style="--clr: #f33c2ee1;"></span>
            <span class="vid-btn" data-src="video/Beach.mp4" style="--clr:#0fc70f;"></span>
            <span class="vid-btn" data-src="video/Saigon.mp4" style="--clr:#b145e9;"></span>
        </div>

        <div class="video-container">
            <video src="video/Lake.mp4" id="video-slider" loop autoplay muted></video>
        </div>

        <ul class="sci">
            <li>
                <a href=""><i class="fa-brands fa-square-instagram"></i></a>
            </li>
            <li>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
                <a href=""><i class="fa-brands fa-linkedin"></i></a>
            </li>
        </ul>
    </section>
    
     <!-----------------navigation bar  -->
        <div class="navigation">
            <ul>
                <li class="list active"  style="--clr: #2196f3;">
                    <a href="index.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>    
                    </a>
                </li>
                <li class="list"  style="--clr: #ffa117;">
                    <a href="booking.php">
                        <span class="icon"><ion-icon name="ticket-outline"></ion-icon></span>    
                    </a>
                </li>
                <li class="list" style="--clr:#ffa117;">
                    <a href="category.php">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    </a>
                </li>
                <li class="list" style="--clr:#f33c2ee1;">
                    <a href="service.php">
                        <span class="icon"><ion-icon name="git-pull-request-outline"></ion-icon></span>
                    </a>
                </li>
                <li class="list" style="--clr:#0fc70f;">
                    <a href="gallary.php">
                        <span class="icon"><ion-icon name="images-outline"></ion-icon></span>
                    </a>
                </li> 
                <li class="list" style="--clr:#b145e9;">
                    <a href="v_gallary.php">
                        <span class="icon"><ion-icon name="videocam-outline"></ion-icon></span>
                    </a>
                </li>
            </ul>
        </div>       

<!-- --------------------------------------------------------------package section  -->
    <section class="package">

        <div class="card1">         <!-- card 1 section  -->
            <div class="elements imgBox">
                <video src="video/v6.mp4" loop autoplay muted></video>
            </div>
            <div class="content">
                <h2>Enjoy Adventure</h2>
                <p>The purpose of life is to live it, to taste experience to the utmost, to reach out eagerly and without fear for newer and richer experience.</p>
            </div>
            <span></span>
        </div> 

        <div class="title_Pac">      <!-- title section  -->
            <h2>Enjoy Traveling With Awara.com</h2>
            <p><span>"</span>Go, Fly, Roam, Travel, Voyage, Explore, Journey, Discover, Adventure.<span>"</span></p>
            <div class="pac_detail">       <!-- content section  -->
                <h3>All Packages</h3>
                <p>
                    "It liberates the vandal to travel you never saw a bigoted, opinionated, stubborn, narrow-minded, self-conceited, almighty mean man in your life but he had stuck in one place since he was born and thought God made the world and dyspepsia and bile for his especial comfort and satisfaction"
                    <br><span>– Mark Twain</span>
                </p>
                <div class="book_button">        <!-- button  -->
                    <button class="custom-btn btn-5">
                        <a href="category.php">Book Now</a>
                    </button>
                </div>  
            </div> 
        </div>

                

        <div class="card2 col2">        <!-- card 2 section  -->
            <div class="elements imgBox">
                <video src="video/v2.mp4" loop autoplay muted></video>
            </div>
            <div class="content">
                <h2>Tour With Family</h2>
                <p>That’s why I love road trips, dude. It’s like doing something without actually doing anything.</p>
            </div>
            <span></span>
        </div>

        <div class="card3">         <!-- card 3 section  -->
            <div class="elements imgBox">
                <video src="video/v16.mp4" loop autoplay muted></video>
            </div>
            <div class="content">
                <h2>Enjoy Love Bird</h2>
                <p>Love should feel like a hand-sewn quilt made by grandma, wrapping you up on a cold winter morning.</p>
            </div>
            <span></span>
        </div>

        <div class="card4 col2">        <!-- cadr 4 section  -->
            <div class="elements imgBox">
                <video src="video/v5.mp4" loop autoplay muted></video>
            </div>
            <div class="content">
                <h2>Tour With Friends</h2>
                <p>The more I traveled the more I realized that fear makes strangers of people who should be friends</p>
            </div>
            <span></span>
        </div>

    <!-- animated tree ------------------------------------------ -->

            <svg style="display:none;">
                <symbol id="leaf" viewBox="0 0 93.999 93.999">
                <path d="M23.602 17.519C4.491 28.608 5.588 46.67 6.246 53.353c24.684-29.24 61.606-27.822 61.606-27.822S15.514 43.484.142 79.485c-1.214 2.842 5.696 6.538 7.273 3.178 4.707-10.012 11.266-17.521 11.266-17.521 9.677 3.601 26.417 7.821 38.282-.528 15.76-11.091 14.149-35.677 36.647-47.648 5.255-2.795-44.099-14.482-70.008.553z"/>
                </symbol>
            </svg>
            <div class="tree-abs">
            <div class="tree-wrap">
                <svg class="treeicon" viewBox="0 0 500 500" height="140" aria-hidden="true">
                <path
                    d="M68.498 550.001c.279.251.64.386 1.016.386h415.383a1.52 1.52 0 0 0 1.159-.532c.267-.312 6.494-7.715 2.154-17.543-7.665-17.365-47.519-38.93-193.395-43.388 2.992-4.076 6.016-8.137 9.036-12.188 20.214-27.114 36.423-54.776 49.554-84.565 11.766-26.699 23.978-57.841 19.93-89.604-3.947-30.955-19.97-60.646-35.459-89.346-1.157-2.191-2.524-4.562-3.966-7.053-7.788-13.47-17.482-30.233-6.295-41.521a1.528 1.528 0 0 0 .034-2.118 1.532 1.532 0 0 0-2.115-.123c-14.602 12.509-6.967 29.141-1.392 41.286 2.613 5.682 5.294 11.359 7.978 17.032 5.101 10.793 10.379 21.95 15.046 32.975 12.76 30.162 13.451 62.105 2.09 97.528-8.645-25.01-33.274-46.809-57.137-67.929-4.314-3.819-8.62-7.629-12.824-11.45-30.842-28.021-43.366-57.789-38.293-91.005 4.416-28.936 24.609-54.581 45.982-81.732 3.14-3.987 6.282-7.98 9.376-11.989 9.945-12.867 21.285-31.861 18.835-49.257-1.225-8.7-5.836-16.034-13.7-21.806a1.53 1.53 0 0 0-1.958 2.344c6.536 6.227 9.73 13.164 9.765 21.212.101 22.222-24.78 47.714-43.275 65.735 13.602-35.414 24.03-67.85 20.649-101.458-.079-.808-.771-1.398-1.598-1.374a1.532 1.532 0 0 0-1.453 1.53c0 32.552-15.578 64.71-30.646 95.812-15.998 33.023-32.5 67.09-30.695 102.127-1.346-2.895-2.65-5.856-3.993-8.908-10.229-23.256-20.808-47.304-59.288-61.402a1.53 1.53 0 0 0-1.175 2.819c35.766 16.854 43.348 40.523 51.377 65.582 3.957 12.353 8.048 25.125 15.848 36.698 10.964 16.27 28.011 31.387 44.498 46.007 23.051 20.441 46.886 41.577 53.596 65.631 10.594 37.987-16.08 75.01-41.876 110.812l-5 6.955c-5.896 8.229-10.814 15.138-15.587 22.313-120.677.575-189.457 14.104-198.912 39.138-4.586 12.124 6.261 21.956 6.726 22.369z"
                    fill="#8c5f37"
                ></path>
                </svg>
                <svg class="leaf-icon" style="top:130px;left:55px;height:50px;width:50px;transform:rotate(200deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:25px;left:120px;height:50px;width:50px;transform:rotate(310deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:90px;left:168px;height:65px;width:65px;transform:rotate(35deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:98px;left:40px;height:44px;width:44px;transform:rotate(220deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:71px;left:50px;height:39px;width:39px;transform:rotate(230deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:61px;left:45px;height:24px;width:24px;transform:rotate(250deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:53px;left:91px;height:48px;width:48px;transform:rotate(275deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:36px;left:63px;height:28px;width:28px;transform:rotate(270deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:15px;left:80px;height:32px;width:32px;transform:rotate(280deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:0px;left:108px;height:36px;width:36px;transform:rotate(290deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:6px;left:144px;height:24px;width:24px;transform:rotate(312deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:139px;left:140px;height:24px;width:24px;transform:rotate(10deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:82px;left:196px;height:39px;width:39px;transform:rotate(50deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:71px;left:218px;height:24px;width:24px;transform:rotate(10deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:54px;left:156px;height:48px;width:48px;transform:rotate(0deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:47px;left:205px;height:29px;width:29px;transform:rotate(20deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:25px;left:186px;height:32px;width:32px;transform:rotate(350deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:27px;left:155px;height:36px;width:36px;transform:rotate(318deg);"><use xlink:href="#leaf"></svg>
                <svg class="leaf-icon" style="top:110px;left:82px;height:25px;width:25px;transform:rotate(200deg);"><use xlink:href="#leaf"></svg>
            </div>  
            </div>

    </section>
<!-- -----------------------------------------------------------------------gallary sectiion  -->

    <section>
        <div class="section-title">
            <h2>Photo <span>Gallery</span></h2>
        </div>
        <div class="gallary">
            <div class="polaroid">
                <div class="polaroid__image">
                     <img src="https://images.pexels.com/photos/904272/pexels-photo-904272.jpeg?auto=compress&cs=tinysrgb&w=400" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“What I want in a good beach read is sunshine, drama, easy-reading and transportation to another world and other people’s problems.” </p>
                </div>
            </div>

            <div class="polaroid">
                <div class="polaroid__image">
                     <img src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>Today was about chasing sun-rays, beach waves, & sunsets. All things beautiful that give you peace are worth chasing. Everything else isn’t.</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://cdn.pixabay.com/photo/2019/03/31/14/31/houses-4093227_960_720.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Nature is a haunted house--but Art--is a house that tries to be haunted.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="images/c-4.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“What would you do if I kissed you right now?" I stared at his beautiful face and his beautiful mouth and I wanted nothing more than to taste it. "I would kiss you back.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="images/c-5.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Why is it that the right people never wind up together? Why are people so afraid to leave a relationship, even if they know it's a bad one?”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="images/c-1.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“I love the sea’s sounds and the way it reflects the sky. The colors that shimmer across its surface are unbelievable. This, combined with the color of the water over white sand, surprises me every time.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="images/c-2.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>It was as if when I looked into his eyes, I was standing alone on the edge of the world…on a windswept ocean beach. There was nothing but the soft roar of the waves.</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                     <img src="images/c-3.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Every couple has ups and downs, every couple argues, and that’s the thing—you’re a couple, and couples can’t function without trust.”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://cdn.pixabay.com/photo/2016/11/30/15/00/lighthouse-1872998_960_720.jpg" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Seek not a lighthouse greater than the human mind! Believe not the existence of an emotion nobler than the compassion!”</p>
                </div>
            </div>
            <div class="polaroid">
                <div class="polaroid__image">
                    <img src="https://images.unsplash.com/photo-1667471730144-2a110a36a7ae?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2Njg2NTk2MTM&ixlib=rb-4.0.3&q=80" loading="lazy" />
                </div>
                <div class="polaroid__description">
                    <p>“Don’t walk in front of me… I may not follow Don’t walk behind me… I may not lead Walk beside me… just be my friend”</p>
                </div>
            </div>
        </div>

   </section>
<!-- ---------------------------------------------------------------services section  -->
    <section class="services">
        <div class="section-title">
            <h2>Our<span>Servicies</span></h2>
        </div>
        
        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Affordable hotels</h3>
                <p>We provide Affordable and Secure hotels that make your journey Comfortable</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>you can take your favorite food and drink that make your journey happy</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safety guide</h3><br>
                <p>Don't Worry About safety our team take care of your security</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>India travel</h3>
                <p>Travel in India and feel the indian culture with the Awara.coom travel</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest Travel</h3>
                <p>Fast and safe travel with the Awara.coom travel</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>advanture</h3>
                <p>You can enjoy the adventure with the Awara.coom travel</p>
            </div>

        </div>       
    </section>
<!-- ----------------------------------------------------------------contact us section  -->
    <div class="contact">
        <div class="top-border left"></div>
        <div class="top-border right"></div>
        <h1>GET IN TOUCH</h1>
        <p>“It’s not much we need to be happy: one call, one message, just a simple attention, and the world in your eyes will change. Keep in touch, no matter what happens.” <br> you send the message of our team and call for any inquiry</p>
        <a href="contact.php">CONTACT US</a>
    </div>
<!-- ------------------------------------------------------------------branding section  -->
    <section class="brand-container">
        <div class="swiper brand-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="images/11.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/22.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/33.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/44.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/55.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="images/66.jpg" alt="">
                </div>

            </div>
        </div>
    </section>
<!-- ------------------------------------------------------------------footer section  -->

<footer class="footer">
  	 <div class="fcontainer">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="aboutus.php">about us</a></li>
  	 				<li><a href="service.php">our services</a></li>
  	 				<li><a href="privecy.php">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		    <div class="footer-col">
  	 			 <h4 class="social">follow us</h4>
                   <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
  	 	    	</div>

  	 	</div>
  	 </div>
  </footer>

     <!-- icon link  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script src="https://kit.fontawesome.com/b0a5cfef0e.js" crossorigin="anonymous"></script>
    <!-- branding slider  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <!-- script link  -->
    <script>
        const navigation = document.querySelector('.navigation');
        const list = document.querySelectorAll('.list');
        const videoBtn = document.querySelectorAll('.vid-btn');


         function activeLink(){
             list.forEach((item) =>
             item.classList.remove('active'));
             this.classList.add('active');
         }
 
         list.forEach((item) =>
         item.addEventListener('click',activeLink));

         videoBtn.forEach(btn => {
            btn.addEventListener('click', () =>{
               document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                const src = btn.getAttribute('data-src');
                document.querySelector('#video-slider').src = src;
            });
        });


        var swiper = new Swiper(".brand-slider", {
            spaceBetween: 20,
            loop:true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                450: {
                    slidesPerView: 2,
                  },
                768: {
                    slidesPerView: 3,
                  },
                991: {
                    slidesPerView: 4,
                  },
                1200: {
                    slidesPerView: 5,
                  },
              },
        });


        (function animateTree() {
          let angle = 0;
          const leafs = document.querySelectorAll(".leaf-icon");
          try {
            for (let i = 3, l = leafs.length; i < l; i++) {
              angle = parseInt(leafs[i].style.transform.substring(7));
              leafs[i].animate(
                {
                  transform: [
                    `translate3d(${leafs[i].style.left}, ${leafs[i].style.top}, 0px) rotate(${angle}deg)`,
                    `translate3d(
                                ${dir() * Math.round(Math.random() * 10) + parseInt(leafs[i].style.left)}px, 
                                ${dir() * Math.round(Math.random() * 10) + parseInt(leafs[i].style.top)}px,
                                0px) rotate(${dir() * Math.round(Math.random() * 20) + angle}deg)`,
                  ],
                },
                {
                  iterations: Infinity,
                  direction: "alternate",
                  easing: "ease-in-out",
                  duration: 3000,
                }
              );
              leafs[i].style = `height:${leafs[i].style.height};width:${leafs[i].style.width};`;
            }
          } catch (e) {
            /* Abort animation if not supported */
            return;
          }
          function dir() {
            return Math.round(Math.random()) * 2 - 1;
          }
        })();

    </script>

</body>
</html>