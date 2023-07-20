<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gallery | Jaisri</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/logo/favicon.png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">   
    
</head>

<body>
    
<div id="main-wrapper">
   
    <!-- Header -->
    <?php include('includes/header.php'); ?>
    <!-- Header ends-->
    
     <!--Breadcrumb Section Start-->
     <div class="breadcrumb-section section bg-image pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45" data-bg="assets/images/bg/bread-crumb-1.webp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="breadcrumb-title">
                        <h2>Gallery</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->
    
    <!--Portfolio Wide section start-->
    <div class="portfolio-wide section bg-gray pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container-fluid">
            <div class="row align-items-center mb-45">
                <div class="col-12">
                    <div class="filter-menu">
                        <ul class="gallery__menu text-center">
                            <li><button data-filter="*"  class="is-checked"><span class="filter-text">All</span></button></li>
                            <li><button data-filter=".cat--r" class=""><span class="filter-text">Residential</span></button></li>
                            <li><button data-filter=".cat--c" class=""><span class="filter-text">Commercial</span></button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row masonry__wrap">
               <div class="resizer col-1"></div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--c">
                   <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image1.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 01</a></h4>
                                <span class="category"><a href="#">Commercial</a></span>
                            </div>
                        </div>
                    </div>
               </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--r">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image2.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 02</a></h4>
                                <span class="category"><a href="#">Residential</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--c">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image3.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 03</a></h4>
                                <span class="category"><a href="#">Commercial</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--c">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image4.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 04</a></h4>
                                <span class="category"><a href="#">Commercial</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--r">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image5.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 05</a></h4>
                                <span class="category"><a href="#">Residential</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--c">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image6.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 06</a></h4>
                                <span class="category"><a href="#">Commercial</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--c">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image7.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 07</a></h4>
                                <span class="category"><a href="#">Commercial</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--c">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image8.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 08</a></h4>
                                <span class="category"><a href="#">Commercial</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--r">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image9.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 09</a></h4>
                                <span class="category"><a href="#">Residential</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6 cat--r">
                    <div class="project-item mb-30">
                        <div class="daHover project pl-0 pr-0">
                            <a href="#" class="img"><img src="assets/images/gallery/image10.jpeg" alt=""></a>
                            <div class="daHoverElem"></div>
                            <div class="content content-center">
                                <h4 class="title"><a href="#">Project 10</a></h4>
                                <span class="category"><a href="#">Residential</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Portfolio Wide section end-->
    
    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- Footer Ends -->

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>


</html>