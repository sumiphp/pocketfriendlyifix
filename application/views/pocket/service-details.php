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
                            <h2>Service Detalis</h2>
                        </div>
                       
                    </div>
            </div>
            </div>
            <div class="service-detail-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-mg-5 col-sm-5">
                            <div class="right-banner-content">
                                <h2>Website Enhancement Package</h2>
                                <p>Enhance your website with our professional single-page package</p>
                                <h3 class="small_gradient_Text">For just 99 AED</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-mg-6 col-sm-6">

                        </div>
                     
                    </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        
        <section>
            <div class="service-details-page">
                <div class="container">
                   <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="side-bar-sec">
                            <!-- SIDEBAR MENU -->
                            <div class="simlebar-sc" data-simplebar>
                              <ul class="sidebar-menu tf">
                                <li class="sidebar-submenu active">
                                    <a href="#" class="sidebar-menu-dropdown">
                                        <span class="small_gradient_Text">Category</span>
                                        <div class="dropdown-icon">
                                            <i class='bx bxs-down-arrow'></i>
                                        </div>
                                    </a>
                                 
                                    <ul class="sidebar-menu-dropdown-content">
                                        <?php 
                                        
                                        //print_r($servicedetails);
                                        
                                        foreach($servicedetails as $sd){ ?>
                                            <li>
                                            <a href="#">
                                               <?php echo $sd['subcategoryname'];?>
                                            </a>
                                        </li>


                                       <?php } ?>
                                        <!--<li>
                                            <a href="#">
                                                Logo Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Protfolio Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Website Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Reels
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Video Editing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Catelogue Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Business Card Design
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Social media Poster
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Letter Head Design
                                            </a>
                                        </li>-->


                                    </ul>
                                </li>
                               </ul>
                                 </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="package-details">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="bg-box">
                                        <div class="icon-block">
                                            <img src="<?php echo base_url().'pockets/assets/img/icon/icon-5.png';?>"/>
                                        </div>
                                        <div class="content-block">
                                            <h4>Branding</h4>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <span class="smallText">For just </span>
                                            <h6>99 AED</h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="bg-box">
                                        <div class="icon-block">
                                            <img src="<?php echo base_url().'pockets/assets/img/icon/icon-5.png';?>"/>
                                        </div>
                                        <div class="content-block">
                                            <h4>Branding</h4>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <span class="smallText">For just </span>
                                            <h6>99 AED</h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="bg-box">
                                        <div class="icon-block">
                                            <img src="<?php echo base_url().'pockets/assets/img/icon/icon-5.png';?>"/>
                                        </div>
                                        <div class="content-block">
                                            <h4>Branding</h4>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <span class="smallText">For just </span>
                                            <h6>99 AED</h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="bg-box">
                                        <div class="icon-block">
                                            <img src="<?php echo base_url().'pockets/assets/img/icon/icon-5.png';?>"/>
                                        </div>
                                        <div class="content-block">
                                            <h4>Branding</h4>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>
                                            <span class="smallText">For just </span>
                                            <h6>99 AED</h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                   </div>

                  

                 
                </div>
            </div>
        </section>

        <section>
            <div class="bottom-slider-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title text-left">
                            <h2>Take Step Forward with US</h2>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12 col-xxl-12 ">
                            <div class="service-details">
                                <div class="portfolio-slider owl-carousel owl-theme">
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'pockets/assets/img/service/icon-slider-1.png';?>" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <h4>Latest Technology</h4>
                                            <p>
                                                Restaurants range from inexpensive and informal lunching or dining places 
                                                catering to people working nearby, with modest food served in simple settings at low prices.
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn">Enquiry</a>
                                        </div>
                                        </div>
                                    </div>
    
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'pockets/assets/img/service/icon-slider-2.png';?>" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <h4>Latest Technology</h4>
                                            <p>
                                                Restaurants range from inexpensive and informal lunching or dining places 
                                                catering to people working nearby, with modest food served in simple settings at low prices.
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn">Enquiry</a>
                                        </div>
                                        </div>
                                    </div>
    
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'pockets/assets/img/service/icon-slider-1.png';?>" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <h4>Latest Technology</h4>
                                            <p>
                                                Restaurants range from inexpensive and informal lunching or dining places 
                                                catering to people working nearby, with modest food served in simple settings at low prices.
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn">Enquiry</a>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'pockets/assets/img/service/icon-slider-2.png';?>" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content service-details">
                                            <h4>Latest Technology</h4>
                                            <p>
                                                Restaurants range from inexpensive and informal lunching or dining places 
                                                catering to people working nearby, with modest food served in simple settings at low prices.
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn">Enquiry</a>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'pockets/assets/img/service/icon-slider-2.png';?>" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <h4>Latest Technology</h4>
                                            <p>
                                                Restaurants range from inexpensive and informal lunching or dining places 
                                                catering to people working nearby, with modest food served in simple settings at low prices.
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="#" class="default-btn">Enquiry</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
                    </div>
                </div>
            </div>
        </section>     

    

        <?php include_once("footer.php");?>