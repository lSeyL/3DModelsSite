<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cube - Log In </title>
  <link rel="icon" type="image/x-icon" href="https://i.imgur.com/GQ0ZIWh.png">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="../CSS/Style.css">
  <link rel="stylesheet" href="../CSS/Responsive.css">
</head>
<body>
<header>
  <a href="../index.php">
    <img class="logo" src="https://i.imgur.com/OX4gs9X.png" alt="LOGO">
  </a>
  <nav>
    <ul class="nav_links">

    </ul>
  </nav>
  <div class="loginButton">
    <form action="../index.php" method="get">
      <button>Home</button>
    </form>
  </div>
</header>

<div class="backgroundImage"></div>

<div class="backgroundText loginFormBackground">
  <form class="loginForm" action="../Classes/PHP/signup-inc.php" method="post">
    <div class="container-fluid">
      <!-- <label for="uname"><b>Username</b></label> -->
      <input type="text" placeholder="Enter Your Username" name="uname" required>
      <!-- <label for="email"><b>E-Mail</b></label> -->
      <input type="text" placeholder="Enter Your E-mail Address" name="email" required>
       <!--  <label for="psw"><b>Password</b></label> -->
       <input type="password" placeholder="Enter Your Password" name="psw" required>
       <!-- <label for="pswRepeat"><b>Repeat Password</b></label> -->
       <input type="password" placeholder="Enter Your Password" name="pswRepeat" required>
        <button class="loginBtn" type="submit" name="submit">Register</button>

       <!-- <span class="psw"> <a href="#">Forgot password?</a></span> -->
    </div>
  </form>
</div>
<footer>
  <div class="container-fluid sectionDark">
    <div class="row sectionLinks">
      <div class="col bottomLinksColumn"></div>
      <div class="col bottomLinksColumn">
        <ul class="sectionItems">
          <li><a href="../index.php">Company</a></li>
          <li><a href="../index.php">Blog</a></li>
          <li><a href="../index.php">Events</a></li>
          <li><a href="../index.php">Careers</a></li>
        </ul>
      </div>
      <div class="col bottomLinksColumn">
        <ul class="sectionItems">
          <li><a href="../index.php">Buy 3D Models</a></li>
          <li><a href="../index.php">Freelance 3D Projects</a></li>
          <li><a href="../index.php">Sell 3D Models</a></li>
          <li><a href="../index.php">Discounts</a></li>
        </ul>
      </div>
      <div class="col bottomLinksColumn">
        <ul class="sectionItems">
          <li><a href="../index.php">Help Center</a></li>
          <li><a href="../index.php">Contact Us</a></li>
          <li><a href="../index.php">Community</a></li>
          <li><a href="../index.php">Forum</a></li>
        </ul>
      </div>
      <div class="col bottomLinksColumn"></div>
    </div>
  </div>
</footer>
</body>
</html>