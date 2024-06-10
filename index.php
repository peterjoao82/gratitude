<?php


$servername = "localhost";
$username = "et_user";
$password = "rMKex1xU,~)E";
$databasename="golden_gratitude";


// localhost connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $databasename="umc_website";
$link = new mysqli($servername, $username, $password, $databasename);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Gratitude</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
    
    h2 {
        
          font-family: "Space Grotesk", sans-serif;
  font-optical-sizing: auto;
  font-weight: 600;
  font-style: normal;
    }
    
    p {
     
  font-family: "Handlee", cursive;
  font-weight: 400;
  font-style: normal;
  font-size:1.5rem;

    }
        .tagContainer {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
            position: relative;
            /* Ensure the pseudo-element is positioned correctly */
            overflow: hidden;
            /* Prevent overflow of the background */
            margin: 0 auto;
            text-align: center;
        }

        .tagContainer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(img/cover_banner.jpg);
            background-size: cover;
            /* Ensure the background image covers the container */
            background-position: center;
            /* Center the background image */
            opacity: 0.5;
            /* Adjust the opacity as needed */
            z-index: -1;
            /* Place the background behind the content */
        }

        .tag_card {
            height: 100%;
            position: relative;
            overflow: hidden;
            padding-top: 40px;
               background-size: cover;
                  background-position: center;
        }

        .tag_card--overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Black overlay */
            z-index: 1;
            /* Positive z-index */
        }

        .tag_card--content {
            position: relative;
            /* Ensure content is above the overlay */
            z-index: 2;
            /* Ensure content is above the overlay */
            padding: 45px;
            color: white;
        }

        .button-box {
            border: 2px solid white;
            /* Border style */
            border-radius: 10px;
            background-color:White;
            color:#ffd700 ;
            /* Rounded corners */
            display: inline-block;
            /* Ensure button box wraps around button */
        }

        .button-box button {
            background: transparent;
            /* Transparent background for the button */
            color:#dbb600 ;
            /* Text color */
            padding: 10px 20px;
            /* Padding for the button */
            border: none;
            /* Remove default button border */
            cursor: pointer;
            /* Cursor style */
            font-size: 20px;
        }

        .button-box:hover {
            border-color: white;
            /* Change border color on hover */
        }

        .button-box:hover button {
            color: black;
            /* Change text color on hover */
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;

        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }

        .gradient-text {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 3rem;
            /* Adjust size as needed */
            background:linear-gradient(180deg, rgba(255,215,0,1) 56%, rgba(255,255,255,1) 97%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            /* text-fill-color: transparent; */
        }

        .gradient-text1 {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 34px;
            /* Adjust size as needed */
            background: linear-gradient(to bottom, #000000, #000000);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            /* text-fill-color: transparent; */
        }

        .gradient-text2 {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 24px;
            /* Adjust size as needed */
            color: white;
        }

        .design-button {
            border-radius: 10px;
            padding: 10px 16px;
            background: rgb(255,215,0);
            background: linear-gradient(180deg, rgba(255,215,0,1) 89%, rgba(255,255,255,1) 97%);
            border: none;
            border-color: none;
            color:white;
            font-size:1.6rem;
        }
        
        .form_button{
            font-size:1.2rem;
            width:100% !important;
            
        }

        .image-container {
  /* Prevent vertical gaps */
  width: 100%;
  line-height: 0;
   
  -webkit-column-count: 5;
  -webkit-column-gap:   0px;
  -moz-column-count:    5;
  -moz-column-gap:      0px;
  column-count:         5;
  column-gap:           0px;  
}

.image-container img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
}
@media (max-width: 1200px) {
  .image-container {
  -moz-column-count:    4;
  -webkit-column-count: 4;
  column-count:         4;
  }
}
@media (max-width: 1000px) {
  .image-container {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  .image-container {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  .image-container {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}
        /* .image-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.image-container a {
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
    /* Ensure each image takes up full width */
/* } */

/* .image-container img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
} */ 

/* Media query for desktop screens */
/* @media (min-width: 768px) {
    .image-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 10px;
    }

    .image-container a {
        width: auto;
       
    }
} */


        .gratitude-corner {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .cornerImg {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .cornerImg img {
            width: 100%;
            height: auto;
            /* Maintain aspect ratio */
            display: block;
        }
        
        
        .form_wrapper{
            border:2px solid #efefef;
            padding:5%;
            margin:5vw;
        }
        
        .form_wrapper textarea {
            margin-top:1vh;
            width:100% !important;
              font-family: "Handlee", cursive;
  font-weight: 400;
  font-style: normal;
  font-size:1rem;
    padding:2%;
            
        }
        
        .form_wrapper input {
                   width:100% !important;
                     font-family: "Handlee", cursive;
  font-weight: 400;
  font-style: normal;
  font-size:1rem;
  padding:2%;
              
        }
        
        .individual_thought{
                margin:5vw;
                
        }
        
        .thought_text{
            font-size:1.6rem;
            font-weight:600;
        }
        
        .thought_name{
            text-align:right !important;
            color:#9b9b9b;
        }
        
        .delete_button{
            background-color:#c91818;
            color:white;
            border:none;
            padding:2vw 4vw;
          
        }
        
    </style>
</head>

<body>


    <!-- custom menu -->


    <!-- custom menu -->

    <!-- about section -->

    <section class="about_section layout_padding mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="img-box" id="imageBox">
                        <img id="mainImage"
                            src="img/cover_banner.jpg"
                            alt="" />
                    </div><br>
                </div>
                <div class="col-md-5">
                    <div class="detail-box content">
                        <div class="custom_heading-container">
                            <h2 id="heading" class="gradient-text">
                                Golden Gratitude
                            </h2>
                        </div>

                        <p id="description">
                            Welcome to Golden Memories! <br>This is a celebration of our journey together, filled with
                            laughter, love, and unforgettable moments. Explore each section to relive the cherished
                            times we've shared.
                        </p>
                        <div>
                            <!-- <a href="">
                About More
              </a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="tagContainer">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tag_card" style="background-image:url(img/InnocentBeginnings/6.jpeg)">
                        <div class="tag_card--overlay"></div><!-- Black overlay -->
                        <div class="tag_card--content">
                            <div class="button-box">
                                <button id="mainImage" onclick="toggleDiv('Childhood')"> #Childhood </button>
                            </div>
                            <p class="gradient-text2"><br>Innocent Beginnings</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tag_card" style="background-image:url(img/ScholarlyShenanigans/8.jpeg)">
                        <div class="tag_card--overlay"></div><!-- Black overlay -->
                        <div class="tag_card--content">
                            <div class="button-box">
                                <button id="mainImage" onclick="toggleDiv('School')"> #School Days </button>
                            </div>
                            <p class="gradient-text2"><br>Scholarly Shenanigans</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tag_card" style="background-image:url(img/EpicEscapades/8.jpeg)">
                        <div class="tag_card--overlay"></div><!-- Black overlay -->
                        <div class="tag_card--content">
                            <div class="button-box">
                                <button id="mainImage" onclick="toggleDiv('Adventures')"> #Adventures </button>
                            </div>
                            <p class="gradient-text2"><br>Epic Escapades</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tag_card" style="background-image:url(img/PartyTimeWork-LifeBalance/4.jpeg)">
                        <div class="tag_card--overlay"></div><!-- Black overlay -->
                        <div class="tag_card--content">
                            <div class="button-box">
                                <button id="mainImage" onclick="toggleDiv('Celebrations')"> #Celebrations </button>
                            </div>
                            <p class="gradient-text2"><br>Party Time</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <br>

    <div id="Childhood" style="display: none;">
        <div class="text-center p-2">

            <h2 id="heading" class="gradient-text">
                Innocent Beginnings
            </h2>
            <p id="description">Step back into the days of innocence and endless play. Relive our earliest adventures,
                from sandbox escapades to our first big dreams. These were the moments that laid the foundation for a
                lifelong friendship.</p>
        </div>

        <div class="image-container">
            <a href="img/InnocentBeginnings/4.jpeg" data-fancybox="images">
                <img src="img/InnocentBeginnings/4.jpeg" alt="Image 1">
            </a>
            <a href="img/InnocentBeginnings/1.jpeg" data-fancybox="images">
                <img src="img/InnocentBeginnings/1.jpeg" alt="Image 1">
            </a>
            <a href="img/InnocentBeginnings/5.jpeg" data-fancybox="images">
                <img src="img/InnocentBeginnings/5.jpeg" alt="Image 1">
            </a>
            <a href="img/InnocentBeginnings/6.jpeg" data-fancybox="images">
                <img src="img/InnocentBeginnings/6.jpeg" alt="Image 1">
            </a>
            <a href="img/InnocentBeginnings/8.jpeg" data-fancybox="images">
                <img src="img/InnocentBeginnings/8.jpeg" alt="Image 1">
            </a>
            <a href="img/InnocentBeginnings/9.jpeg" data-fancybox="images">
                <img src="img/InnocentBeginnings/9.jpeg" alt="Image 1">
            </a>
          
           
        </div><br>

        <div class="text-center">
            <button class="design-button" onclick="displayRandomDiv()">Give Me More!</button>
        </div>
    </div>
    <div id="School" style="display: none;">
        <div class="text-center p-2">
            <h2 id="heading" class="gradient-text">
                Scholarly Shenanigans
            </h2>
            <p id="description">From classroom capers to recess fun, school days were all about learning and laughter.
                Dive into the memories of school events, shared secrets, and the friendships that stood the test of
                time.</p>
        </div>
        <div class="image-container">
                     
            <a href="img/ScholarlyShenanigans/2.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/2.jpeg" alt="Image 1">
            </a>
            <a href="img/ScholarlyShenanigans/1.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/1.jpeg" alt="Image 1">
            </a>
            <a href="img/ScholarlyShenanigans/3.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/3.jpeg" alt="Image 1">
            </a>
            <a href="img/ScholarlyShenanigans/8.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/8.jpeg" alt="Image 1">
            </a>
            <a href="img/ScholarlyShenanigans/4.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/4.jpeg" alt="Image 1">
            </a>
            <a href="img/ScholarlyShenanigans/5.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/5.jpeg" alt="Image 1">
            </a>
            <a href="img/ScholarlyShenanigans/6.jpeg" data-fancybox="images">
                <img src="img/ScholarlyShenanigans/6.jpeg" alt="Image 1">
            </a>
           
        </div><br>
        <div class="text-center">
            <button class="design-button" onclick="displayRandomDiv()">Give Me More!</button>
        </div>
    </div>
    <div id="Adventures" style="display: none;">
        <div class="text-center p-2">
            <h2 id="heading" class="gradient-text">
                Epic Escapades
            </h2>
            <p id="description">Life's greatest stories often come from the unexpected. Join us on our epic escapades,
                from spontaneous road trips to wild summer breaks, where every detour became a memorable adventure.</p>
        </div>
        <div class="image-container">
                     
            <a href="img/EpicEscapades/3.jpeg" data-fancybox="images">
                <img src="img/EpicEscapades/3.jpeg" alt="Image 1">
            </a>
            <a href="img/EpicEscapades/1.jpeg" data-fancybox="images">
                <img src="img/EpicEscapades/1.jpeg" alt="Image 1">
            </a>
            <a href="img/EpicEscapades/8.jpeg" data-fancybox="images">
                <img src="img/EpicEscapades/8.jpeg" alt="Image 1">
            </a>
            <a href="img/EpicEscapades/4.jpeg" data-fancybox="images">
                <img src="img/EpicEscapades/4.jpeg" alt="Image 1">
            </a>
            <a href="img/EpicEscapades/6.jpeg" data-fancybox="images">
                <img src="img/EpicEscapades/6.jpeg" alt="Image 1">
            </a>
            <a href="img/EpicEscapades/7.jpeg" data-fancybox="images">
                <img src="img/EpicEscapades/7.jpeg" alt="Image 1">
            </a>
            
           
        </div><br>
        <div class="text-center">
            <button class="design-button" onclick="displayRandomDiv()">Give Me More!</button>
        </div>
    </div>
    <div id="Celebrations" style="display: none;">
        <div class="text-center p-2">
            <h2 id="heading" class="gradient-text">
                Party Time
            </h2>
            <p id="description">Every celebration was a chance to create unforgettable memories. Whether it was a
                surprise party, a milestone birthday, or just a festive get-together, these are the moments that brought
                pure joy.</p>
        </div>
        <div class="image-container">
                     
            <a href="img/PartyTimeWork-LifeBalance/1.jpeg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/1.jpeg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/2.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/2.jpg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/3.jpeg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/3.jpeg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/4.jpeg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/4.jpeg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/5.jpeg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/5.jpeg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/6.jpeg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/6.jpeg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/7.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/7.jpg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/8.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/8.jpg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/9.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/9.jpg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/10.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/10.jpg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/11.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/11.jpg" alt="Image 1">
            </a>
            <a href="img/PartyTimeWork-LifeBalance/12.jpg" data-fancybox="images">
                <img src="img/PartyTimeWork-LifeBalance/12.jpg" alt="Image 1">
            </a>
            
            
           
        </div><br>
        <div class="text-center">
            <button class="design-button" onclick="displayRandomDiv()">Give Me More!</button>
        </div>
    </div>
<br><br>
    <div id="Thank" class="gratitude-corner">
        <div class="text-center p-2">
            <h2 id="heading" class="gradient-text">
                Gratitude Corner
            </h2>
            <p id="description">To my amazing friends, thank you for being a part of this beautiful journey. Your love, laughter, and support have made life extraordinary. Here's to the moments we've shared and the memories yet to come."

Thank You Message: "Thank you for being my rock, my confidant, and my source of endless laughter. I am grateful for each one of you and the joy you've brought into my life. Wishing you all happiness, love, and great health.</p>
        </div>
        <div class="cornerImg">
            <img src="img/GratitudeCorner/3341883.jpg" alt="">
        </div>

    </div>
    <br>


    <br>  <div class="text-center p-2">
        <h2 id="heading" class="gradient-text">
            Your Thoughts
        </h2>
  </div>
  
  <div class="form_wrapper">
          <form method="POST">
      <div class="form-class">
          <textarea name="thought" col="35"  placeholder="Enter your thoughts"></textarea>
           <input type="hidden" id="userCode" name="userCode" value="">
          <br>     <br>
          <input type="text" placeholder="Your Name" name="name" required/>
            <br>     <br>     <br>
             <div class="text-center">
        <button class="design-button form_button" type="submit" name="post_thought" >Submit</button>
    </div>
      </div>
  </form>
  
  </div>
  
  <hr>
  

      <?php
    $query = "SELECT * FROM master_comments where is_active=1  ORDER BY added_on;";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($result)) {
                
               ?>
               
                   <div class="individual_thought">
               <p class="thought_text">
                   <?php echo  $row['thought']; ?>
               </p>
               
                <p class="thought_name">
                   <?php echo  $row['name']; ?>
               </p>
               
               <form method="POST">
                         <input type="hidden"  name="id" value="  <?php echo  $row['id']; ?>">
                    <button class="<?php echo  $row['user_code']; ?> delete_button" type="submit" name="delete_thought" hidden>
                   Delete 
               </button>
               </form>
              
               
               </div>
              
               <?php
               
            }

?>

  <br>  <br>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 3000, // Delay between transitions in milliseconds
                disableOnInteraction: false, // Disable autoplay when user interacts with the slider
            },
            // pagination: {
            //     el: ".swiper-pagination",
            // },
        });
    </script>
    <script>
        function toggleDiv(divId) {
            // Hide the swiper container
            var swiperContainer = document.querySelector('.swiper.mySwiper');
            swiperContainer.style.display = 'none';
            document.getElementById('heading').classList.add('hidden');
            document.getElementById('description').classList.add('hidden');
            document.getElementById('imageBox').classList.add('hidden');
            // Toggle the visibility of the clicked div
            var div = document.getElementById(divId);
            if (div.style.display === "none") {
                div.style.display = "block";
            } else {
                div.style.display = "none";
            }
        }

        function displayRandomDiv() {
            // Array of div ids
            var divIds = ['Childhood', 'School', 'Adventures', 'Celebrations'];

            // Randomly select a div id
            var randomIndex = Math.floor(Math.random() * divIds.length);
            var randomDivId = divIds[randomIndex];

 window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
  
            // Hide all content divs
            divIds.forEach(function (divId) {
                document.getElementById(divId).style.display = 'none';
            });

            // Display the randomly selected div
            document.getElementById(randomDivId).style.display = 'block';

            // Hide the swiper container
            var swiperContainer = document.querySelector('.swiper.mySwiper');
            swiperContainer.style.display = 'none';
            
            
        }

        document.getElementById('mainImage').addEventListener('click', function () {
            document.getElementById('heading').classList.add('hidden');
            document.getElementById('description').classList.add('hidden');
            document.getElementById('imageBox').classList.add('hidden');
            this.classList.add('hidden');
            document.getElementById('tags').classList.remove('hidden');
            showImagesForTag(tags[0]);
            startAutoSlide();
        });

        // const tags = document.querySelectorAll('.tag');
        // let currentTagIndex = 0;
        // let interval;

        // tags.forEach(tag => {
        //     tag.addEventListener('click', function () {
        //         clearInterval(interval);
        //         currentTagIndex = Array.from(tags).indexOf(this);
        //         showImagesForTag(this);
        //         startAutoSlide();
        //     });
        // });

        // function showImagesForTag(tag) {
        //     const imageGrid = document.getElementById('imageGrid');
        //     imageGrid.innerHTML = ''; // Clear any previous images
        //     const images = tag.dataset.images.split(',');
        //     images.forEach(imageSrc => {
        //         const img = document.createElement('img');
        //         img.src = `img/${imageSrc}`;
        //         imageGrid.appendChild(img);
        //     });
        //     imageGrid.classList.remove('hidden');

        //     // Highlight the active tag
        //     tags.forEach(t => t.classList.remove('active'));
        //     tag.classList.add('active');
        // }

        // function startAutoSlide() {
        //     interval = setInterval(() => {
        //         currentTagIndex = (currentTagIndex + 1) % tags.length;
        //         showImagesForTag(tags[currentTagIndex]);
        //     }, 3000); // Change images every 10 seconds
        // }

    </script>
    <!-- <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script> -->


</body>

</html>


<?php



if(isset($_POST['post_thought'])) {
    
    $thought = mysqli_real_escape_string($link, $_POST['thought']);
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $userCode =  $_POST['userCode'];
    
    $query = "INSERT INTO master_comments (`name`, `thought`, `added_on`,`user_code`) values ('$name','$thought', SYSDATE(),$userCode)";
    $result1 = mysqli_query($link, $query);
    
    if($result1){
         echo "<script>
      swal({
      title: 'Your Thought has been captured. Thank you',
      icon: 'success',
      }).then((value) => {
      window.location.href = 'index';
      });
  
      </script>";
    }
    
}


if(isset($_POST['delete_thought'])) {
     $id =  $_POST['id'];
     
     $query = "UPDATE master_comments set is_active=0 where id=$id";
        $result2 = mysqli_query($link, $query);
     
         if($result2){
         echo "<script>
      swal({
      title: 'Your Thought has been Deleted',
      icon: 'success',
      }).then((value) => {
      window.location.href = 'index';
      });
  
      </script>";
    }
        
}




?>