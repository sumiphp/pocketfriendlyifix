
<?php include_once("header.php");
//echo $resulthome->metatag;

?>

    <body>
        <!-- Start Preloader -->
       <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->

        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
             <a href="<?php echo base_url().'Pockets/index';?>" class="logo">
                    <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="logo-one" alt="<?php echo $siteinf->alttagimg1;?>">
                    <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="logo-two" alt="<?php echo $siteinf->alttagimg1;?>">
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
                            <h2><?php echo $result->servicedttitle;?></h2>
                        </div>
                       
                    </div>
            </div>
            </div>
           <div class="service-detail-banner">
           <!--<div class="service-detail-banner" style="background:url(<?php //echo base_url().'uploads/'.$lowestpackage->subcatbannerimage;?>) !important;background-repeat: no-repeat;background-size: cover; background-position: center;height:100vh;">-->
           <!--<div class="service-detail-banner" style="background:url(<?php //echo base_url().'uploads/subcategory/'.$lowestpackage->subcatbannerimage?>)!important;background-repeat:no-repeat!important;background-position:center !important;background-size:cover !important;height:100vh;">-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-mg-5 col-sm-5">
                            <div class="right-banner-content">
                                <?php //print_r($lowestpackage);?>
                                <h2><?php echo $lowestpackage->subcategoryname;?></h2>
                                <p><?php echo $lowestpackage->subcatshortdesc;?></p>
                                <h3 class="small_gradient_Text">For just <?php echo $lowestpackage->price;?> <?php echo $lowestpackage->currency;?> </h2>
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
                                    <!--<a href="#" class="sidebar-menu-dropdown">
                                        <span class="small_gradient_Text">Category</span>
                                        <div class="dropdown-icon">
                                            <i class='bx bxs-down-arrow'></i>
                                        </div>
                                    </a>-->
                                 
                                    <ul class="sidebar-menu-dropdown-content">
                                        <?php 
                                        
                                        //print_r($servicedetails);
                                        
                                        foreach($categories as $sd){ ?>
                                            <li>
                                            <a href="<?php echo base_url().'Pocket/servicedetails/'.$sd['categoryid'];?>">
                                               <?php echo $sd['categoryname'];?>
                                            </a>
                                        </li>


                                       <?php } ?>
                                      


                                    </ul>
                                </li>
                               </ul>
                                 </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="package-details">
                            <div class="row">
                                 <?php 
                                        
                                        //print_r($servicedetails);
                                        
                                        foreach($servicedetails as $sd){ ?>
                                <div class="col-lg-6 col-md-12">
                                    <div class="bg-box">
                                        <div class="icon-block">
                                            <img src="<?php echo base_url().'uploads/subcategory/'.$sd['subcategoryimage'];?>"/>
                                        </div>
                                        <div class="content-block">
                                            <h4><?php echo $sd['subcategoryname'];?></h4>
                                            <p><?php echo $sd['subcatdesc'];?></p>
                                            <!--<p>Enhance your website with our professional single-page package</p>
                                            <p>Enhance your website with our professional single-page package</p>-->
                                            <span class="smallText">For just </span>
                                            <h6><?php echo $sd['price'];?> <?php echo $sd['currency'];?></h6>
                                        </div>
                                        <div class="btn-block bg-btn">
                                            <a href="<?php echo base_url().'Pocket/contact';?>" class="default-btn enquiry-btn">Enquiry</a>
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
            <div class="bottom-slider-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title text-left">
                            <h2><?php echo $result->servicedtsolution;?></h2>
                        </div>
                    </div>
                    
                    <div class="row align-items-center">
                   
                        <div class="col-md-12 col-lg-12 col-xxl-12 ">
                            <div class="service-details">
                                <div class="portfolio-slider owl-carousel owl-theme">
                                <?php foreach($easeyourproblems as $easeprob){?>
                                    <div class="testimonial-item">
                                        <div class="testimonial-item-img">
                                            <img src="<?php echo base_url().'uploads/problems/'.$easeprob['picture'];?>" alt="Testimonial Images">
                                        </div>
                                        <div class="testimonail-content">
                                            <h4><?php echo $easeprob['title'];?></h4>
                                            <p>
                                            <?php echo $easeprob['description'];?>
                                             </p>
                                        <div class="btn-block bg-btn">
                                            <a href="<?php echo $easeprob['link'];?>" class="default-btn" target=_blank>View More</a>
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

    

        <?php include_once("footer.php");?>