<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ2M221WLF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BJ2M221WLF');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact | Jaisri</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/logo/favicon.png" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">   

     <!-- toaster -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    
<div id="main-wrapper">
   
    <!-- Header -->
    <?php include('includes/header.php'); ?>
    <!-- Header ends-->
    
    <!--Breadcrumb Section Start-->
    <div class="breadcrumb-section section bg-image pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45" data-bg="assets/images/bg/bread-crumb-1.webp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="breadcrumb-title">
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->
    
    <!--Contact Section Start-->
    <div class="contact-section section py-5">
        <div class="container">
            <div class="row py-5">
                
                <div class="col-lg-4">
                    <div class="section-title text-start">
                        <span>Start a new project?</span>
                        <h2>Get in touch with us</h2>
                    </div>
                    <!--Single Address Start-->
                    <div class="single-address mb-30">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><span>111, Levton Street VGN Brent Park, Ambattur, Chennai - 600053</span></li>
                            <li><a href="mailto:srini@jaisri.in"><i class="fa fa-envelope-o"></i> srini@jaisri.in</a></li>
                            <li><a href="mailto:jai@jaisri.in"><i class="fa fa-envelope-o"></i> jai@jaisri.in</a></li>
                            <li><a href="tel:+919840395665"><i class="fa fa-phone-square"></i> (+91) 98403 95665</a></li>
                            <li><a href="tel:+919941300255"><i class="fa fa-phone-square"></i> (+91) 99413 00255</a></li>                            
                        </ul>
                    </div>
                    <!--Single Address End-->
                    <div class="footer-social contact-social">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form-wrap">
                            <h2 class="contact-title">Contact</h2>
                            <form id="contact-form" action="contact-mail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input id="name" name="name" placeholder="Full Name*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input id="phone" name="phone" placeholder="Phone*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input id="email" name="email" placeholder="Email*" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-form-style mb-20">
                                            <input id="subject" name="subject" placeholder="Subject*" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-form-style">
                                            <textarea id="message" name="message" placeholder="Type your message here.."></textarea>
                                            <button class="btn" id="submit-form" name="submit" type="submit">SUBMIT</i></button>
                                            <div id="form-spinner" class="spinner-grow text-primary" style="display:none" role="status">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>               

            </div>

            <div class="row">
                <div class="col-lg-12 py-5">
                    <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.9990010309066!2d80.15581920000001!3d13.0992496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5263c79fa77eed%3A0xafca64822316bbf9!2sLeyton%20St%2C%20Ksr%20Nagar%2C%20Ambattur%2C%20Chennai%2C%20Tamil%20Nadu%20600053!5e0!3m2!1sen!2sin!4v1689937911698!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
        </div>
    </div>
    <!--Contact Section End-->

    

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- Footer Ends -->
    
</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
        $("#submit-form").on("click", function(event){
            event.preventDefault();
            let name = $("#name").val();
            let phone = $("#phone").val();
            let email = $("#email").val();
            let subject = $('#subject').val();
            let message = $("#message").val();

            if(!name || !(/^[A-Za-z\s]*$/.test(name)) ){
                toastr.error("Please enter a valid name");
                return false;
            }
            if(!phone || !(/^[0-9]{10}$/.test(phone)) ){
                toastr.error("Please enter a valid 10 digit phone number");
                return false;
            }
            if(!email || !(/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/.test(email)) ){
                toastr.error("Please enter a valid email");
                return false;
            }
            if(!subject){
                toastr.error("Please enter a valid subject");
                return false;
            }
            if(!message){
                toastr.error("Please enter a valid message");
                return false;
            }

            $("#form-spinner").show();
            $("#submit-form").hide();
            form=$("#contact-form").serialize();
            console.log("formData", form)
             $.ajax({
                url: 'contact-mail',
                type: 'post',
                dataType: 'json',
                data: form,
                success: function(data){
                    console.log("data success",data)
                    toastr.success("Form submitted successfully. Thank you for reaching out to us.");   
                    $("#form-spinner").hide();
                    $("#submit-form").show();            
                },
                error: function(data) { 
                    toastr.error("Error. Failed to submit form.");
                    console.log("error", data);
                    $("#form-spinner").hide();
                    $("#submit-form").show();
                }   
            });
           
        });
        toastr.options = {
          "closeButton": true,
          "showDuration": "700",
        };
    </script>
</body>


</html>