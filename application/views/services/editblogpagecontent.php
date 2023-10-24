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
                                <h2>Edit Blog Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editnewsletter" class="rounded-form" method="post" >
 
                                                    
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Blog Page Content:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="7" placeholder="Enter Newsletter"><?php echo $result->blogdescription;?></textarea>
                                                      </div>
                                                     
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage"><?php echo $result->metatag;?></textarea>
                                                      </div>
                                                      
                                                      
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

        <script>
$(document).ready(function(){
  /*$("#save").click(function(){
    var description = CKEDITOR.instances['description'].getData();
    alert(description);
  });*/
CKEDITOR.replace('description');
});
</script>





        <script>
$('#uploadsub').on('click', function (e) {
    e.preventDefault();
  
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        //var testtitle=$('#testtitle').val();
        //var rating=$("#rating").val();
        var description=$("#description").val();
       var metatag=$("#metatag").val();
        //var place=$("#place").val();
        //var date=$("#date").val();
        //alert("enter"+description);
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        //form_data.append('testtitle',testtitle);
        //form_data.append('rating',rating);
        form_data.append('description',description);
        form_data.append('metatag',metatag);
        //form_data.append('place',place);
        //form_data.append('date',date);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editblogpageprocess/'.$this->uri->segment(3);?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#date').val('');
                $('#description').val('');
                /*$('input[type=text]').each(function() {
        $(this).val('');
    });*/
                //$('#testmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listblogpage';?>";
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listblogpage';?>";
            }
        });
    });






</script>

    </body>
    <?php include_once("footer.php");?>