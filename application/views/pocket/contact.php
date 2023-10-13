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
                    <img src="<?php echo base_url().'pockets/assets/img/logo.png';?>" class="logo-one" alt="Logo">
                    <img src="<?php echo base_url().'pockets/assets/img/logo.png';?>" class="logo-two" alt="Logo">
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
           
            <div class="contact-banner-sec">
                <div class="container">
                    <div class="row">
                        <div class="main-title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-field-section get-touch-form">
                            <span id="msg" style="font-color:#fff;font-weight:bold;"></span>
                            <form class="row" method="post" id="frmcontact"  action="<?php echo base_url().'Pocket/contactenquiryprocess';?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="NAME" aria-label="Username" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" id="companyname" id="companyname" class="form-control" placeholder="Company Name" aria-label="Username" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" id="phone"  maxlength="12" name="phone" class="form-control" placeholder="Phone" aria-label="Username" aria-describedby="basic-addon1" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <textarea class="form-control" rows="4" cols="50" placeholder="Message..." id="message" name="message" required="required"></textarea>
                                               
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="btn-sec text-center">
                                            <button type="submit" class="default-btn submit-btn ">
                                                Send
                                            </button>
                                    </div>
                                   
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="address-sec">
                                
                                    <h4><a href="#"><img src="<?php echo base_url().'pockets/assets/img/map-icon.png';?>"> Dubai, UAE</a></h4>

                                    <h4><a href="#"><img src="<?php echo base_url().'pockets/assets/img/mail-icon.png';?>"> info@pocketfriendlyweb.com</a> </h4>
                                    <h4><a href="#"><img src="<?php echo base_url().'pockets/assets/img/call-icon.png';?>"> +971585893348 </a></h4>

                               
                            </div>
                        </div>
                      
                       
                    </div>
            </div>
            </div>
        </section>
		
		<!-- End home Area -->
        <?php include_once("footer.php");?>


        <script>
           
    $(function() {
        $("#frmcontact").on('submit', function(e) {
            e.preventDefault();

            var contactForm1 = $(this);
            

            $.ajax({
                url: contactForm1.attr('action'),
                type: 'post',
                data: contactForm1.serialize(),
                success: function(response){
                    
                    
                    $('input[type=text]').each(function() {
        $(this).val('');
    });
    //$("#note").val('');
    //$("#package").val('');
    $("#email").val('');
                    $("#msg").html(response);
                   

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