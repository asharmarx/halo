<!--  Author: Aman Sharma -->
<!--  asharmarx.github.io -->
<!DOCTYPE html>
<html lang="en">
<head>

  <title>HALO Club</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/logo_background_pic/sun-logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="smooth_scroll.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">


  <style media="screen">

  html, body {
    height: 100%;
  }
  body{
    background-color: #2D2D30;
  }
  body::-webkit-scrollbar {
    display: none;
  }

  .navbar {
    margin-bottom: 0;
    background-color: transparent !important;
    border: 0 !important;
    font-size: 0.9em !important;
    font-weight: bold;
    letter-spacing: 4px;
    padding-right: 10px;
  }

  /* Add  color to all navbar links */
  .navbar li a, .navbar .navbar-brand {
    color: white !important;
  }

  /* On hover, the links will turn white */
  .navbar-nav li a:hover {
    color: #FFE0B2 !important;
  }

  /* The active link */
  .navbar-nav li.active a {
    color: white !important;
    background-color: transparent !important;
    border-bottom: 0.2em solid red !important;
  }

  .navbar-default .navbar-toggle {
    border-color: transparent;
  }


  #home {
    height: 80%;
    max-height: 100%;
    width: 100%;
    background-color: #5B92E5;
    font-family: 'Black Han Sans', sans-serif;
  }

  #home > p {
    margin-top: 15%;
    padding: 0;
    font-size: 9em;
    color: white;
    letter-spacing: 0.12em;
  }

  #home > h3 {
    padding: 0;
    margin-top: -3.5%;
    font-size: 1.25em;
    margin-left: -1%;
    color: white;
  }

  #about{
    background-image: url("images/IMG_7048.jpeg");
    background-size: contain;
    background-color: #E5AE5B;
    background-repeat: no-repeat;
    background-position: center;
    height: 115%;
    width: 100%;
    max-height: 115%;
    padding: 0;
  }

  .overlay {
    position: absolute;
    top: 80%;
    bottom: 0;
    left: 0;
    right: 0;
    height: 115%;
    max-height: 115%;
    opacity: 0;
    transition: 0.6s ease;
    background-color: #E5AE5B;
  }

  .overlay:hover{
    opacity: 1;
  }

  .aboutText {
    font-family: 'Black Han Sans', sans-serif;
    font-weight: lighter;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }

  .aboutText > h1 {
    font-size: 2.5vw;
  }

  .aboutText > p {
    font-size: 1.2vw;
    padding: 0.8vw;
  }

  .contactInfo > .text-center {
    padding: 0;
    margin-bottom: -2.5%;
    font-size: 1.2em;
  }

  .collapse > p{
    margin: 2% 0 0 0;
    font-size: 2.0vw;
  }

  #members{
    text-align: center;
    height: auto;
    max-height: auto;
    background-color: #5B92E5;
  }

  #members > p{
    margin-top: 2%;
    text-align: center;
    font-size: 2.5em;
    color: white;
    font-family: 'Black Han Sans', sans-serif;
  }

  .row > p {
    display: block;
    margin-top: 5%;
    color: white;
  }

  #photos{
    background-color: #E5AE5B;
    width: 100%;
    padding: 0;
  }

  .mySlides {
    display: none;
    opacity: 1 !important;
  }

  .mySlides>img {
    vertical-align: middle;
    width: 100%;
  }

  .slideshow {
    max-height: auto;
    max-width: 70%;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 1.5em;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  .prev:active, .next:active, .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }


  #announce{
    width: 100%;
    padding: 0;
    background-color: #5B92E5;
    height: 80%;
    color: white;
    font-family: 'Black Han Sans', sans-serif;
  }

  #announce > h1{
    margin-top: 1%;
    margin-left: 1em;
    font-size: 3.5em;
  }

  #announce > p {
    margin-left: 1em;
    margin-top: 3%;
    line-height: 1.5em;
    font-size: 1.5em;
  }
  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class = "navbar navbar-default navbar-fixed-top">
    <div class = "container-fluid">
      <div class = "navbar-header">

        <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNav">

          <span class = "icon-bar"></span>
          <span class = "icon-bar"></span>
          <span class = "icon-bar"></span>
          <span class = "icon-bar"></span>
          <span class = "icon-bar"></span>


        </button>
        <a class = "navbar-brand" href = "#home"> HC </a>

      </div>   <!-- End Navbar-Header -->

      <div class = "collapse navbar-collapse" id = "myNav">
        <ul class = "nav navbar-nav navbar-right">
          <li><a href = #home> HOME </a></li>
          <li><a href = #about> ABOUT </a></li>
          <li><a href = #members> MEMBERS </a></li>
          <li><a href = #photos> PHOTOS </a></li>
          <li><a href = #announce> ANNOUNCEMENTS </a></li>

        </ul>
      </div> <!-- End Collapse -->

    </div>  <!-- End Container-Fluid -->
  </nav> <!-- End Navbar-->

  <div id = "home" class="container-fluid text-center">

    <p>HALO</p>
    <h3>Humantarian Aid and Love Organization</h3>

  </div>

  <div id="about" class="container-fluid">
    <div class="overlay">
      <div class="aboutText">
        <h1>VISION</h1>
        <p>HALO is a club dedicated to sending medicines to impoverished countries
        </p>

        <h1>MISSION</h1>
        <p>Our HALO Club is a nonprofit organization that supplies infant formulas, hygiene products for women, and medical supplies for public health to poor countries. In many countries, there is still a lack of disinfectants and antibiotics to cure inflammation. Therefore, high school students and adult members of this club will fundraise money by using coin banks and will participate in health seminars and events in our community. Students in grades 8th-12th interested in HALO CLUB can work together and volunteers have the opportunity to receive Presidential and Leadership awards
        </p>

        <div class="contactInfo">
          <h1>Contact</h1>
          <p class="text-center"><strong>Byunguk Isaiah Im</strong></p><br>
          <a href="#demo" data-toggle="collapse">
            <img src="images/contact/e.jpeg" class="img-circle person" alt="Random Name" width="226" height="226">
          </a>
          <div id="demo" class="collapse">
            <p>Director</p>
            <p>714-889-8432</p>
          </div>

        </div>

      </div>

    </div>
  </div>

  <div id = "members" class="container-fluid">
    <p><strong>2018 BOARD MEMBERS</strong></p>
    <?php
    $boardPhotos = glob("images/boardMembers/*.{jpeg,jpg,JPEG,JPG}", GLOB_BRACE);
    $boardPhotoCount = count($boardPhotos);
    $boardNames = array("Michelle Kim", "Josephine Kim", "David Ahn", "Ina Song", "Jin Young Kim", "Mikyung Lee", "Ji In Kwak", "Hyun Suk Bae");
    $indexCount = 0;
    $handle = fopen("boardDes.csv", "r");
    for ($j=0; $j < 3; $j++) {
      ?>
      <div class="row">
        <?php
        for ($i=0; $i < floor($boardPhotoCount/2); $i++) {
          ?>
          <div class="col-sm-3">
            <img src=<?php echo "$boardPhotos[$indexCount]"; ?> class="img-circle person" alt="Random Name" width="255" height="255">
            <p class="text-center" style="color:white; margin-top:2%;"><strong><?php echo "$boardNames[$indexCount]"; ?></strong></p>

            <?php
            $data = fgetcsv($handle, 1000, ",");
            $num = count($data);
            for ($c=0; $c < $num; $c++) {
              echo "<p style=\"color:white; margin-top:2%;\">". $data[$c] . "</p>\n";
            }
            ?>
          </div>
          <?php
          $indexCount += 1;
          if ($indexCount >= $boardPhotoCount) {
            break 2;
          }
        }
        ?>
      </div><br><br><br>
      <?php
    }
    fclose($handle);
    ?>
  </div>

  <div id = "photos" class="container">
    <div class="slideshow">
      <?php
      $imgFiles = glob("images/*.{jpg,jpeg,JPEG,JPG}", GLOB_BRACE);
      $numFiles = count($imgFiles);
      for($i = 0; $i < $numFiles; $i++):
        $currentImage = $imgFiles[$i];
        $currentimgNumber = $i + 1;
        ?>
        <div class="mySlides fade">
          <div class="numbertext"><?php echo "$currentimgNumber/$numFiles";?>
          </div>
          <img src= <?php echo "\"$currentImage\"";?> alt="Random Name" style="width:100%">
        </div>
        <?php
      endfor; ?>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div> <!--  end slideshow cointainer -->

  <script type="text/javascript">

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
</script>

<div id = "announce" class="container-fluid">
  <h1 class="text-center">ANNOUNCEMENTS</h1>
  <div class="announceText">
    <p>
      <?php
      $announceFile = fopen("announcements.txt","r");
      while(!feof($announceFile)) {
        echo fgets($announceFile) . "<br>";
      }
      fclose($announceFile);
      ?>
    </p>
  </div>
</div>


</body>





</html>
