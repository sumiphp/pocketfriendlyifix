<?php include_once("header.php");?>   

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
                <span id="solmsg"></span><br>
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit Services Steps</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editsteps" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Title:</label>
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo $result->title;?>"  required>
                                                              <input type="hidden" class="form-control" id="problemid" name="problemid"  value="<?php echo $result->stepid;?>"  required>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" >
                                                              <img src="<?php echo base_url().'uploads/servicessteps/'.$result->picture;?>" width="50" height="50" />
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <!--<div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Link:</label>
                                                              <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" required  value="<?php //echo $result->link;?>">
                                                          </div>-->
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description"><?php echo $result->description;?></textarea>
                                                      </div>
                                                      
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listsolutions';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
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
		
        


            


            
        <!---<script src="<?php //echo base_url().'assets/js/jquery.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/meanmenu.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
     
        <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/wow.min.js';?>"></script>
    
        <script src="<?php //echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/form-validator.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/custom.js';?>"></script>-->
        
    </body>
    <?php include_once("footer.php");?>
        <script>
$('#editsteps').on('submit', function (e) {
    e.preventDefault();
    
        var file_data1 = $('#image1').prop('files')[0];
        var link=$("#link").val();
        var title=$('#title').val();
        //alert("enter"+title);
        var problemid=$("#problemid").val();
        var description=$("#description").val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('link', link);
        form_data.append('maintitle',title);
       form_data.append('stepid',problemid);
        form_data.append('description',description);
        form_data.append('alttag1',alttagimg1);
        $.ajax({
            url: "<?php echo base_url().'Welcome/editservicesstepsprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#description").val('');
                //$('#solmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listservicessteps';?>";
            },
            error: function (response) {
                //$('#solmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listservicessteps';?>";
            }
        });
    });






</script>