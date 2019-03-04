<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="theme-color" content="#9c27b0" />
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>TechoArena 2K19</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <!-- Navber Start -->

    <div class="navbar-fixed">
      <nav >
      <div class="nav-wrapper purple ">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
        <a href="?page=homepage" class="brand-logo white-text"><img src="images/head_logo.png" height="60px" alt=""></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="?page=homepage" class="white-text"> Home</a></li>
          <li><a href="?page=events" class="white-text "> Events</a></li>
          <li><a href="?page=facultyCommittee" class="white-text t">Faculty Committee</a></li>
          <li><a href="?page=studentCommittee" class="white-text">Student Committee</a></li>
          <li><a href="?page=register" class="white-text">Register</a></li>
          <li><a href="?page=contact"  class="white-text ">Contact Us</a></li>
        </ul>
      </div>
    </nav>
    </div>

    <ul id="slide-out" class="sidenav white">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="images/bg.jpg">
          </div>
          <a href="#user"><img class="circle" src="images/logo.png"></a>
          <a href="#name"><span class="white-text name">GCOE</span></a>
          <a href="#email"><span class="white-text email">Jalgaon Maharashtra</span></a>
        </div>
      </li>
      <li><a href="?page=register"  class="waves-effect waves-purple"><i class="material-icons red-text">account_circle</i>Register</a></li>
      <li><a href="?page=homepage" class="waves-effect waves-purple "> <i class="material-icons green-text">home</i> Home</a></li>
      <li><a href="?page=events"  class="waves-effect waves-purple"><i class="material-icons purple-text">casino</i>Events</a></li>
      <li><a href="?page=facultyCommittee"  class="waves-effect waves-purple"><i class="material-icons red-text">business_center</i>Faculty Committee</a></li>
      <li><a href="?page=studentCommittee"  class="waves-effect waves-purple"><i class="material-icons green-text">account_circle</i>Student Committee</a></li>
      <li>
        <div class="divider"></div>
      </li>
      <li><a class="subheader">About</a></li>
      <li><a class="waves-effect waves-purple" href="?page=contact"><i class="material-icons yellow-text">phone</i>Contact Us</a></li>
      <li><a class="waves-effect waves-purple" target="_blank" href="https://www.gcoej.ac.in/"><i class="material-icons orange-text">account_balance</i>GCOEJ Website</a></li>
    </ul>

<!-- Navber end -->
    <?php
        if (isset($_GET['page']) ) {
            $page = 'pages/'.$_GET['page'].'.php';
            if (!@include($page)) {
                include('pages/error.php');
            }
        } else {
            include('pages/homepage.php');
        }
    ?>

  <div id="script_enable"></div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>


  </body>
</html>
