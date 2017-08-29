<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Theme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!-- Add Scrollspy  to automatically update navbar links when scrolling -->

  <!-- Add a navbar at the top of the page that collapses on smaller screens -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- for smaller screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#myPage">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#services">SERVICES</a></li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- A jumbotron indicates a big box for calling extra attention to some special content or information. 
  A jumbotron is displayed as a grey box with rounded corners. It also enlarges the font sizes of the text inside it.
  + text-center -->
  <div class="jumbotron text-center"> 
    <h1>LIFE IS GOOD</h1> 
    <p>We specialize in drinking</p> 
        
    <form class="form-inline"> <!-- Bootstrap Inline Form -->
      <div class="input-group"> <!-- The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text". -->
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <div class="input-group-btn">
          <button type="button" class="btn btn-danger">Subscribe</button>
        </div>
      </div>
    </form>

  </div>

<!-- Add two containers (.container-fluid) and a custom class to the second container (.bg-grey - adds a gray background color) -->
 <!-- Add an icon (or the company's logo) to each container. Separate the icon and the "about text" by creating two columns (.col-sm-8 and .col-sm-4) -->  
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>About Company Page</h2>
        <h4>Lorem ipsum..</h4> 
        <p>Lorem ipsum..</p>
        <button class="btn btn-default btn-lg">Get in Touch</button>
      </div>
      <div class="col-sm-4">
        <!-- Bootstrap provides 260 glyphicons from the Glyphicons Halflings set. -->
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>  
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo"></span> 
      </div>
      <div class="col-sm-8">
        <h2>Our Values</h2>
        <h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4> 
        <p><strong>VISION:</strong> Our vision Lorem ipsum..
      </div>
    </div>      
  </div>

  <!-- Add a new container, with 2x3 columns of equal width (.col-sm-4) -->
  <div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
      <!-- .slideanim animation in elements on scroll -->
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-off logo-small"></span>
        <h4>POWER</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>LOVE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>JOB DONE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      </div>
      <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>GREEN</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4>HARD WORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
  </div>

  <!-- Create a new full-width container, with three columns of equal width (.col-sm-4) with .img-thumbnail-->
  <div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./img/1.jpg" alt="Paris">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./img/2.jpg" alt="New York">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./img/3.jpg" alt="San Francisco">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
</div>

<!-- Add a carousel (slideshow)
Plugins can be included individually (using Bootstrap's individual "carousel.js" file), or all at once (using "bootstrap.js" or "bootstrap.min.js") -->
<!-- manual from https://www.w3schools.com/bootstrap/bootstrap_carousel.asp -->

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- data-ride="carousel" attribute tells Bootstrap to begin animating the carousel immediately when the page loads
  + class for css -->

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Content for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <!-- .active class needs to be added to one of the slides -->
      <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Add a new container with contact information -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
      </div>
      <div class="col-sm-7">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div> 
      </div>
    </div>
  </div>
  
  <!-- Add Google Maps -->
  <div id="googleMap" style="height:400px;width:100%;"></div>
  <script>
  function myMap() {
  var myCenter = new google.maps.LatLng(50.467413, 30.473122);
  var mapProp = {center:myCenter, zoom:12, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFGMf-F7KlYYQb6LGkwhenE-sMGoyiwlM&callback=myMap"></script>

  <!-- Add an "Up Arrow" icon to the footer -->
  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Made By Shynkarenko 2017</p> 
  </footer>


  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

     // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
        });
      } // End if
    });
  })
  
  $(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
  });
  </script>

</body>
</html>