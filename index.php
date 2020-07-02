<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Semarang SIP (Sistem Informasi Publik)</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/icon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.php" class="nav-brand"><img src="img/core-img/logosipsmall.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="archive.php">News</a></li>
                                    <!--<li><a href="profile.html">Profile</a></li>-->
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>


                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.php" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="login.php" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            <a href="submit-news.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit News</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/banjir.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">
                                <script>    
                                    var d = new Date();
                                     
                                    var date = d.getDate();
                                    var month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
                                    var year = d.getFullYear();
                                     
                                    var dateStr = date + "/" + month + "/" + year;
                                    document.write(dateStr);
                                    </script></a>
                                <a href="archive.php">Kejadian</a>
                            </div>
                            <a href="single-post.php" class="post-title" data-animation="fadeInUp" data-delay="300ms">Banjir di Sejumlah Wilayah Semarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/kegiatan.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">
                                    <script>    
                                        var d = new Date();
                                         
                                        var date = d.getDate();
                                        var month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
                                        var year = d.getFullYear();
                                         
                                        var dateStr = date + "/" + month + "/" + year;
                                        document.write(dateStr);
                                        </script></a>
                                <a href="archive.php">Kegiatan</a>
                            </div>
                            <a href="single-post.php" class="post-title" data-animation="fadeInUp" data-delay="300ms">Pos Pantau Pembatasan Kegiatan Masyarakat (PKM) Diterapkan di Kota Semarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/kuliner.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">
                                    <script>    
                                        var d = new Date();
                                         
                                        var date = d.getDate();
                                        var month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
                                        var year = d.getFullYear();
                                         
                                        var dateStr = date + "/" + month + "/" + year;
                                        document.write(dateStr);
                                    </script></a>
                                <a href="archive.php">Kuliner</a>
                            </div>
                            <a href="single-post.php" class="post-title" data-animation="fadeInUp" data-delay="300ms">Kuliner Khas Semarang yang Wajib dicoba</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Popular</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                       
                    </div>
                    <div class="post-content">
                        <!--
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>-->
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add.png" alt=""></a>
            </div>
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        
                        <div class="post-content">
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kejadian</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                     
                                    </div>
                                    
                                </div>
                                <!-- Post Share Area -->
                               <!-- <div class="post-share-area d-flex align-items-center justify-content-between">
                                        <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                  </div>-->
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                           
                                        </div>
                                        <div class="post-content">
                                           
                                            <div class="post-meta d-flex">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            
                                        </div>
                                        <div class="post-content">
                                            
                                            <div class="post-meta d-flex">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kuliner</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            
                        </div>
                        <div class="post-content">
                          
                            <div class="post-meta d-flex">
                               
                            </div>
                        </div>
                    </div>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            
                        </div>
                        <div class="post-content">
                            <!--<a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>-->
                            <div class="post-meta d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Kegiatan -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kegiatan</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                
                            </div>
                            
                        </div>
                       
                    </div>

                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                
                            </div>
                            
                        </div>
                        <!-- Post Share Area -->
                        <!--
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            
                            <div class="post-meta pl-3">
                                
                            </div>
                          
                        </div>-->
                    </div>

                    
                </div>

                <div class="row">
                    <!-- Single Blog Post -->
                    <div class="col-12 col-lg-6">
                        <div class="single-blog-post d-flex style-3 mb-30">
                            <div class="post-thumbnail">
                               
                            </div>
                            <div class="post-content">
                                
                                <div class="post-meta d-flex">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
               
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
            </div>
            <br>
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row"> 
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    
                </div>
            </div>
        </div>
        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">SemarangSIP</a>
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                           
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>