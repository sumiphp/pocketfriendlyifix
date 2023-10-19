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

        <!-- Title -->
        <title>Pocket Frindly </title>

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
    </head>

    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->


      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
              <div class="dashboard-bgarea">


                     
            <?php include_once("sidebar.php");?>     

 

                <div class="dashboard-innerbox">
                
                            <div class="inner-page-sec">
                            <span id="blogmsg"></span><br>
                              <div class="description-sec">
                                <h2>Edit Contact Us</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editcontactus" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Phoneno:</label>
                                                              <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="Phone No" required value="<?php echo $result->phoneno;?>" >
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Contact Us Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" >
                                                              <img src="<?php echo base_url().'uploads/contactus/'.$result->contactusimg;?>"  width="50" height="50" />
                                                          </div>
                                                      </div>
                                               
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Emailid:</label>
                                                              <input type="text" class="form-control" id="emailid" name="emailid" required value="<?php echo $result->emailid;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Place:</label>
                                                              <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place" required value="<?php echo $result->city;?>">
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Country:</label>
                                                              <input type="text" class="form-control" id="country" name="country" placeholder="Country" required value="<?php echo $result->country;?>">
                                          
                                                          </div>
                                                          <!--<div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Contact Us Image:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2" >
                                                              <img src="<?php //echo base_url().'uploads/blog/'.$result->contentimage;?>" width="100" height="100" />
                                                          </div>-->
                                                      </div>


                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Front Page Contact Us description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="10" placeholder="Enter Blog description" required><?php echo $result->contactusdescription;?></textarea>
                                                      </div>
                                                      
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listblogcontents';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub" >Submit</button>
                                                  </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
		
        


            


         <!-- Jquery Min JS -->
        <script src="<?php echo base_url().'assets/js/jquery.min.js';?>"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        <!-- Meanmenu JS -->
        <script src="<?php echo base_url().'assets/js/meanmenu.min.js';?>"></script>
        <!-- Owl Carousel JS -->
        <script src="<?php echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
        <!-- Magnific Popup JS -->
        <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
        <!-- Wow JS -->
        <script src="<?php echo base_url().'assets/js/wow.min.js';?>"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="<?php echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        <!-- Form Validator Min JS -->
        <script src="<?php echo base_url().'assets/js/form-validator.min.js';?>"></script>
        <!-- Contact Form JS -->
        <script src="<?php echo base_url().'assets/js/contact-form-script.js';?>"></script>
        <!-- Custom JS -->
        <script src="<?php echo base_url().'assets/js/custom.js';?>"></script>
        <script>
$('#editcontactus').on('submit', function (e) {
    e.preventDefault();
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var phoneno=$('#phoneno').val();
        var emailid=$("#emailid").val();
        var place=$("#place").val();
        var country=$("#country").val();
        //var place=$("#place").val();
        //var date=$("#date").val();
       var description=$("#description").val();
        //var blogid=$("#blogid").val();
        
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        form_data.append('phoneno',phoneno);
        form_data.append('emailid',emailid);
        form_data.append('place',place);
        form_data.append('country',country);
        form_data.append('description',description);
        //form_data.append('date',date);
       // form_data.append('companyname',companyname);
        //form_data.append('blogid',blogid);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/contactusprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                /*$('#image1').val('');
                $('#image2').val('');
                $('#blogtitle').val('');
                $('#toparticle').val('');
                $('#date').val('');
                $('#name').val('');
                $('#place').val('');*/
                $('#description').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#blogmsg').html(response); // display success response from the server
                
                window.location.href ="<?php echo base_url().'Welcome/listcontactus';?>";
            },
            error: function (response) {
                //$('#blogmsg').html(response); // display error response from the server
                
                window.location.href ="<?php echo base_url().'Welcome/listcontactus';?>";
            }
        });
    });






</script>

    </body>
    <?php include_once("footer.php");?>