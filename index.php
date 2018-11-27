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
    background-image: url("images/IMG_7048");
    height: 90%;
    width: 100%;
    max-height: 90%;
    padding: 0;
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

        </button>
        <a class = "navbar-brand" href = "#home"> HC </a>

      </div>   <!-- End Navbar-Header -->

      <div class = "collapse navbar-collapse" id = "myNav">
        <ul class = "nav navbar-nav navbar-right">
          <li><a href = #home> HOME </a></li>
          <li><a href = #about> ABOUT </a></li>
          <li><a href = #contact> CONTACT </a></li>
        </ul>
      </div> <!-- End Collapse -->

    </div>  <!-- End Container-Fluid -->
  </nav> <!-- End Navbar-->

  <div id = "home" class="container-fluid text-center">

    <p>HALO</p>
    <h3>Humantarian Aid and Love Organization</h3>

  </div>

  <div id="about" class="container-fluid">

  </div>


</body>





</html>
