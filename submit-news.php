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
    <link rel="icon" href="img/core-img/favicon.ico">

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

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Submit News</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Submit News</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Video Submit Area Start ##### -->
    <div class="video-submit-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Video Submit Content -->
                    <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Submit your news</h5>
                        </div>

                        <div class="video-info mt-30">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="upload-file">Upload Your File</label>
                                    <input type="file" class="form-control-file" id="upload-file">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">News Title</label>
                                    <input type="text" class="form-control" name="video-name">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">News Description</label>
                                    <textarea name="video-description" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">News Category</label>
                                    <select name="video-catagory" class="form-control">
                                        <option value="kejadian">Kejadian</option>
                                        <option value="kegiatan">Kegiatan</option>
                                        <option value="kuliner">Kuliner</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Age</label>
                                    <input type="text" class="form-control" name="age">
                                </div>
                                <button type="submit" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i> Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Video Submit Area End ##### -->

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