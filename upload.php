<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>World conference</title>
        <!-- Custom Theme files -->
    <link href="<?php echo base_url()?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- aasana stylesheet -->
    <link href="<?php echo base_url()?>css/aasana.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <link rel="WorldConferencealerts" sizes="80x80" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
<link href="css/bootstrap.min1.css" rel="stylesheet" type="text/css" />
<link href="css/extra.css" rel="stylesheet" type="text/css" />	
<link href="css/project.css" rel="stylesheet" type="text/css" />
   
    
    
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
        <h1>
            <a class="navbar-brand text-white" href="#">
                <i class="fa fa-globe" aria-hidden="" style="color: #fff;font-size: 25px"></i>

                <span style="color: yellow"> world</span> <span style="font-size: 20px;font-family:'Arial Black';color:a">conference</span>

            </a>
        </h1>
        <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="<?php echo base_url()?>home">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                            data-target="#exampleModal">
                        login
                    </button>
                </li>
            </ul>
        </div>

    </nav>
</header>
<!-- //header -->
<!-- banner -->
<div class="callbacks_container">
    <ul class="rslides slider3">
        <li class="banner banner1">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <h3>challenge yourself.</h3>

                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="#about" role="button">View
                            More</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="banner banner2">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <h3>challenge yourself.</h3>
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="#about" role="button">View
                            More</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- //banner -->
<!-- about -->
<div class="about-w3sec py-sm-5" id="about">
    <div class="container py-4">
        <div class="title-section pb-4">
            <h3 class="main-title-aasana-w3"> PARTICIPATE DETAILS</h3>
        </div>

    </div>
</div>

<div class="row py-lg-12 py-4">
    <div class="offset-3"></div>
    <div class="col-lg-6 mt-lg-0 mt-6">
        <div class="register-top1">


            <form action="<?php echo base_url()?>upload/participate?id=<?php echo $_GET['id']?>" method="post" class="register-wthree" enctype="multipart/form-data">

                <?php
                foreach ($carts as $cart) {
                    ?>
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    Event name
                                </label>
                                <input class="form-control" type="text" placeholder="contact" name="eventname"
                                   value="<?php echo $cart['eventname']?>"    required="">
                            </div>

                            <div class="col-md-12">
                                <label>
                                    Event type
                                </label>
                                <input class="form-control" type="text" placeholder="contact" name="eventtype"
                                       value="<?php echo $cart['eventtype']?>"       required="">
                            </div>
                            <div class="col-md-12 mt-md-0 mt-4">
                                <label>Event Category</label>
                                <input class="form-control" type="text" placeholder="contact" name="eventcategory"
                                       value="<?php echo $cart['eventcategory']?>"     required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">


                                <label>Date</label>
                                <!--                                <input type="number" class="form-control" id="email" placeholder="Email" name="email" required="">-->
                                <input class="form-control" type="text" placeholder="contact" name="date"
                                       value="<?php echo $cart['date']?>"      required="">

                            </div>

                            <div class="col-md-4">
                                <label>Month</label>
                                <!--                                <input type="number" class="form-control" id="email" placeholder="Email" name="email" required="">-->
                                <input class="form-control" type="text" placeholder="contact" name="month"
                                       value="<?php echo $cart['month']?>"         required="">
                            </div>
                            <div class="col-md-4">
                                <label>Year</label>
                                <!--                                <input type="number" class="form-control" id="email" placeholder="Email" name="email" required="">-->
                                <input class="form-control" type="text" placeholder="contact" name="year"
                                       value="<?php echo $cart['year']?>"        required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    Organizer Name
                                </label>
                                <input class="form-control" type="text" placeholder="contact" name="organizer"
                                       value="<?php echo $cart['organizer']?>"        required="">
                            </div>
                            <div class="col-md-12 mt-md-0 mt-4">
                                <label>
                                    Title
                                </label>
                                <input class="form-control" type="text" placeholder="title" name="title"
                                       value="<?php echo $cart['title']?>"        required="">
                            </div>
                            <div class="col-md-12 mt-md-0 mt-4">
                                <label>
                                    Participate Name
                                </label>
                                <input class="form-control" type="text" placeholder="name" name="pname"
                                       value="" required="">
                            </div>
                            <div class="col-md-12 mt-md-0 mt-4">
                                <label>
                                    Participate Email
                                </label>
                                <input class="form-control" type="email" placeholder="email" name="email"
                                       value=""        required="">
                            </div>

                            <div class="col-md-12 mt-md-0 mt-4">
                                <label>
                                    Participate Phone
                                </label>
                                <input class="form-control" type="number" placeholder="phone" name="phone"
                                       value=""        required="">
                            </div>




                            <div class="col-md-12 mt-md-0 mt-4">
                                <label>
                                    College Name
                                </label>
                                <input class="form-control" type="text" placeholder="collegename" name="cname"
                                       value=""        required="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    Upload Your File
                                </label>
                                <input type="file"  class="form-control" placeholder="abstract" name="paper"
                                       required="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-12">
                        <div class="offset-5"></div>
                        <div class="col-md-3">
                            <button type="submit"
                                    class="btn btn-aasana-w3 btn-block w-100 font-weight-bold text-uppercase">UPLOAD
                            </button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </form>

        </div>

    </div>
</div>

<!-- footer -->

<!-- //footer -->

<?php include_once ('application/views/includes/header.php');?>

<!-- // register -->
<!-- js -->
<script src="<?php echo base_url()?>js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- testimonials  Responsiveslides -->
<script src="<?php echo base_url()?>js/responsiveslides.min.js"></script>
<script>
    // You can also use"$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $(".slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script src="<?php echo base_url()?>js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>

<script>
    $(document).ready(function () {

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="<?php echo base_url()?>js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<script src="<?php echo base_url()?>js/counter.js"></script>

<script src="<?php echo base_url()?>js/bootstrap.js"></script>
</body>

</html>