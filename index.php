<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cube - Home to 3D models</title>
    <link rel="icon" type="image/x-icon" href="Images/CubeLogo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Responsive.css">
    <script defer src="scripts/login-validation.js"></script>
</head>
<body>
<header>
    <img class="logo" src="https://i.imgur.com/OX4gs9X.png" alt="LOGO">
    <nav>
        <ul class="nav_links">
            <li><a href="Pages/3DModels.html">3D Models</a></li>
            <li><a href="Pages/Projects.html">Projects</a></li>
            <li><a href="Pages/SellPage.html">Sell 3D Models</a></li>
            <li><a href="Pages/About.html">About</a></li>
        </ul>
    </nav>
    <?php

    if (isset($_SESSION["userid"])) {
        ?>
            <div class="flex-row"
        <div class="loginButton">
            <form action="classes/PHP/logout.php" method="get">
                <button>Log Out</button>
            </form>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="Pages/profile.page.php">Profile settings</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        </div>
        <?php
    } else {
        ?>

        <div class="loginButton">
            <form action="Pages/LogIn.php" method="get">
                <button>Log In</button>
            </form>
        </div>
        <?php
    }
    ?>
</header>
<div>
    <img class="introImage"
         src="https://cdna.artstation.com/p/assets/images/images/054/938/218/large/leviathan-bb-.jpg?1665714043"
         alt="Intro Image">
</div>
<div class="infoContainer">
    <h1 class="info-1">3D Model Marketplace</h1>
    <p class="info-paragraphs">Choose from 1 550 000 3D models for applications such as gaming, AR/VR, advertising,
        animation, movies and 3D printing</p>
</div>
<div>
    <img class="introImage"
         src="https://cdnb.artstation.com/p/assets/images/images/054/606/185/large/kevin-jick-sci-fi-city-megastructure-kevinjick.jpg?1664919874"
         alt="Intro Image">
</div>
<div class="categories-container container-fluid">
    <ul class="row categories-list">
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names">Car</div>
            </a></li>
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names">Aircraft</div>
            </a></li>
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names">Architectual</div>
            </a></li>
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names">Animals</div>
            </a></li>
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names">Buildings</div>
            </a></li>
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names">Characters</div>
            </a></li>
        <li class="col categories-item"><a class="categories-link" href="#">
                <div class="categories-names"> Food</div>
            </a></li>
    </ul>
    <form class="searchBarSection" action="https://www.google.com">
        <input type="text" placeholder="Search 3D Models" name="search">
        <button class="SearchButton" type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- Carousel -->
<div>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdna.artstation.com/p/assets/images/images/054/008/198/large/jose-vega-building-d.jpg?1663565480"
                     alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://cdna.artstation.com/p/assets/images/images/054/008/188/large/jose-vega-building-b-copy.jpg?1663565464"
                     alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://cdnb.artstation.com/p/assets/images/images/054/008/195/large/jose-vega-building-c-copy.jpg?1663565471"
                     alt="New York" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>


<div class="container sectionProjects">
    <div class="row">
        <div class="col no-phoneDisplay">
            <div class="sectionImage">
                <img src="https://www.freeiconspng.com/uploads/laptop-png-33.png" alt="Projects">
            </div>
        </div>
        <div class="col">
            <div class="sectionText">
                <div class="container-fluid">
                    <h2>3D Projects</h2>
                    <h5>Freelance Hub</h5>
                    <p>Where people with exciting 3D Projects meet talented 3D designers</p>
                    <div class="loginButton">
                        <form action="Pages/LogIn.php" method="get">
                            <button>Learn More</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
</div>

<div class="container sectionProjects">
    <div class="row">
        <div class="col">
            <div class="sectionText">
                <div class="container-fluid">
                    <h2>Join CGTrader Community</h2>
                    <div class="row">
                        <div class="col"><h3>Galleries</h3>
                            Showcase your best renders, get feedback and recognition
                        </div>
                        <div class="col"><h3>Tutorials</h3>
                            Learn new skills and teach others
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><h3>Forum</h3>
                            Find tutorials and discuss other 3D related matters
                        </div>
                        <div class="loginButton">
                            <form action="Pages/LogIn.php" method="get">
                                <button>Join the community</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="sectionImage">
            <img src="https://assets.cgtrader.com/assets/home/cgtrader-community-705a6d514dfb8b1f48d2cb74ff0a20a0cdd8d5bbacbe38f9f2e76f277af0ced7.png"
                 alt="Community">
        </div>
    </div>

    <div>
    </div>
</div>
<footer>
    <div class="container-fluid sectionDark">
        <div class="row sectionLinks">
            <div class="col bottomLinksColumn"></div>
            <div class="col bottomLinksColumn">
                <ul class="sectionItems">
                    <li><a href="../index.html">Company</a></li>
                    <li><a href="../index.html">Blog</a></li>
                    <li><a href="../index.html">Events</a></li>
                    <li><a href="../index.html">Careers</a></li>
                </ul>
            </div>
            <div class="col bottomLinksColumn">
                <ul class="sectionItems">
                    <li><a href="../index.html">Buy 3D Models</a></li>
                    <li><a href="../index.html">Freelance 3D Projects</a></li>
                    <li><a href="../index.html">Sell 3D Models</a></li>
                    <li><a href="../index.html">Discounts</a></li>
                </ul>
            </div>
            <div class="col bottomLinksColumn">
                <ul class="sectionItems">
                    <li><a href="../index.html">Help Center</a></li>
                    <li><a href="../index.html">Contact Us</a></li>
                    <li><a href="../index.html">Community</a></li>
                    <li><a href="../index.html">Forum</a></li>
                </ul>
            </div>
            <div class="col bottomLinksColumn"></div>
        </div>
    </div>
</footer>
</body>
</html>