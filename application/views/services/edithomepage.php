<?php //include_once("header.php");?>     
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
                <span id="sermsg"></span><br>
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit Home Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edithomepage" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Main Title:</label>
                                                              <input type="text" class="form-control" id="maintitle" name="maintitle" required placeholder="Enter Main Title" value="<?php echo $result->title1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Subtitle:</label>
                                                              <input type="text" class="form-control" id="subtitle" name="subtitle"  placeholder="Enter Sub Title" value="<?php echo $result->title2;?>">


                                                             
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg1;?>" width="50" height="50" />


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg2;?>" width="50" height="50" />
                                                          </div>
                                                      </div>


                                                      
                                                      <!--<div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required><?php //echo $result->description;?></textarea>
                                                      </div>-->
                                                     <div class="row mb-3">

                                                     <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Service Title </label>
                                                              <input type="text" class="form-control" id="servicetitle" name="servicetitle" placeholder="Enter Service Title" value="<?php echo $result->servicetitle;?>">
                                                          </div>
                                                         
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Service Title1:</label>
                                                              <input type="text" class="form-control" id="servicetitle1" name="servicetitle1" placeholder="Enter Service Title1" value="<?php echo $result->servicetitle1;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Service Title2 </label>
                                                              <input type="text" class="form-control" id="servicetitle2" name="servicetitle2" placeholder="Enter Service Title2" value="<?php echo $result->servicetitle2;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Service Title3:</label>
                                                              <input type="text" class="form-control" id="servicetitle3" name="servicetitle3" placeholder="Enter Service Title3" value="<?php echo $result->servicetitle3;?>">
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Quality Title </label>
                                                              <input type="text" class="form-control" id="qualitytitle" name="qualitytitle" placeholder="Enter Quality Title" value="<?php echo $result->qualitytitle;?>">
                                                          </div>
                                                         
                                                          <div class="col-md-6">
                                                          <label for="designation" class="form-label text-primary">Service Image:</label>
                                                              <input type="file" class="form-control" id="image3" name="image3">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->serviceimg;?>" width="50" height="50" />
                                                          </div>
                                                      </div>



                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="button" class="btn btn-primary" id="uploadser" >Update</button>
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
$('#edithomepage').on('submit', function (e) {
    e.preventDefault();
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var file_data3 = $('#image3').prop('files')[0];
        var maintitle=$('#maintitle').val();
        var subtitle=$("#subtitle").val();
        var servicetitle1=$("#servicetitle1").val();
        var servicetitle2=$("#servicetitle2").val();
        var servicetitle3=$("#servicetitle3").val();
        var servicetitle=$("#servicetitle").val();
        var qualitytitle=$("#qualitytitle").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('image3', file_data3);
        form_data.append('image2', file_data2);
        form_data.append('maintitle',maintitle);
        form_data.append('subtitle',subtitle);
        form_data.append('servicetitle',servicetitle);
        form_data.append('servicetitle1',servicetitle1);
        form_data.append('servicetitle2',servicetitle2);
        form_data.append('servicetitle3',servicetitle3);
        form_data.append('qualitytitle',qualitytitle);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/edithomepageprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('#image3').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#sermsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listhomepage';?>";
            },
            error: function (response) {
               // $('#sermsg').html(response); // display error response from the server
               window.location.href ="<?php echo base_url().'Welcome/listhomepage';?>";
            }
        });
    });






</script>

    </body>
    <?php include_once("footer.php");?>