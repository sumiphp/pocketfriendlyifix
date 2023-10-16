<!doctype html>
<html lang="zxx">
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
                    <?php include('sidebarmenu.php');?>
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
                                <h2>Category / Sub-Category Information </h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <span id="catmsg"></span><br>
                                                <div class="product-info">
                                                    <h5>Add Category</h5>
                                                    <form id="frm" method="post" enctype="multipart/form-data" action="<?php echo base_url().'Welcome/categoryaddprocess';?>" >
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category</label>
                                                                <input class="form-control" placeholder="Enter Product Name" type="text" id="productcategory"  name="productcategory" data-bs-original-title="" title="" required ><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Description</label>
                                                                <input class="form-control" placeholder="Enter Product Description" id="productdescription" type="text" name="productdescription"  data-bs-original-title="" title="" required><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Select Product Category Image</label>
                                                                <input class="form-control" placeholder="Enter Product Description" name="file" type="file"  id="file"  name="file"  data-bs-original-title="" title="" required><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row">
                                                         
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a> <button class="btn btn-secondary" id="upload">Save</button><!--<button class="btn btn-secondary" data-bs-original-title="" title="">Save</button>--></div>
                                                          </div>
                                                        </div>
                                                       
                                                      </form>
                                                      

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                  <h5>Add Sub-Category</h5>
                                                  <span id="catsubmsg"></span><br>
                                                    <form id="subfrm" method="post" action="<?php echo base_url().'Welcome/subcategoryaddprocess';?>">
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category</label>
                                                                <select class="form-control" placeholder="Product Category Name" name="prdcat" id="prdcat"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Category</option>
                                                                
                                                                <?php                                              
                                                                                                     
                                                    foreach($result as $res){?>
                                                    <option value="<?php echo $res['categoryid'];?>"><?php echo $res['categoryname'];?></option>

                                                    <?php } ?>
                                                                    
</select>
                                                                
                                                                <span class="text-danger">


</select>
                                                                </span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Sub-Category:</label>
                                                                <input class="form-control" placeholder="Product Sub-Category" name="prdsubcat" id="prdsubcat" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Description:</label>
                                                                <input class="form-control" placeholder="Description" name="prdsubdesc" id="prdsubdesc" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Select Product Sub-Category Image</label>
                                                                <input class="form-control" placeholder="Enter Product Description" name="file" type="file"  id="filesub"  name="productdescription"  data-bs-original-title="" title="" required><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="<?php echo base_url().'index.php/Welcome/listsubcategory';?>" data-bs-original-title="" title="">View and Edit </a><button class="btn btn-secondary" id="uploadsub" data-bs-original-title="" title="">Save</button></div>
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
                                      
                                        <div class="number-block"> <a href="tel:+ +971 585893348"> +971585893348 </a>  
                                           </div>
                                        </div>
                                </div>
                                </div>
                          
              
                   
              </div>
              </div>
			</div>
		</section>
        <?php include('footer1.php');?>
		
    </body>
</html>


<script>
   $(function() {
        $("#frm").on('submit', function(e) {
            e.preventDefault();
            var Form = $(this);
            $.ajax({
                url: Form.attr('action'),
                type: 'post',
                data: Form.serialize(),
                processData: false,
        contentType: false,
        cache:false,
        async:false,
                success: function(response){                   
     $('input[type=text]').each(function() {
        $(this).val('');
    });   
      $("#catmsg").html(response);                

                }
            });
        });
    });



    $(function() {
        $("#subfrm").on('submit', function(e) {
            e.preventDefault();

            var Form = $(this);

            $.ajax({
                url: Form.attr('action'),
                type: 'post',
                data: Form.serialize(),
                success: function(response){
                    
                    
                    $('input[type=text]').each(function() {
        $(this).val('');
    });
   
                    $("#catmsg").html(response);
                   

                }
            });
        });
    });












</script>
<script type="text/javascript">
//$(document).ready(function(e){
    $('#upload').on('click', function () {
        var file_data = $('#file').prop('files')[0];
        var productcategory=$('#productcategory').val();
        var productdescription=$('#productdescription').val();
        var form_data = new FormData();
        form_data.append('file', file_data);
        form_data.append('productcategory',productcategory);
        form_data.append('productdescription',productdescription);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/upload_file';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#file').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                $('#catmsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#catmsg').html(response); // display error response from the server
            }
        });
    });


    $('#uploadsub').on('click', function () {
        var file_data = $('#filesub').prop('files')[0];
        var prdcat=$('#prdcat').val();
        var prdsubcat=$("#prdsubcat").val();
        var prdsubdesc=$("#prdsubdesc").val();
        //var productdescription=$('#productdescription').val();
        var form_data = new FormData();
        form_data.append('filesub', file_data);
        form_data.append('prdsubcat',prdsubcat);
        form_data.append('prdcat',prdcat);
        form_data.append('prdsubdesc',prdsubdesc);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/upload_filesub';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#filesub').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                $('#catsubmsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#catsubmsg').html(response); // display error response from the server
            }
        });
    });







//});
</script>

