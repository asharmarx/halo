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
    background-color: #E5AE5B;
    background-repeat: no-repeat;
    background-position: center;
    height: 90%;
    width: 100%;
    max-height: 90%;
    padding: 0;
  }

  .overlay {
    position: absolute;
    top: 80%;
    bottom: 0;
    left: 0;
    right: 0;
    height: 90%;
    max-height: 100%;
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
    font-size: 3.8em;
  }

  .aboutText > p {
    font-size: 1.5em;
    padding: 1em;
  }

  #members{
    text-align: center;
    height: auto;
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

  #announce{
    background-color: #E5AE5B;
    height: 80%;
    width: 100%;
    padding: 0;
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


        </button>
        <a class = "navbar-brand" href = "#home"> HC </a>

      </div>   <!-- End Navbar-Header -->

      <div class = "collapse navbar-collapse" id = "myNav">
        <ul class = "nav navbar-nav navbar-right">
          <li><a href = #home> HOME </a></li>
          <li><a href = #about> ABOUT </a></li>
          <li><a href = #members> MEMBERS </a></li>
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

      </div>

    </div>
  </div>

  <div id = "members" class="container-fluid">
    <p><strong>2018 BOARD MEMBERS</strong></p>
    <?php
    $boardPhotos = glob("images/boardMembers/*.{jpeg,jpg,JPEG,JPG}", GLOB_BRACE);
    $boardPhotoCount = count($boardPhotos);
    $boardNames = array("Michelle Kim", "Josephine Kim", "David Ahn", "Ina Song", "Byunguk Isaiah Im", "Jin Young Kim", "Mikyung Lee", "Ji In Kwak", "Hyun Suk Bae");
    $indexCount = 0;
    $handle = fopen("boardDes.csv", "r");
    for ($j=0; $j < 3; $j++) {
      ?>
      <div class="row">
        <?php
        for ($i=0; $i < floor($boardPhotoCount/3); $i++) {
          ?>
          <div class="col-sm-4">
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
        }
        ?>
      </div><br><br><br>
      <?php
    }
    fclose($handle);
    ?>
  </div>

  <div id = "announce" class="container-fluid">
      <h1 class='text-center'>ANNOUNCEMENTS</h1>
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


</body>
</html>
