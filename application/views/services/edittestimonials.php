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
                            <span id="testmsg"></span><br>
                              <div class="description-sec">
                                <h2>Edit Testimonials</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edittestimonial" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Testimonial Title:</label>
                                                              <input type="text" class="form-control" id="testtitle" name="testtitle" placeholder="Testimonial Title" value="<?php echo $result->title;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/testimonial/'.$result->image;?>"  width="50" height="50" />
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Rating:</label>
                                                              <input type="text" class="form-control numericvalidate" id="rating" name="rating" placeholder="Enter Rating" value="<?php echo $result->rating;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Date Posted:</label>
                                                              <input type="date" class="form-control" id="date" name="date" value="<?php echo $result->date;?>">
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Name:</label>
                                                              <input type="text" class="form-control" id="name" name="name" value="<?php echo $result->name;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Place:</label>
                                                              <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place" value="<?php echo $result->place;?>">
                                                          </div>
                                                          
                                                      </div>
                                                      
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                          
                                                          </div>
                                                          <!--<div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Alt Tag Image2:</label>
                                                              <input type="text" class="form-control" id="alttagimg2" name="alttagimg2" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg2;?>">


                                                             
                                                          </div>-->
                                                      </div>
                                                      <!--<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-number-1" class="form-label text-primary">Contact Number 1:</label>
                                                              <div class="input-group">
                                                                  <input type="tel" class="form-control" id="contact-number-1" name="contact-number-1" placeholder="Enter contact number 1">
                                                                  <div class="input-group-append">
                                                                      <div class="form-check mx-3">
                                                                          <input class="form-check-input" type="checkbox" id="whatsapp-1" name="whatsapp-1">
                                                                          <label class="form-check-label" for="whatsapp-1">WhatsApp</label>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-number-2" class="form-label text-primary">Contact Number 2:</label>
                                                              <div class="input-group">
                                                                  <input type="tel" class="form-control" id="contact-number-2" name="contact-number-2" placeholder="Enter contact number 2">
                                                                  <div class="input-group-append">
                                                                      <div class="form-check mx-3">
                                                                          <input class="form-check-input" type="checkbox" id="whatsapp-2" name="whatsapp-2">
                                                                          <label class="form-check-label" for="whatsapp-2">WhatsApp</label>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>-->
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Testimonial:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Testimonial"><?php echo $result->testimonial;?></textarea>
                                                      </div>
                                                      <!---<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Email:</label>
                                                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div>
                                                      </div>--->
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listtestimonials';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
                                                      <button type="button" class="btn btn-primary" id="uploadsub" >Submit</button>
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
$('#uploadsub').on('click', function (e) {
    e.preventDefault();
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var testtitle=$('#testtitle').val();
        var rating=$("#rating").val();
        var description=$("#description").val();
        var name=$("#name").val();
        var place=$("#place").val();
        var date=$("#date").val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        form_data.append('testtitle',testtitle);
        form_data.append('rating',rating);
        form_data.append('description',description);
        form_data.append('name',name);
        form_data.append('place',place);
        form_data.append('date',date);
        form_data.append('alttag1',alttagimg1);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/edittestimonialsprocess/'.$this->uri->segment(3);?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#date').val('');
                $('#description').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#testmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listtestimonials';?>";
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listtestimonials';?>";
            }
        });
    });






</script>

    </body>
    <?php include_once("footer.php");?>