<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>World conference</title>
       
    <link href="<?php echo base_url()?>css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>css/aasana.css" type="text/css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
        <h1>
            <a class="navbar-brand text-white" href="#">
                <i class="fa fa-globe" aria-hidden="" style="color: #fff;font-size: 25px"></i>
                    <span style="color: yellow"> world</span> <span style="font-size: 20px;font-family:'Arial Black';color:a">conference</span>

            </a>
        </h1>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="events">Our Events
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="adddetails">Add Events
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false"
                            data-target="#">
                        <a href="home">Logout</a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="callbacks_container">
    <ul class="rslides slider3">
        <li class="banner banner1">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="#" role="button">View
                            More</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="banner banner2">
            <div class="container">
                <div class="banner-text">
                    <div class="slider-info">
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="#" role="button">View
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
            <h3 class="main-title-aasana-w3">EVENTS DETAILS</h3>
        </div>

        <?php
        foreach ($cats as $cat){
        ?>
        <div class="ins-sec1">
            <div class="row">
                <div class="col-md-12">
                    <div class="abt-block mb-lg-0 mb-5" style="border: 2px solid gray">
                        <div class="serv_abs serv_bottom">
                            <span class="fa fa-calendar"></span>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 py-sm-2" style="text-align: center;border: 2px solid #3f51b5;">

                                    <span style="color:#ffffff;background-color:deeppink;font-family: -apple-system;font-size: 35px;padding: 5px;border-radius: 8px "><?php echo $cat['month']?></span><br>
                                    <span style="color:#0000FF;font-weight: 900;margin-top: 3px;font-size: 40px"><?php echo $cat['date']?></span><br>
                                    <span style="color:black;font-size: 40px;font-family:Elephant;font-weight: 900"><?php echo $cat['year']?></span>

                                </div>
                                <div class="col-md-10">
                                    <hr>
                                    <p style="color:deeppink;float: right;font-size: 25px;font-weight: 900"><?php echo $cat['eventtype']?></p>
                                    <p style="color: black;font-weight:900;margin-bottom:50px;font-size: 20px ">TITLE:<span style="color: cyan;font-size: 30px"><?php echo $cat['title']?></span></p>
                                    <p style="font-size: 15px;margin-top:-20px;font-weight: 600">Organizer:<span style="color: #17a2b8;font-size: 20px"><?php echo $cat['organizer']?></span></p><br>
                                    <p style="margin-top: -30px;font-weight: 600">Category:<span style="color: #17a2b8;font-size: 20px"><?php echo $cat['eventcategory']?></span></p>
                                    <hr>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3" style="float: right">
                            <div class="btn btn-primary" style="background-color: #3f51b5;color:white;font-weight: 900">  <a style="color: white" href="<?php echo base_url()?>eview?organizer=<?php echo $cat['organizer']?>&title=<?php echo $cat['title']?>">participates</a></div>
                        </div>
                    </div>

                </div>

            </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include_once ('application/views/includes/header.php');?>
<script src="js/jquery-2.2.3.min.js"></script>

<script src="js/responsiveslides.min.js"></script>
<script>
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
</body>

</html>