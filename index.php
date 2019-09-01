<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Hogivano Soon</title>
    <meta charset="utf-8">
    <meta name="description" content="hendriyan ogivano adalah seorang web and mobile developer asal surabaya">
    <meta name="keywords" content="cv,website,mobile,developer,jasa">
    <meta name="author" content="Hendriyan Ogivano, hogivano@gmail.com">
    <meta name="language" content="ID">
    <meta name="robots" content="index,follow" />
    <meta name="url" content="http://hogivano.web.id/">
    <meta name="identifier-URL" content="http://hogivano.web.id/">
    <meta itemprop="image" content="http://hogivano.web.id/img/ho.png">

    <meta name="og:title" content="Hogivano Soon"/>
    <meta name="og:type" content="website"/>
    <meta name="og:url" content="http://hogivano.web.id/"/>
    <meta name="og:image" content="http://hogivano.web.id/img/ho.png"/>
    <meta name="og:site_name" content="hogivano"/>
    <meta name="og:description" content="hendriyan ogivano seorang web and mobile developer asal surabaya"/>

      <!-- Twitter Card data -->
      <meta name="twitter:card" content="summary_large_ image">
      <meta name="twitter:site" content="@hogivano">
      <meta name="twitter:title" content="Hogivano Soon">
      <meta name="twitter:description" content="hendriyan ogivano seorang web and mobile developer asal surabaya">
      <meta name="twitter:creator" content="@hogivano">

      <!-- Twitter summary card with large image must be at least 280x150px -->
      <meta name="twitter:image:src" content="http://hogivano.web.id/img/ho.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style>
      *{
        padding: 0;
        margin: 0;
      }

      html, body {
        height: 100%;
        width: 100%;
        overflow: hidden;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
      }

      body {
        -webkit-transition:all 3s ease-in;
        -moz-transition:all 3s ease-in;
        -o-transition:all 3s ease-in;
        -ms-transition:all 3s ease-in;
        transition:all 3s ease-in;
      }

      .bg-purple {
        background-image: linear-gradient(rgba(106, 138, 211), rgba(96, 115, 192));
      }

      .h-100 {
        height: 100%;
      }

      .w-150px {
        width: 150px;
      }

      .m-t-20 {
        margin-top: 20px;
      }

      .font-30 {
        font-size: 30px;
      }

      .font-20 {
        font-size: 20px;
      }

      .righteous {
        font-family: 'Righteous', cursive;
      }

      .sosmed a{
        margin: 0 5px !important;
        font-size: 30px;
      }

      .text-grey {
        color: #7a7a7a;
      }

      .text-danger {
        color: hsl(348, 100%, 61%);
      }

      .text-info {
        color: hsl(204, 86%, 53%);
      }

      .text-link {
        color: hsl(217, 71%, 53%);
      }

      .text-black {
        color: hsl(0, 0%, 4%);
      }

      .text-grey-light {
        color: hsl(0, 0%, 71%);
      }

      .zoom {
        animation: scale2 2s infinite;
      }

      @keyframes scale2 {
        60% {
          -webkit-transform:scale(0.9);
          -moz-transform:scale(0.9);
          -ms-transform:scale(0.9);
          -o-transform:scale(0.9);
          transform:scale(0.9);
        }
      }

      @media (max-width: 600px){
        img {
          width: 100px !important;
        }
        .sosmed a{
          margin: 0 2px !important;
          font-size: 20px;
        }
      }
    </style>
  </head>
  <body>
    <div class="container h-100">
      <div class="columns is-mobile is-vcentered h-100">
        <div class="column is-centered" style="text-align: center; margin-top: 40px;">
          <img src="./img/ho.png" class="w-150px" alt="hogivano" title="hogivano">
          <div class="info">
            <p>Hendriyan Ogivano</p>
            <p>Coming Soon</p>
          </div>
          <div class="m-t-20">
            <span id="typed" class="font-20 text-grey"></span>
          </div>
          <div id="countdown" class="font-30 righteous">
          </div>
          <div class="follow-me">
            <p class="has-text-grey-lighter" style="margin-top: 20px; margin-bottom: 5px;">follow me!</p>
            <div class="sosmed">
              <a href="https://www.instagram.com/hogivano6" target="_blank" class="text-danger"><i class="fab fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/hogivano/" target="_blank" class="text-info"><i class="fab fa-linkedin"></i></a>
              <a href="https://twitter.com/hogivano" target="_blank" class="text-info"><i class="fab fa-twitter-square"></i></a>
              <a href="https://www.facebook.com/hogivano" target="_blank" class="text-link"><i class="fab fa-facebook-square"></i></a>
              <a href="https://github.com/hogivano" target="_blank" class="text-black"><i class="fab fa-github-square"></i></a>
              <a href="mailto:hogivano@gmail.com" target="_blank" class="text-grey-light"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 16, 2019 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
  <script>
    var typed = new Typed('#typed', {
      stringsElement: '.info',
      typeSpeed: 100,
      startDelay: 2000,
      onComplete: (self) => {
        console.log("done");
        // $("body").addClass('bg-purple').fadeIn("slow");
        var image = $("img");
        image.fadeOut('500', function () {
          image.attr('src', './img/ho-white.png');
          image.fadeIn('500');
          image.addClass('zoom');
        });

        $( "body" ).animate({
          backgroundColor: "linear-gradient(rgba(106, 138, 211), rgba(96, 115, 192)) !important"
        }, 500);

        $( "#typed" ).animate({
          color: "hsl(0, 0%, 98%) !important"
        }, 1000);

        $( ".sosmed a" ).animate({
          color: "hsl(0, 0%, 96%) !important"
        }, 1000);
      },
    });
  </script>
</html>
