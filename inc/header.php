


<!--Header Start-->
<header id="header">
    <div class="upper-nav">
        <div class="container">
            <div class="row">
               
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="index.php"><img class="flavor-logo" src="img/logo/Color logo with background.svg" style="width: 140px; height: auto;"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
        <div class="row no-gutters w-100">
            <div class="col-6 col-lg-3 offset-3 offset-lg-0">
                <a href="index.php" title="Logo" class="logo fixed-nav-items">
                    <!--Logo Default-->
                    <img src="img/logo/Color logo with background.svg" alt="logo" class="logo-dark">
                </a>
            </div>
            <!--Nav Links-->
            <div class="col-6 d-none d-lg-flex justify-content-lg-center align-items-lg-center">
                <div class="collapse navbar-collapse" id="megaone">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li><a class="nav-link" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="about-us.php">About Us</a></li>
                        <li><a class="nav-link" href="products.php">Products</a></li>
                        <li><a class="nav-link" href="what-we-do.php">What we Do</a></li>
                        <li><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--Side Menu Button-->
            <div class="col-3 d-flex justify-content-end align-items-center">

                <!-- <ul class="shop-details fixed-nav-items">
                    <li>
                        <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                    </li>
                    <li><a href="javascript:void(0)" id="open-shop-card1"><i class="las la-shopping-bag"></i></a></li>
                </ul> -->
            </div>
        </div>
        </div>
    </nav>
    
    <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
</header>

<!--Side Nav-->
<div class="side-menu hidden">
    <div class="inner-wrapper">
        <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
        <nav class="side-nav w-100">
            <ul class="navbar-nav">
                <li><a class="nav-link scroll" href="index.php">Home</a></li>
                <li><a class="nav-link" href="about-us.php">About Us</a></li>
                <!-- <li><a class="nav-link" href="products.php">Products</a></li> -->
                <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item nav-link" href="products.php">Our Products</a>
                                <a class="dropdown-item nav-link" href="recipe.php">All Recipe</a>
                            </div>
                        </li>
                <li><a class="nav-link" href="what-we-do.php">What we Do</a></li>
                <li><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="side-footer w-100">
            <ul class="social-icons-simple">
                <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <p class="text-dark">Copyright <i class="far fa-copyright"></i> <script>document.write(new Date().getFullYear());</script> All rights reserved <br> 
                Made with <i class="far fa-heart"></i> by <a href="http://www.pixellmedia.com/" target="_blank" style="color: #b052be;">PixellMedia</a></p>
        </div>
    </div>
</div>
<a id="close_side_menu" href="javascript:void(0);"></a>
<!-- End side menu -->

<!--Header End-->