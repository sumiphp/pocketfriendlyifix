<?php include_once("header.php");?>     
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>"> 
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.theme.default.min.css';?>">
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.min.css';?>">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.min.css';?>">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.min.css';?>">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/boxicons.min.css';?>">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/fonts/flaticon.css';?>">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/meanmenu.min.css';?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css';?>">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/theme-dark.css';?>">
        <title>Pocket Frindly </title>

<!-- Favicon -->
<!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
</head>


    <body>
        <!-- Start Preloader -->
        <div class="preloader">
            <div class="preloader-wave"></div>
        </div>
        <!-- End Preloader -->


      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
              <div class="dashboard-bgarea">
                     
                 <!-- ======= Sidebar ======= -->
   <div class="other-side">

    <div class="modal-menu">
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">
            <i class="flaticon-menu"></i>
        </a>
    </div>
</div>

 <!-- Start Sidebar Modal -->
 <div class="sidebar-modal">  
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="index.html">
                            <img src="assets/img/logo.png" class="modal-logo1" alt="Logo">
                        </a>
                    </h2>
                </div>
                
                <div class="modal-body" id="navbarSupportedContent">
                    <nav class="sidebar card py-2 mb-4">
                        <ul class="nav-links">
                            <li>
                              <a href="#">
                                <i class='bx bx-grid-alt' ></i>
                                <span class="link_name">Dashboard</span>
                              </a>
                             
                            </li>
                            <li class="active">
                              <div class="iocn-link">
                                <a href="#">
                                  <i class='bx bx-collection' ></i>
                                  <span class="link_name">Core Content</span>
                                </a>
                                <i class='bx bxs-chevron-down arrow' ></i>
                              </div>
                              <ul class="sub-menu">
                                <li><a class="link_name" href="#">Category</a></li>
                                <li><a href="core-content.html">Primary Info / Logo & Favicon </a></li>
                                <li><a href="#">Site Address Info </a></li>
                                <li><a href="core-content-email.html">Site Emails / Contact Deatils </a></li>
                                <li><a href="#">Social Media Links / Meta Tages</a></li>
                                <li><a href="#"> Analytics Code / Assets / Js</a></li>
                              </ul>
                            </li>
                            <li>
                              <div class="iocn-link">
                                <a href="#">
                                  <i class='bx bx-book-alt' ></i>
                                  <span class="link_name">Page Content</span>
                                </a>
                                <i class='bx bxs-chevron-down arrow' ></i>
                              </div>
                              <ul class="sub-menu">
                                <li><a class="link_name" href="#">Posts</a></li>
                                <li><a href="#">Carousel</a></li>
                                <li><a href="#">Home Page</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog Page</a></li>
                                <li><a href="#">Download Page</a></li>
                                <li><a href="#">Contact Page</a></li>
                               
                              </ul>
                            </li>
                        
                          
                            <li>
                              <div class="iocn-link">
                                <a href="#">
                                  <i class='bx bx-plug' ></i>
                                  <span class="link_name">Add Category</span>
                                </a>
                                <i class='bx bxs-chevron-down arrow' ></i>
                              </div>
                              <ul class="sub-menu">
                                <li><a class="link_name" href="#">Plugins</a></li>
                                <li><a href="#">Add Category</a></li>
                                <li><a href="#">Add Sub Category</a></li>
                              
                              </ul>
                            </li>
                            <li>
                              <a href="#">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Blog</span>
                              </a>
                              
                            </li>
                            <li>
                              <a href="#">
                                <i class='bx bx-history'></i>
                                <span class="link_name">Contact Enquiry</span>
                              </a>
                            
                            </li>
                        
                      </ul>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

                <div class="dashboard-innerbox">
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit Site Information </h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <h5>Primary Information</h5>
                                                    <form  id="editsiteinf" class="rounded-form" method="post" action="<?php echo base_url().'Welcome/siteinfeditprocess';?>" enctype="multipart/form-data" >
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Name</label>
                                                                <input class="form-control" placeholder="Enter Site Name" name="sitename" type="text" data-bs-original-title="" title=""  value="<?php echo $result->sitename;?>"><span class="text-danger" ></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Description</label>
                                                                <input class="form-control" placeholder="Enter Site Description" name="sitedescription" type="text"  value="<?php echo $result->sitedescription;?>" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <!--<div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a><a class="btn btn-secondary" data-bs-original-title="" title="">Update</a></div>
                                                          </div>-->
                                                        </div>
                                                      <!--</form>-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <h5>Logo & Favicon</h5>
                                                    <form>
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Logo</label>
                                                                <input class="form-control" placeholder="Enter Logo" type="file" data-bs-original-title="" title="" id="image1" name="image1" ><span class="text-danger" ></span>
                                                                <img src="<?php echo base_url().'uploads/logo/'.$result->logoimg;?>" width="50" height="50" />

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Favicon</label>
                                                                <input class="form-control" placeholder="Enter Favicon" type="file" id="image2" name="image2"  data-bs-original-title="" title=""><span class="text-danger" ></span>
                                                                <img src="<?php echo base_url().'uploads/logo/'.$result->faviconimg;?>" width="50" height="50" />

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><!--<a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a>-->  <button type="submit" class="btn btn-primary" id="uploadser" >Update</button></div>
                                                          </div>
                                                        </div>
                                                      </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                           
                                <div class="row bg-row">
                                    <div class="col-md-5 col-lg-5 pocket-help">
                                        <h2>Ask pocket Friendly for Help 24/7</h2>
                                        <h6>Get In Touch : </h6>
                                      
                                        <div class="number-block"> <a href="tel:+ +971 585893348"> +<?php echo $contactus->phoneno;?> </a>  
                                           </div>
                                        </div>
                                </div>
                                </div>
                          
              
                   
              </div>
              </div>
			</div>
		</section>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
        <!--<footer id="footer" class="footer-area-bg">
            <div class="footer-newletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="subscribe-area">
                                <h2>News Letter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                            <div class="newsletter-area">
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                    <button class="subscribe-btn" type="submit">
                                        Subscribe
                                    </button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="feature-updates-sec">
                            <h2>Feature Update</h2>
                            <div class="footer-service-icon">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-1.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-2.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-3.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-4.png">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-single">
                                <div class="footer-single-content">
                                    <a href="#">
                                        <img src="assets/img/footer-logo.png" alt="Logo">
                                    </a>
                                    <div class="share-icon">
                                        <img src="assets/img/share-icon.png">
                                    </div>
                                   
                                </div>

                              
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-list ml-50">
                                <h3>About Us</h3>
                              <p>POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>
                              <p class="pt-30 ">POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-list">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">SEO</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Terms & Condition</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Careers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-20">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                          Dubai,UAE
                                    </li>
                                    <li>
                                        <i class='bx bxs-phone'></i>
                                        <a href="tel:+971 585893348">+971 585893348</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="mailto:info@ifixcomapnyonline">info@ifixcomapnyonline</a>
                                    </li>
                                  
                                    
                                </ul>

                                
                            </div>
                        </div>
                        <div class="copyright-text">
                            <p>
                                Copyrightbypocketfriendlyweb | <script>document.write(new Date().getFullYear())</script>  
                             
                            </p>
                        </div>
                     
                    </div>
                </div>
            </div>-->

            <?php include_once("footer1.php");?>