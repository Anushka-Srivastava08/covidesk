<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta name="theme-color" content="rgba(22, 21, 63, 0.952)"-->
    <title>India stats</title>
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
    <style>
        .tableFixHead {
            overflow: auto;
            height: 700px;
        }

        .tableFixHead thead th {
            position: sticky;
            top: 0;
            z-index: 1;
        }

        /* Just common table stuff. Really. */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px 16px;
        }

        th {
            background: #eee;
        }
    </style>
</head>

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60" onload="getAPI()">
    <div class="wrapper nav-mobile" id="cc">
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
                        <a class="nav-link px-4 " href="index.php#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="index.php#aboutid1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="index.php#aboutid">Symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="index.php#prevention">Prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="wcorona.php">World Tracker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#cc">India Tracker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="NewsArticlesComponent.php" target="_blank">Videos/Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="donation.php" target="_blank">Donation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="corona_update container-fluid">
        <div class="mb-3 mt-5 up">
            <h3 class="text-center">INDIA COVID-19 LIVE UPDATES</h3>
        </div>

        <div class="container mt-4">
            <div class="row p-0 justify-content-center">
                <div class="col-md-2 col-6 text-center">
                    <div>
                        <h1 id="CC"></h1>
                        <p>Total Cases</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 text-center">
                    <div>
                        <h1 id="AC"></h1>
                        <p>Active Cases</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 text-center">
                    <div>
                        <h1 id="TR"></h1>
                        <p>Total Recovered</p>
                    </div>
                </div>
                <div class="col-md-2 col-6 text-center">
                    <div>
                        <h1 id="TD"></h1>
                        <p>Total Deaths</p>
                    </div>
                </div>
                <div class="col-md-2 col-12 text-center">
                    <div>
                        <h1 id="VZ"></h1>
                        <a class="nav-link px-4 " href="viz.php">Visualize</a>
                    </div>
                </div>
            </div>
        </div>

        <!--World table-->

        <div class="table-responsive tableFixHead">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <thead class="table-head">
                    <tr>
                        <th>State</th>
                        <th>Confirmed</th>
                        <th>Active</th>
                        <th>Recovered</th>
                        <th>Total Deaths</th>
                    </tr>
                </thead>
                <tbody class="table-body">

                </tbody>
            </table>
        </div>

    </section>

    <div class="container scrolltop float-right pr-5">
        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>

    <footer class="mt-5">
        <div class=" text-white text-center container-fluid footer_style">
            <p><span style="color: rgb(240, 130, 181);">STAY SAFE!!</span></p>
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

        var stateCodeMap = {
            'AN': 'Andaman and Nicobar Islands',
            'AP': 'Andra Pradesh',
            'AR': 'Arunachal Pradesh',
            'AS': 'Assam',
            'BR': 'Bihar',
            'CH': 'Chandigarh',
            'CT': 'Chattisgarh',
            'DL': 'Delhi',
            'DN': 'Dadra and Nagar Haveli',
            'GA': 'Goa',
            'GJ': 'Gujarat',
            'HP': 'Himachal Pradesh',
            'HR': 'Haryana',
            'JH': 'Jharkhand',
            'JK': 'Jammu and Kashmir',
            'KA': 'Karnataka',
            'KL': 'Kerala',
            'LA': 'Ladakh',
            'LD': 'Lakshadweep',
            'MH': 'Maharashtra',
            'ML': 'Meghalaya',
            'MN': 'Manipur',
            'MP': 'Madhya Pradesh',
            'MZ': 'Mizoram',
            'NL': 'Nagaland',
            'OR': 'Odisha',
            'PB': 'Punjab	', 
            'PY': 'Puducherry',
            'RJ': 'Rajasthan',
            'SK': 'Sikkim',
            'TG': 'Telangana',
            'TN': 'Tamil Nadu',
            'TR': 'Tripura',
            'UP': 'Uttar Pradesh	',
            'UT': 'Uttarakhand',
            'WB': 'West Bengal'
        };


        function getAPI() {

            $.get('https://data.covid19india.org/v4/min/data.min.json', function(data) {
                //console.log(data['statewise'][1]['state']);

                var table = document.getElementById('tbval');
                var tbval = table.tBodies[0];
                states = Object.keys(data);
                for (var index = 0; index < states.length; index++) {
                    if (states[index] == "TT") {
                        continue;
                    }
                    stateData = data[states[index]].total
                    var x = tbval.insertRow();
                    x.insertCell(0);
                    x.cells[0].innerHTML = stateCodeMap[states[index]] || states[index];
                    x.cells[0].style.background = '#7a4a91';
                    x.cells[0].style.color = 'white';

                    x.insertCell(1);
                    x.cells[1].innerHTML = stateData['confirmed'];

                    x.insertCell(2);
                    x.cells[2].innerHTML = stateData['confirmed'] - stateData['recovered'] - stateData['deceased'];

                    x.insertCell(3);
                    x.cells[3].innerHTML = stateData['recovered'];

                    x.insertCell(4);
                    x.cells[4].innerHTML = stateData['deceased'];

                }
            });

            $.get('https://api.coronatracker.com/v3/stats/worldometer/country', function(data) {
                var indiaData = data.filter(d => d.countryCode === 'IN')[0];
                var cc = indiaData['totalConfirmed'],
                    tr = indiaData['totalRecovered'],
                    ac = indiaData['activeCases'],
                    td = indiaData['totalDeaths'];
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