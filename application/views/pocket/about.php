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
        <section>
            <div class="heading-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>About Us</h2>
                        </div>
                       
                    </div>
            </div>
            </div>
            <?php //print_r($about);?>
            <div class="inner-banner-sec" style="background:url(<?php echo base_url().'uploads/aboutus/'.$about->aboutusbanner?>) !important;repeat:no-repeat!important;">
                <div class="container">
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        <!--about-us-sec-->
        <section>
            <div class="about-sec-inner">
                <div class="container">
                  
                    <div class="row">
                        <div class="main-title text-left">
                            <h2>About Company</h2>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="about-content">
                               <p><?php echo $about->aboutcompany;?></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-mg-5 colsm-5">
                            <div class="our-mission-block">
                            <div class="main-title text-left">
                                <h2>Our Mission <span class="icon-box"><img src="<?php echo base_url().'uploads/aboutus/'.$about->missionlogo;?>"> </span>  </h2>
                            </div>
                            <div class="our-mission">
                                <p><?php echo $about->mission;?></p>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-5 col-mg-5 colsm-5">
                            <div class="our-mission-block">
                            <div class="main-title text-left">
                                <h2>Our Vision <span class="icon-box"><img src="<?php echo base_url().'uploads/aboutus/'.$about->visionlogo;?>"></span> </h2>
                            </div>
                            <div class="our-mission">
                                <p><?php echo $about->vision;?></p>
                            </div>
                        </div>
                        </div>

                        <!--<div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="left-social-media menu-btn">
                                   <a href="https://www.linkedin.com/in/pocketfriendly-web/" class="seo-btn">Linkedin</a>
                                   <a href="https://instagram.com/pocketfriendlyweb?igshid=MmU2YjMzNjRlOQ==" class="seo-btn">Instagram</a>
                            </div>
                            <div class="share-sec">
                                <a href="#" class="whatsapp-icon"><img src="<?php //echo base_url().'pockets/assets/img/about/call-icon.png';?>"></a>
                                <a href="#" class="whatsapp-icon"><img src="<?php //echo base_url().'pockets/assets/img/about/whataspp-icon.png';?>"></a>
                            </div>
                        </div>-->

                    </div>
                </div>
            </div>
        </section>

       

        

        <section>
        <div class="bg-section counter-area pt-100 pb-70">
            <div class="container">
                <div class="row border-style">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-success"></i>
                            <h3><span class="counter"><?php echo $about->yearsexperience;?></span>+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-launch"></i>
                            <h3><span class="counter"><?php echo $about->projectsdone;?></span>+</h3>
                            <p>Projects Done</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-customer"></i>
                            <h3><span class="counter"><?php echo $about->happyclients;?></span>+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class="flaticon-team-building"></i>
                            <h3><span class="counter"><?php echo $about->expertmembers;?></span>+</h3>
                            <p>Expert Members</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


       


   

    




    <?php include_once("footer.php");?>