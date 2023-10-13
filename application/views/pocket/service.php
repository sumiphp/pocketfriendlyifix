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
                            <h2><?php echo $service->maintitle;?></h2>
                        </div>
                       
                    </div>
            </div>
            </div>
            <div class="inner-service-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-mg-6 col-sm-6">

                        </div>
                        <div class="col-lg-5 col-mg-5 col-sm-5">
                            <div class="left-banner-content">
                                <h2><?php echo $service->subtitle;?></h2>
                                <p><?php echo $service->description;?></p>
                            </div>
                        </div>
                        <div class="share-sec-position">
                            <a href="#" class="whatsapp-icon"><img src="<?php echo base_url().'pockets/assets/img/about/call-icon.png';?>"></a>
                            <a href="#" class="whatsapp-icon"><img src="<?php echo base_url().'pockets/assets/img/about/whataspp-icon.png';?>"></a>
                        </div>
                    </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        
        <section>
            <div class="hosting-services-sec">
                <div class="container">
                    <div class="row">

                    <?php foreach($result as $res){?>
                        <div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php echo base_url().'assets/img/hos-icon/'.$res['categoryimage'];?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="#"><?php echo $res['categoryname'];?></a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description"><?php echo $res['categorydescription'];?></p>
                                            </div>
                                        </div>
                                        <a href="service-details.php" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <?php } ?>


                        <!--<div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover ">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'pockets/assets/img/service/icon-2.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="#">SEO</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">We provide Tailored optimization plans to improve online visibility and rankings, driving organic traffic growth.</p>
                                            </div>
                                        </div>
                                        <a href="service-details.php" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>-->
                       

                    </div>

                    <!--<div class="row row-padding">
                        <div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'pockets/assets/img/service/icon-3.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="#">Advertise</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">We are experts in developing highly effective advertising strategies to elevate your brand's prominence.</p>
                                            </div>
                                        </div>
                                        <a href="service-details.php" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'pockets/assets/img/service/icon-4.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="#">Digital Marketing</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Our digital marketing services drive growth through targeted strategies, enhancing online visibility, engaging audiences, and boosting conversions effectively and affordably.</p>
                                            </div>
                                        </div>
                                        <a href="service-details.php" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                       

                    </div>-->

                    <!--<div class="row row-padding">
                        <div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'pockets/assets/img/service/icon-5.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="#">Social Media</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Unlock your brand's potential with PocketFriendlyWeb's social media expertise. Elevate engagement, drive growth, and foster connections that matter.</p>
                                            </div>
                                        </div>
                                        <a href="service-details.php" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'pockets/assets/img/service/icon-6.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title secondary-title"><a href="#">Web Application</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Experience the power of tailored web applications to enhance your online presence and boost your business.

                                                </p>
                                            </div>
                                        </div>
                                        <a href="service-details.php" class="plan-btn Mtop-20">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                       

                    </div>-->
                </div>
            </div>
        </section>

        <section>
            <div class="our-services-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="our-service-block-img">
                                <img src="<?php echo base_url().'uploads/service-img.png';?>">
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </section>

        <section>
            <div class="three-plan-sec bg-section pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="inner-block">
                                <div class="icon-block">
                                    <img src="<?php echo base_url().'pockets/assets/img/service/plan-icon.png';?>">
                                </div>
                                <div class="content-block">
                                    <h4>Planning</h4>
                                    <p>Strategize your success with meticulous planning, setting the foundation for your project's journey.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="inner-block">
                                <div class="icon-block">
                                    <img src="<?php echo base_url().'pockets/assets/img/service/design-icon.png';?>">
                                </div>
                                <div class="content-block">
                                    <h4>Designing</h4>
                                    <p>Crafting the future with innovative designs that captivate and inspire.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="inner-block">
                                <div class="icon-block">
                                    <img src="<?php echo base_url().'pockets/assets/img/service/delivary-icon.png';?>">
                                </div>
                                <div class="content-block">
                                    <h4>Delivery</h4>
                                    <p>Bringing your vision to life, on time and target, with seamless project delivery.</p>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
       

        

        <?php include_once("footer.php");?>