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
                    <img src="<?php echo base_url().'assets/img/logo.png';?>" class="logo-one" alt="Logo">
                    <img src="<?php echo base_url().'assets/img/logo.png';?>" class="logo-two" alt="Logo">
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
            <div class="home-banner-sec bg-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 ">
                            <div class="start-business">
                                <h2>START <br> YOUR BUSINESS</h2>
                                <p>For AED $99</p>
                                <img src="<?php echo base_url().'assets/img/home-img.png';?>">

                            </div>
                         </div>
                         <div class="col-md-6 col-lg-6 ">
                            <div class="business-form">
                            <span id="enqmsg" style="font-color:#fff;font-weight:bold;"></span>
                                <div class="form-field-section">
                                    
                                    <form class="row" method="post" id="frm"  action="<?php echo base_url().'Pocket/enquiryprocess';?>">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="phone" name="phone" maxlength="12" placeholder="Phone" required="">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <label class="label-box">WHAT IS THE NATURE OF YOUR BUSINESS ?*</label>
                                            <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="natureofbusiness" required="">
                                        </div>
                                    </div>
                                        
                                        <div class="col-md-12">
                                                <label class="label-box">HOW QUICKLY WOULD YOU LIKE TO SET UP YOUR BUSINESS WEBSITE ?*</label>
                                                <div class="input-group mb-3">
                                                <input type="text" class="form-control" required="" name="businesswebsiteduration" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-box">CHOOSE YOUR PACKAGE</label>
                                            <div class="input-group mb-3">
                                            <select name="package" id="package" required>
                                                <option value="">Select</option>
                                                <?php foreach($resultsub as $res){?>
                                              <option value="<?php echo $res['subcategoryid'];?>"><?php echo $res['subcategoryname'];?></option>
                                              <?php } ?>
                                             
                                            </select>
                                        </div>
                                    </div>
                                       
                                       
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <textarea class="textarea" id="note" name="note" rows="4" cols="50" placeholder="Note"></textarea>
                                            </div>
                                        </div>
                                      
                                  
    
                                    <div class="col-md-12 consent-sec">
                                        <label class="label-box">CONSENT</label>
                                        <p>By checking the box, you consent to POCKET FRIENDLY sending you emails about its news updates, running offers, and promotional material</p>
                                    </div>

                                    <div class="col-md-12 col-lg-12  form-btn">
                                        <button type="submit" class="btn-submit">Submit</button>
                                    </div>
                                    </form>
                                  
    
                                </div>
                            </div>
                         </div>

                </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->

        <!--about-us-sec-->
        <section>
            <div class="about-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>About Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-img-sec">
                                <img src="<?php echo base_url().'pockets/assets/img/gif.gif';?>" class="w-100">
                            </div>
                            <div class="about-img-sec taC">
                                <img src="<?php echo base_url().'pockets/assets/img/about-img2.png';?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-content">
                               <p><?php echo $about->aboutcompany;?></p>
                            
                            <h2>Distinguishing Qualities that Set Us Apart</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 about-list-sec">
                                    <p><i class='bx bxs-chevrons-right'></i> Excellence</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Innovation</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Affordability</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Expertise </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 about-list-sec">
                                    <p><i class='bx bxs-chevrons-right'></i> Effectiveness</p>
                                    <p><i class='bx bxs-chevrons-right'></i> Reliability </p>
                                    <p><i class='bx bxs-chevrons-right'></i> Professionalism</p>
                                </div>
                            </div>
                          
                            <div class="primary-btn mt-3">
                                <a href="#" class="default-btn">More</a>
                            </div>
                          
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Service-us-sec-->
        <section>
            <div class="service-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Service</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-content">
                                <h2>Get the Families to Reach Your Business</h2>
                                <h3 class="small_gradient_Text">ADE 99*</h3>
                                <h1 class="gradient_Text">Only Web design Development & Implement</h1>
                                
                            </div>
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="service-img taC">
                                <img src="<?php echo base_url().'assets/img/service-img.png';?>" >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="bg-section icon-services">
                <div class="container">
                <div class="row">
                    <?php foreach($resultsub as $res){?>
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php echo base_url().'uploads/subcategory/'.$res['subcategoryimage'];?>">
                            </div>
                            <div class="content-area">
                                <h3><?php echo $res['subcategoryname'];?></h3>
                                <p><?php echo $res['subcatdesc'];?></p>
                            </div>
                            <div class="bg-btn">
                                <a href="<?php echo base_url().'Pocket/contact';?>" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                      
                       <!---  <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon-2.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Web Development</h3>
                                <p>Our web development services create impressive, user-focused websites that combine stunning design with seamless functionality, ensuring your online success.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon3.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Web Design</h3>
                                <p>Pocketfriendlyweb's Web Design services offer captivating websites that engage users and drive results, enhancing your online presence and business growth.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon4.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Web Ranking</h3>
                                <p>Boost website visibility and rankings with our Web Ranking services. Drive more organic traffic, enhance online presence, and outperform competitors.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                    </div>
                   <div class="row row-padding">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon-5.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Content Writing</h3>
                                <p>Elevate your brand's voice with highly professional Content Writing services. Engaging content that resonates, captivates, and drives results for your business.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon-6.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Branding</h3>
                                <p>Elevate your brand with expert branding services. Stand out, connect with your audience, and achieve lasting business success.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon-7.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Digital Marketing</h3>
                                <p>Our digital marketing services drive growth through targeted strategies, enhancing online visibility, engaging audiences, and boosting conversions effectively and affordably.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-main-area">
                            <div class="icon-sec">
                                <img src="<?php //echo base_url().'assets/img/icon/icon-8.png';?>">
                            </div>
                            <div class="content-area">
                                <h3>Motion video creation</h3>
                                <p>Elevate engagement and storytelling with our motion video creation services. Enhance brand impact and captivate audiences with dynamic visuals.</p>
                            </div>
                            <div class="bg-btn">
                                <a href="#" class="default-btn enquiry-btn">Enquiry</a>
                            </div>
                        </div>
                        </div>
                    </div>--->
                </div>
            </div>
        </section>

        <section>
            <div class="hosting-services-sec">
                <div class="container">
                    <div class="row">

                    <?php foreach($result as $res){?>
                                              

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php echo base_url().'uploads/'.$res['categoryimage'];?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#"><?php echo $res['categoryname'];?></a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description"><?php echo $res['categorydescription'];?></p>
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url().'Pocket/servicedetails/'.$res['categoryid'];?>" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                          
                        </div>
                        <?php } ?>
                        <!--<div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'assets/img/hos-icon/icon-2.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Domain</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Secure your digital identity with a domain that reflects your brand and captivates your audience.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'assets/img/hos-icon/icon-3.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Responsive Design</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Crafted for every device, our designs adapt seamlessly, ensuring a consistent and engaging user experience across platforms.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row-padding">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'assets/img/hos-icon/icon-4.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">SEO Integration</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">We build with SEO in mind, enhancing your website's visibility and helping it rank higher in search results.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'assets/img/hos-icon/icon-5.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Search Engine Optimization</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Boost your online visibility with strategic SEO techniques that improve your website's ranking and drive organic traffic.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php //echo base_url().'assets/img/hos-icon/icon-6.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Social Media</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Engage your audience on platforms like Facebook, Instagram, and Twitter, using targeted content to build brand loyalty and drive conversions.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>

                    </div>-->

                    <!--<div class="row row-padding">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="assets/img/hos-icon/icon-7.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Fast server</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">We provide lightning-fast servers for all your web development needs, ensuring seamless performance and optimal hosting solutions for your domains.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php echo base_url().'assets/img/hos-icon/icon-8.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Email Campaigns</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Nurture your customer relationships through well-crafted email campaigns that deliver value and drive action.</p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="elementor-element">
                                <div class="elementor-widget-container">
                                    <div class="gt3-core-imagebox-wrapper elementor-image_icon-position-beside">
                                        <div class="gt3-core-imagebox-content">
                                            <div class="gt3-core-imagebox-title">
                                            <figure class="gt3-core-imagebox-img gt3-core-imagebox-img_hover">
                                                <a href="#">
                                                    <img src="<?php echo base_url().'assets/img/hos-icon/icon-9.png';?>" class="attachment-full size-full wp-image-7930" alt="" decoding="async" loading="lazy" title="service1">
                                                    </a>
                                                </figure>
                                                    <h3 class="gt3-core-imagebox-title"><a href="#">Animated page</a></h3>
                                                </div>
                                                <p class="gt3-core-imagebox-description">Elevate your website with captivating animated pages that engage and delight your visitors instantly.

                                                </p>
                                            </div>
                                        </div>
                                        <a href="#" class="plan-btn">View Plan</a>		
                                            </div>
                            </div>
                        </div>

                    </div>-->
                </div>
            </div>
        </section>


        <section>
            <div class="blog-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Our Blog</h2>
                        </div>
                    </div>
                    <?php foreach($resultcontents as $con){?>
                    <div class="row blog-section">
                        <div class="col-md-4">
                            <div class="blog-img">
                                <img src="<?php echo base_url().'uploads/blog/'.$con['contentimage'];?>">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="blog-content">
                                <p><?php echo $con['description'];?> </p>
                                <div class="primary-btn mt-3">
                                    <a href="#" class="default-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="blog-person">
                                <img src="<?php echo base_url().'uploads/blog/'.$con['autorimage'];?>">
                            </div>
                            <div class="social-icon">
                                <img src="<?php echo base_url().'assets/img/blog/facebook.png';?>">
                                <img src="<?php echo base_url().'assets/img/blog/twitter.png';?>">
                                <img src="<?php echo base_url().'assets/img/blog/linked-in.png';?>">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                     
                </div>
            </div>
        </section>


        <section>
            <div class="testimonial-area">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Our Testimonials</h2>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-12 col-xxl-12 ">
                            <div class="testimonial-slider">
                                <div class="testimonial-item-slider owl-carousel owl-theme">
                                <?php foreach($resulttest as $test){?>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'uploads/testimonial/'.$test['image'];?>"  alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <p>
                                               <?php echo $test['testimonial'];?>
                                             </p>
                                       
                                             <div class="testimonal-info">
                                                <ul class="start-icon">
                                                    <?php if ($test['rating']==5){?>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==4){?>
                                                    
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==3){?>
                                                    
                                                   
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==2){?>
                                                    
                                                   
                                                   
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                    <?php if ($test['rating']==1){?>                              
                                                   
                                                   
                                                    
                                                    <li>
                                                        <img src="<?php echo base_url().'assets/img/testimonials/star.png';?>">
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                                <h3><?php echo $test['name'];?></h3>
                                                <p><?php echo $test['place'];?></p>
                                          
                                            </div>
                                        </div>                                      
                                    </div>
<?php } ?>


    
                                   
                                </div>
                            </div>
                        </div>
                       
                      
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="faq-area">
                <div class="container">
                   
                    <div class="faq-sec">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="row">
                                    <div class="main-title">
                                        <h2>FAQ</h2>
                                    </div>
                                </div>
                                    <div class="faq-accordion faq-accordion-width">
                                        <ul class="accordion">
                                            <?php foreach($resultfaq as $faq){?>
                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)">
                                                    <i class='bx bx-chevron-down'></i>
                                                    <?php echo $faq['faqtitle'];?>
                                                </a>
                
                                                <div class="accordion-content">
                                                    <p> 
                                                    <?php echo $faq['faqdescription'];?>
                                                    </p>
                                                </div>
                                            </li>
                                            <?php } ?>
            
                                            <!--<li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)">
                                                    <i class='bx bx-chevron-down'></i>
                                                    How can I request a quote for my project?
                                                </a>
                
                                                <div class="accordion-content">
                                                    <p> 
                                                        Requesting a quote is simple. Visit our website and navigate to the "Contact Us" page. Fill in your details and project requirements, and our team will promptly get back to you with a personalized quote tailored to your needs.
                                                    </p>
                                                </div>
                                            </li>
            
                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)">
                                                    <i class='bx bx-chevron-down'></i>
                                                    Is PocketFriendlyWeb suitable for small businesses?
                                                </a>
                
                                                <div class="accordion-content">
                                                    <p>
                                                        Absolutely. Our name says it all – we're dedicated to offering affordable solutions for businesses of all sizes, including small businesses. Our services are designed to help small companies establish and grow their online presence without breaking the bank.
                                                    </p>
                                                </div>
                                            </li>
            
                                            <li class="accordion-item">
                                                <a class="accordion-title" href="javascript:void(0)">
                                                    <i class='bx bx-chevron-down'></i>
                                                    What makes PocketFriendlyWeb stand out from other digital marketing agencies?
                                                </a>
                
                                                <div class="accordion-content">
                                                    <p>
                                                        At PocketFriendlyWeb, we pride ourselves on our innovative approach, personalized strategies, and a team of experts passionate about delivering results. We're committed to understanding your unique needs and tailoring our services to achieve your specific goals, all while keeping affordability in mind.
                                                    </p>
                                                </div>
                                            </li>-->
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="bgimg-part">
                                    <div class="model-content">
                                    <h5>How To Contact us</h5>
                                    <p><?php echo $contactus->contactusdescription;?></p>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include_once("footer.php");?>




        <script>
    $(function() {
        $("#frm").on('submit', function(e) {
            e.preventDefault();

            var contactForm = $(this);

            $.ajax({
                url: contactForm.attr('action'),
                type: 'post',
                data: contactForm.serialize(),
                success: function(response){
                    
                    
                    $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#note").val('');
    $("#package").val('');
    $("#email").val('');
                    $("#enqmsg").html(response);
                   

                }
            });
        });
    });


    $("#phone").keypress(function(event){
        var keycode = event.which;
        if (!(keycode >= 48 && keycode <= 57)) {
            event.preventDefault();
        }
    });





</script>

        