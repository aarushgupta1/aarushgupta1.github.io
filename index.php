<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="tennis, coach, skills" />
    <meta name="description" content="This is a great website" />
    <title>Gnitou Tennis Academy</title>
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel = "stylesheet" href = "swiper-bundle.min.css">
  </head>
<div class = "firstsection">
  <body style = "margin:0;">
      <h1>Gnitou Tennis Academy</h1>
      <div class = "logos">
        <img class="logo" src="images/ball.jpg" />
        <img class="secondlogo" src="images/ball.jpg" />
        <img class="thirdlogo" src="images/ball.jpg" />
      </div>
      <a href="about"><button type="button" onclick = "talk()">Learn More &#8594</button></a>
      <h2 class = "lessons">Lessons</h2>
      <p>
        -Coach Gnitou focuses on developing his students' technique, footwork, and
        strategy, and works with both children and adults
      </p>
      <p>
        -Private lessons 	&#8211 $100 an hour (outdoors), $90 an hour (indoors)
        </p>
        <p>-Semiprivate lessons &#8211 $45 an hour per person</p>
        <p class = "last">-Group lessons &#8211 $35 per person, up to 4 people and 2
        hours
      </p>
      </body>
  </div>
 <div class = "secondsection">
  <body style = "margin:0;"> 
    <h2 class = "workingwithstudents">Coach Gnitou Working With Students</h2>
       <div class = "videos mySwiper">
          <div class = "testi-content swiper-wrapper">
          <div class = "slide swiper-slide">
         <iframe class = "video"
            width="420"
            height="315"
            src="https://www.youtube.com/embed/3-R-YLC-f90"
      >
          </iframe>
          <p class = "description"> Forehand - Backhand Drill </p>
         </div>
            
       <div class = "slide swiper-slide">
         <iframe class = "video"
            width="420"
            height="315"
            src="https://www.youtube.com/embed/4xLd03M05WA"
      >
          </iframe>
          <p class = "description"> Using a Soccer Ball to Improve the Forehand  </p>
         </div>
               
      <div class = "slide swiper-slide">
         <iframe class = "video"
            width="420"
            height="315"
            src="https://www.youtube.com/embed/_AXnNVhY2yo"
      >
          </iframe>
          <p class = "description"> Correcting the Forehand Takeback </p>
           </div>
            
       <div class = "slide swiper-slide">
         <iframe class = "video"
            width="420"
            height="315"
            src="https://www.youtube.com/embed/G4Ta4qtrTMs"
      >
          </iframe>
          <p class = "description"> Learning to Jump Higher on the Serve </p>
         </div>
            
       <div class = "slide swiper-slide">
         <iframe class = "video"
            width="420"
            height="315"
            src="https://www.youtube.com/embed/jCSvr2ccF4g"
      >
          </iframe>
          <p class = "description"> Rallying Forehand to Forehand </p>            
        </div>
            </div>
          <div class="swiper-button-next nav-btn"></div>
          <div class="swiper-button-prev nav-btn"></div>
          <div class="swiper-pagination"></div>
          <script src = "swiper-bundle.min.js"></script>
          <script src = "script.js"></script>
    </div>
    
  </body>
  </div>
  <div class = "thirdsection">
    <body style = "margin:0;">
    <h2 class = "form">Interest Form</h2>
    <form class = "contact-form" action = "contactform.php" method = "post">
     <div class = "input-row">
     <h4>Name:</h4>
    <input name = "name" id = "name" type = "text" placeholder = "Enter your name" required minlength = "2" maxlength = "100">
       </div>
       <div class = "input-row">
    <h4>Email:</h4>
    <input name = "email" id = "senderEmail" type = "email" placeholder = "Enter your email address" required minlength = "3" maxlength = "100">
      </div>
    <div class = "input-row">
      <h4>Phone Number:</h4>
    <input name = "phonenumber" id = "phonenumber" type = "text" placeholder = "Enter your phone number" required minlength = "8" maxlength = "20">
  </div>
  <div class = "input-row">
  <h4>Experience:</h4>
    <input name = "experience" id = "experience" type = "text" placeholder = "# of years you've played tennis for">
</div>
    <div class = "input-row">
     <h4>Available days:</h4>
    <input name = "availability" id = "available-days" type = "text" placeholder = "List days that work for you" required minlength = "3" maxlength = "120">
    </div>
    <div class = "input-row">
    <input name = "submit" id = "submit" type = "submit">
      </div>
    </form>
</div>
    <div class="explore">
      <div class = "social-images">
      <a href="https://www.instagram.com/gnitou_tennis_academy/" target="_blank"
        ><img src="images/insta.jpg" alt="An image of instagram" class="instagram"
      /></a>
      <a
        href="https://www.facebook.com/Gnitou-tennis-academy-105739311342289"
        target="_blank"
        ><img
          src="images/facebook.jpg"
          alt="An image of facebook"
          class="facebook"
      /></a>
      <a
        href="https://www.youtube.com/channel/UCp7OAXdH22dV5FRyiDGvH1A"
        target="_blank"
        ><img src="images/youtube.jpg" alt="An image of youtube" class="youtube"
      /></a>
      <a
        href="https://www.tiktok.com/@gnitoutennisacademy"
        target="_blank"
        ><img src="images/tiktok.jpg" alt="An image of tiktok" class="tiktok"
      /></a>
      </div>
    <div class = "contact">
    <div class = "phone">
    <p class = "where"></p>
    <a href="tel:772-626-5504" target = "_blank" class = "location">772-626-5504</a> 
      </div>
      <div class = "email">
    <p class = "where"></p>
    <a href="mailto:chatrian_gnitou@yahoo.fr" target = "_blank" class = "location">chatrian_gnitou@yahoo.fr</a>
      </div>
      </div>
      </body>
      </div>
</html>
