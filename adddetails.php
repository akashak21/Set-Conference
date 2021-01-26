

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
        <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="events">Our Events
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                    <a class="nav-link scroll" href="adddetails">Add Events</a>
                </li>
                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn">
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
                        <h3>challenge yourself.</h3>
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="" role="button">View
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
                        <a class="btn btn-primary mt-4 aasana-w3-link-bnr scroll" href="" role="button">View
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
            <h3 class="main-title-aasana-w3"> ADD EVENTS DETAILS</h3>
        </div>

    </div>
</div>
        <div class="row py-lg-12 py-4">
            <div class="offset-3"></div>
            <div class="col-lg-6 mt-lg-0 mt-6">
                <div class="register-top1">
                    <form action="<?php echo base_url()?>adddetails/events" method="post" class="register-wthree">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Event name
                                    </label>
                                    <input class="form-control" type="text" placeholder="eventname" name="eventname"
                                           required="">
                                </div>

                                <div class="col-md-12">
                                    <label>
                                        Event type
                                    </label>
                                    <select class="form-control" required="" name="eventtype" style="height: 50px">
                                        <option value="select">---select---</option>
                                        <option value="conference">conference</option>
                                        <option value="seminor">seminor</option>
                                        <option value="workshop">workshop</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-md-0 mt-4">
                                    <label>Event Category</label>
                                    <select class="form-control" required="" name="category" style="height: 50px">
                                        <option value="select">---select---</option>
                                        <option value="engineering">engineering</option>
                                        <option value="medicine">medicine</option>
                                        <option value="business">business</option>
                                        <option value="mathematics">mathematics</option>
                                        <option value="lifescience">lifescience</option>
                                        <option value="law">law</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4" >


                                    <label>Date</label>
                                    <select class="form-control" required="" name="date" style="height: 50px">
                                        <option value="select">---select---</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>

                                    </select>

                                </div>

                                <div class="col-md-4">
                                    <label>Month</label>
                                    
                                    <select class="form-control" required=""  name="month" style="height: 50px">
                                        <option value="select">---select---</option>
                                        <option value="january">january</option>
                                        <option value="february">february</option>
                                        <option value="march">march</option>
                                        <option value="april">april</option>
                                        <option value="may">may</option>
                                        <option value="june">june</option>
                                        <option value="july">july</option>
                                        <option value="august">august</option>
                                        <option value="september">september</option>
                                        <option value="october">october</option>
                                        <option value="november">november</option>
                                        <option value="december">december</option>


                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Year</label>
                                    <!--                                <input type="number" class="form-control" id="email" placeholder="Email" name="email" required="">-->
                                    <select class="form-control" required="" name="year" style="height: 50px">
                                        <option value="select">---select---</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 mt-md-0 mt-4">
                                    <label>
                                        Title
                                    </label>
                                    <input class="form-control" type="text" placeholder="title" name="title"
                                           required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Contact Person
                                    </label>
                                    <input class="form-control" type="text" placeholder="contact" name="contact"
                                           required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        Description
                                    </label>
                                    <input class="form-control" type="text" placeholder="description" name="description"
                                           required="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-12">
                            <div class="offset-5"></div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-aasana-w3 btn-block w-100 font-weight-bold text-uppercase">ADD EVENT</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

<!-- footer -->

<!-- //footer -->

<?php include_once ('application/views/includes/header.php');?>

<!-- // register -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
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
<script src="js/responsiveslides.min.js"></script>
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
<!-- //testimonials  Responsiveslides -->
<!-- start-smooth-scrolling -->
<!--<script src="js/move-top.js"></script>-->
<script src="js/easing.js"></script><script src="js/bootstrap.js"></script>
</body>

</html>