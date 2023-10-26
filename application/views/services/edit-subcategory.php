<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/bootstrap.min.css';?>"> 
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/owl.theme.default.min.css';?>">
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/owl.carousel.min.css';?>">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/magnific-popup.min.css';?>">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/animate.min.css';?>">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/boxicons.min.css';?>">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/fonts/flaticon.css';?>">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/meanmenu.min.css';?>">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/style.css';?>">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/responsive.css';?>">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="<?php echo base_url().'services/assets/css/theme-dark.css';?>">

        <!-- Title -->
        <title>Pocket Freindly</title>

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
                                <h2>Sub-Category Information </h2>
                                <div class="row">
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                  <?php //print_r($result);?>
                                                  <h5>Edit Sub-Category</h5>
                                                    <form id="subfrm" method="post" action="<?php echo base_url().'Welcome/subcategoryeditprocess';?>">
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Product Category</label>
                                                                <select class="form-control" placeholder="Product Category Name" name="prdcat" id="prdcat"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Category</option>
                                                                
                                                                <?php                                              
                                                                                                     
                                                    foreach($cat_detail as $res){?>
                                                    <option value="<?php echo $res['categoryid'];?>" <?php if ($res['categoryid']==$result->categoryid){?> selected <?php } ?>><?php echo $res['categoryname'];?></option>

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
                                                                <input type="hidden" name="subcatid" id="subcatid"  value="<?php echo $result->subcategoryid?>" />
                                                                <input class="form-control" placeholder="Product Sub-Category" name="prdsubcat" id="prdsubcat" type="text" data-bs-original-title="" value="<?php echo $result->subcategoryname?>" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Description:</label>
                                                                
                                                                <textarea class="form-control" id="prdsubdesc" name="prdsubdesc" rows="4" placeholder="Enter Sub Category description"><?php echo $result->subcatdesc;?></textarea>

                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Price:</label>
                                                                <input class="form-control numericvalidate" placeholder="Price" name="price" id="price" type="text" data-bs-original-title="" title="" value="<?php echo $result->price;?>" ><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Short Description:</label>
                                                                <textarea class="form-control" id="prdsubshortdesc" name="prdsubshortdesc" rows="4" placeholder="Enter Sub Category Short description"><?php echo $result->subcatshortdesc;?></textarea>

                                                                <!--<input class="form-control" placeholder="Description" name="prdsubdesc" id="prdsubdesc" type="text" data-bs-original-title="" title=""><span class="text-danger"></span>-->
                                                              </div>
                                                            </div>
                                                          </div>
                                                          

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label"> Product Sub-Category Image</label>
                                                                <input class="form-control" placeholder="Select Product Sub-Category Image" name="file" type="file"  id="filesub"  name="productdescription"  data-bs-original-title="" title=""><span class="text-danger"></span>
                                                                <span style="background-color:#ccc;"><img src="<?php echo base_url().'uploads/subcategory/'.$result->subcategoryimage;?>" width="50" height="50" /></span>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label class="form-label"> Enter Alt attribute1</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute1" value="<?php echo $result->alttagimg1;?>">

                                                               
                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label"> Product Sub-Category Banner Image</label>
                                                                <input class="form-control" placeholder="Enter Product Sub-Category Banner Image" name="filesubimg" type="file"  id="filesubimg"  name="filesubimg"  data-bs-original-title="" title="" ><span class="text-danger"></span>
                                                                <img src="<?php echo base_url().'uploads/subcategory/'.$result->subcatbannerimage;?>" width="80" height="80" />
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                              <label class="form-label"> Enter Alt attribute2</label>
                                                              <input type="text" class="form-control" id="alttagimg2" name="alttagimg2" required placeholder="Enter Alt attribute2" value="<?php echo $result->alttagimg2;?>">

                                                               
                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><button class="btn btn-secondary" data-bs-original-title="" title="">Save</button></div>
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
                                      
                                        <div class="number-block"> <a href="tel:+ +<?php echo $contactus->phoneno;?>"> +<?php echo $contactus->phoneno;?> </a>  
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
        <?php include('footer1.php');?>
    </body>
</html>


<script>
    $(function() {
        $("#frmedit").on('submit', function(e) {
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
    alert(response);
    window.location.href ="<?php echo base_url().'Welcome/listcategory';?>";
                    //$("#catmsg").html(response);
                   

                }
            });
        });
    });



    /*$(function() {
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
    });*/




    $('#subfrm').on('submit', function (e) {
      e.preventDefault(e);
        var file_data = $('#filesub').prop('files')[0];
        var file_databanner = $('#filesubimg').prop('files')[0];
        var prdcat=$('#prdcat').val();
        var prdsubcat=$("#prdsubcat").val();
        var prdsubdesc=$("#prdsubdesc").val();
        var prdsubshortdesc=$('#prdsubshortdesc').val();
        var price=$('#price').val();
        var subcatid=$("#subcatid").val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var form_data = new FormData();
        form_data.append('filesub', file_data);
        form_data.append('prdsubcat',prdsubcat);
        form_data.append('prdcat',prdcat);
        form_data.append('prdsubdesc',prdsubdesc);
        form_data.append('subcatid',subcatid);
        form_data.append('prdsubshortdesc',prdsubshortdesc);
        form_data.append('filesubimg',file_databanner);
        form_data.append('price',price);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/upload_filesubedit';?>", // point to server-side controller method
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
    window.location.href ="<?php echo base_url().'Welcome/listsubcategory';?>";
            },
            error: function (response) {
              window.location.href ="<?php echo base_url().'Welcome/listsubcategory';?>";
            }
        });
    });















</script>