<?php include_once("header.php");?>

    <body>
        <!-- Start Preloader -->
        <div class="preloader">
            <div class="preloader-wave"></div>
        </div>
        <!-- End Preloader -->

        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
                <a href="index.php" class="logo">
                    <img src="<?php echo base_url().'pockets/assets/img/logo.png';?>" class="logo-one" alt="Logo">
                    <img src="<?php echo base_url().'pockets/assets/img/logo.png';?>" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav top-nav">
                <div class="container">
                <?php include('menu.php');?>
                </div>
            </div>
        </div>

      

        <!-- Start home page Area -->
        <div class="inner-blog-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="blog-person">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/blog-img.png';?>">
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <div class="blog-sec">
                            <h3>Marvin McKinney</h3>
                            <p>The Walt Disney Company</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                        <div class="icon-sec">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/facebook.png';?>">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/twitter.png';?>">
                            <img src="<?php echo base_url().'pockets/assets/img/blog/linked-in.png';?>">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="artical-content">
                            <h2 class="text-center">Most Recent Articals</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

                        </div>
                    </div>
                </div>

                <div class="blog-aritical-sec">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-img">
                                <img src="<?php echo base_url().'pockets/assets/img/blog/blog-inner.jpg';?>">
                            </div>
                            <div class="blog-content-inner">
                                <div class="blog-author-img">
                                    <img src="<?php echo base_url().'pockets/assets/img/blog/blog-icon.png';?>"/>

                                </div>
                                <div class="blog-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            <p class="date">November 28, 2023</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-img">
                                <img src="<?php echo base_url().'pockets/assets/img/blog/blog-inner.jpg';?>">
                            </div>
                            <div class="blog-content-inner">
                                <div class="blog-author-img">
                                    <img src="<?php echo base_url().'pockets/assets/img/blog/blog-icon.png';?>"/>

                                </div>
                                <div class="blog-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            <p class="date">November 28, 2023</p>
                                </div>

                            </div>

                        </div>
                        </div>
                        <div class="row row-padding">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-img">
                                <img src="<?php echo base_url().'pockets/assets/img/blog/blog-inner.jpg';?>">
                            </div>
                            <div class="blog-content-inner">
                                <div class="blog-author-img">
                                    <img src="<?php echo base_url().'pockets/assets/img/blog/blog-icon.png';?>"/>

                                </div>
                                <div class="blog-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            <p class="date">November 28, 2023</p>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-img">
                                <img src="<?php echo base_url().'pockets/assets/img/blog/blog-inner.jpg';?>">
                            </div>
                            <div class="blog-content-inner">
                                <div class="blog-author-img">
                                    <img src="<?php echo base_url().'pockets/assets/img/blog/blog-icon.png';?>"/>

                                </div>
                                <div class="blog-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            <p class="date">November 28, 2023</p>
                                </div>

                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       

        
	
		<!-- End home Area -->


        <?php include_once("footer.php");?>