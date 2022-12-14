<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta name="theme-color" content="rgba(22, 21, 63, 0.952)"-->
    <title>CoviDesk</title>
    <link rel="icon" href="imes.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'CSS/style.php'; ?>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Code|Ubuntu:400,600|Dancing+Script:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

</head>

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60" onload="getAPI()">
    <div id="header"></div>
    <div class="wrapper nav-mobile" >
        <nav class="navbar navbar-expand-lg navbar-dark nav_style p-0">
            <a class="navbar-brand pl-4 py-3" href="#">CoviDesk<i class="fa fa-atom pl-2"></i></a>
            <div class="pr-2">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon dark-bg"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="#aboutid1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="#aboutid">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#prevention">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="wcorona.php">World Tracker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="ccorona.php">India Tracker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="viz.php">Visualization</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="NewsArticlesComponent.php" target="_blank">News/Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="donation.php" target="_blank">Donation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="wrapper main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="Images/unity.png" alt="UNITY" width="300" height="300" id="mainheader">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rotate"><img src="Images/corona.png" height="53rem" width="53rem"></span>na Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <section class="corona_update container-fluid">
            <div class="mb-3 up">
                <h3 class="text-center">COVID-19 UPDATES</h3>
            </div>

            <div class="container">
                <div class="row p-0">
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <div>
                            <h1 id="CC"></h1>
                            <p>Total Cases</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <div>
                            <h1 id="AC"></h1>
                            <p>Active Cases</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <div>
                            <h1 id="TR"></h1>
                            <p>Total Recovered</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <div>
                            <h1 id="TD"></h1>
                            <p>Total Deaths</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <div class="container-fluid sub_section pt-5 pb-5" id="aboutid1">
            <div class="section_header text-center mb-5 mt-4">
                <h1>About COVID-19</h1>
            </div>

            <div class="row pt-4">
                <div class="col-lg-5 col-md-12 col-12 ml-5 topper justify-content-center">
                    <img src="Images/abot.jpg" alt="ABOUT" class="img-fluid text-center">
                </div>

                <div class="col-lg-6 col-md-12 col-12 justify-content-center top1">
                    <h2>What is COVID-19 (Corona Virus)?</h2>
                    <p>COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new
                        virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019.
                    </p>
                    <p>Coronavirus are a large family of a viruses which may cause illness in animals and humans.
                        In humans, several coronavirusare known to cause respiratory infections ranging from the common cold
                        to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome
                        (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.
                    </p>
                </div>
            </div><br>
	    <div class="container">
            <div class="text-right">
                <!-- <h3>For Further Details Regarding COVOD-19</h3> -->
                <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" class="btn btn-info" target = "_blank" role="button">Know More</a>
            </div> 
        </div>
        </div>

        <div class="container-fluid pt-5 pb-5" id="aboutid">
            <div class="section_header text-center mb-5 mt-4">
                <h1>Coronavirus Symptoms</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/cough.jpg" alt="Cough" class="image-fluid" width="150" height="150">
                            <figcaption>Cough</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/runny.png" alt="nossy" class="image-fluid" width="150" height="150">
                            <figcaption>Runny Nose</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/fever.jpg" alt="fever" class="image-fluid" width="150" height="150">
                            <figcaption>Fever</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/cold.jpg" alt="Cold" class="image-fluid" width="150" height="150">
                            <figcaption>Cold</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/weak.jpg" alt="weak" class="image-fluid" width="150" height="150">
                            <figcaption>Tiredness</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 mt-5">
                        <figure class="text-center">
                            <img src="Images/breathe.jpg" alt="breathe" class="image-fluid" width="150" height="150">
                            <figcaption>Difficulty Breathing</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid sub_section pt-5 pb-5" id="prevention">
            <div class="scetion_header text-center nb-5 mt-4 mb-4">
                <h1>6 Steps Prevention Against Coronavirus</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/wash.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/sneze.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/dis.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Avoid close contact (1 meter) or maintain social distancing with people who are unwell.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/shome.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay home and self-isolated from others in the household if you feel unwell.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/news.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>Stay informed by watching news & follow the recommended practices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="Images/hos.png" alt="breathe" class="image-fluid" width="100" height="100">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p>If you have fever, cough and difficulty breathing, seek doctor or medical care early.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5" id="contact">
            <div class="section_header text-center mb-5 mt-4">
                <h1>Contact Us</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <form action="success.php" method="POST">
                            <div class="form-group">
                                <label class="l">Name</label>
                                <input type="text" class="form-control" name="username" required placeholder="Full Name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="l">Email</label>
                                <input type="email" class="form-control" name="email" required placeholder="buddy@xyz.com" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="l">Mobile no.</label>
                                <input type="number" maxlength="12" class="form-control" name="mobile" required placeholder="eg. 98XXXXXXXX" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="l">Select Symptoms</label> <br>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" name="coronasym[]" value="cold" id="customcheckbox1">
                                    <label for="customcheckbox1" class="custom-control-label">Cold</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" name="coronasym[]" value="fever" id="customcheckbox2">
                                    <label for="customcheckbox2" class="custom-control-label">fever</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" name="coronasym[]" value="breathe" id="customcheckbox3">
                                    <label for="customcheckbox3" class="custom-control-label">Breathing difficulty</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" name="coronasym[]" value="tired" id="customcheckbox4">
                                    <label for="customcheckbox4" class="custom-control-label">Weakness</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="l">Describe</label>
                                <textarea id="explain" style="resize:none;" name="message" required minlength="10" class="form-control" cols="30" rows="4" placeholder="Write Something..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container scrolltop float-right pr-5">
            <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
        </div>

        <footer class="mt-5">
            <div class=" text-white text-center container-fluid footer_style">
                <p><span style="color: rgb(240, 130, 181);">STAY SAFE!</span></p>
            </div>
        </footer>


    <script type="text/javascript">
        $('.count').counterUp({
            delay: 10,
            time: 3000
        })
        var nav = $('.nav-mobile');
        var fixedTop = 'fixed-top';
        mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.style.display = "block";
                nav.addClass(fixedTop);
            } else {
                mybutton.style.display = "none";
                nav.removeClass(fixedTop);
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

        }


        var headerHeight = $('#header').height();

        if ($(window).scrollTop() > headerHeight)
            nav.addClass(fixedTop);
        else
            nav.removeClass(fixedTop);

        function getAPI() {

            $.get('https://api.coronatracker.com/v3/stats/worldometer/global', function(data) {
                var cc = data.totalConfirmed,
                    ac = data.totalActiveCases,
                    tr = data.totalRecovered,
                    td = data.totalDeaths;
                (function($) {
                    $.fn.countTo = function(options) {
                        // merge the default plugin settings with the custom options
                        options = $.extend({}, $.fn.countTo.defaults, options || {});

                        // how many times to update the value, and how much to increment the value on each update
                        var loops = Math.ceil(options.speed / options.refreshInterval),
                            increment = (options.to - options.from) / loops;

                        return $(this).each(function() {
                            var _this = this,
                                loopCount = 0,
                                value = options.from,
                                interval = setInterval(updateTimer, options.refreshInterval);

                            function updateTimer() {
                                value += increment;
                                loopCount++;
                                $(_this).html(value.toFixed(options.decimals));

                                if (typeof(options.onUpdate) == 'function') {
                                    options.onUpdate.call(_this, value);
                                }

                                if (loopCount >= loops) {
                                    clearInterval(interval);
                                    value = options.to;

                                    if (typeof(options.onComplete) == 'function') {
                                        options.onComplete.call(_this, value);
                                    }
                                }
                            }
                        });
                    };

                    $.fn.countTo.defaults = {
                        from: 0, // the number the element should start at
                        to: 100, // the number the element should end at
                        speed: 1000, // how long it should take to count between the target numbers
                        refreshInterval: 100, // how often the element should be updated
                        decimals: 0, // the number of decimal places to show
                        onUpdate: null, // callback method for every time the element is updated,
                        onComplete: null, // callback method for when the element finishes updating
                    };
                })(jQuery);


                jQuery(function($) {
                    $('#CC').countTo({
                        from: 0,
                        to: parseInt(cc),
                        speed: 4000,
                        refreshInterval: 20,
                        onComplete: function(value) {
                            console.debug(this);
                        }
                    });
                    $('#AC').countTo({
                        from: 0,
                        to: parseInt(ac),
                        speed: 4000,
                        refreshInterval: 20,
                        onComplete: function(value) {
                            console.debug(this);
                        }
                    });
                    $('#TR').countTo({
                        from: 0,
                        to: parseInt(tr),
                        speed: 4000,
                        refreshInterval: 20,
                        onComplete: function(value) {
                            console.debug(this);
                        }
                    });
                    $('#TD').countTo({
                        from: 0,
                        to: parseInt(td),
                        speed: 4000,
                        refreshInterval: 20,
                        onComplete: function(value) {
                            console.debug(this);
                        }
                    });
                });
            });


        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>


<?php

include './Link/dbcon.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptoms = $_POST['coronasym'];
    $message = $_POST['message'];

    $check = "";
    foreach ($symptoms as $check1) {
        $check .= $check1 . ",";
    }
    $insertquery = "insert into coronamsg(username,email,mobile,symptom,message) values('$username','$email','$mobile','$check','$message')";

    $query = mysqli_query($con, $insertquery);
}

?>