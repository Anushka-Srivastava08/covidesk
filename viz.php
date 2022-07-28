<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--meta name="theme-color" content="rgba(22, 21, 63, 0.952)"-->
  <title>Visualization</title>
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
  <script src="https://d3js.org/d3.v7.min.js"></script>
  <style>
    .grouped-bubblechart-container {
      width: 100%;
      border: 1px solid black;
      overflow: hidden;
    }

    .grouped-bubblechart-tab-container {
      max-width: 100%;
      overflow-x: auto;
    }
  </style>
</head>

<body id="top" data-spy="scroll" data-target=".navbar" data-offset="60" onload="getData()">
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
            <a class="nav-link px-4" href="ccorona.php">India Tracker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-4" href="NewsArticlesComponent.php" target="_blank">News/Articles</a>
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
  <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
  </div>
  <section class="corona_update container-fluid">
    <div class="mb-3 mt-5 up">
      <h3 class="text-center">INDIA COVID-19</h3>
    </div>
    <div class="container mt-4 grouped-bubblechart-tab-container">
      <div id="chart-conatiner" class="grouped-bubblechart-container">

      </div>
    </div>
  </section>
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

    function getData() {
      $.get('https://data.covid19india.org/v4/min/data.min.json', function(data) {
        var tbval = document.getElementById('tbval');
        states = Object.keys(data);
        stateWiseData = {
          name: "Total",
          children: []
        };
        childrenKeys = ["confirmed", "deceased", "recovered", "tested", "vaccinated1", "vaccinated2"];
        for (var index = 0; index < states.length; index++) {
          if(states[index] === "TT") { continue; }
          stateData = data[states[index]].total;
          entry = {
            name: stateCodeMap[states[index]] || states[index],
            children: []
          };
          childrenKeys.forEach((k) => {
            entry.children.push({
              name: k,
              value: stateData[k]
            });
          });
          stateWiseData.children.push(entry);
        }
        drawChart(stateWiseData);
      });
    }

    var count = 0;

    function Id(id) {
      this.id = id;
    }

    function uid(name) {
      return new Id("O-" + (name == null ? "" : name + "-") + ++count);
    }

    function drawChart(graphData) {
      var margin = {
        top: 20,
        right: 0,
        bottom: 100,
        left: 100
      };
      var height = 700;
      var width = 1000;
      var pack = (data) => d3.pack()
        .size([width - 2, height - 2])
        .padding(30)
        (d3.hierarchy(data)
          .sum((d) => d.value)
          .sort((a, b) => b.value - a.value));
      var format = d3.format(",d");
      var color = d3.scaleOrdinal([3, 0], ["#b2df8a", "#4f8bff", "#EFEFEF"]);

      var root = pack(graphData);

      var svg = d3.select("#chart-conatiner")
        .append("svg")
        .attr("height", height)
        .attr("width", "100%");

      var shadow = uid("shadow");

      svg.append("filter")
        .attr("id", shadow.id)
        .append("feDropShadow")
        .attr("flood-opacity", 0.3)
        .attr("dx", 0)
        .attr("dy", 1);

      var node = svg.selectAll("g")
        .data(d3.group(root.descendants(), (d) => d.height))
        .join("g")
        .attr("filter", shadow)
        .selectAll("g")
        .data((d) => d[1])
        .join("g")
        .attr("transform", (d) => `translate(${d.x + 1},${d.y + 1})`);

      node.append("circle")
        .attr("r", (d) => d.r)
        .attr("fill", (d) => color(d.height));
      node.append("text")
        .attr("dy", (d) => d.children ? (-d.r + (d.r / 3)) : ".2em")
        .style("text-anchor", "middle")
        .text((d) => {
          return d.data.name.trim();
        })
        .attr("font-family", "sans-serif")
        .attr("font-size", (d) => Math.min(d.r / 7, 12) + "px")
        .attr("fill", (d) => d.children ? "#000" : "#FFF")
        .style("visibility", (d) => d.parent ? "visible" : "hidden");

      var leaf = node.filter((d) => !d.children);

      leaf.select("circle")
        .attr("id", (d) => (d.leafUid = uid("leaf")).id);

      node.append("title")
        .text((d) => `${d.ancestors().map((d) => d.data.name.trim()).reverse().join("-")}:\n${format(d.value)}`);

      var zoom = d3.zoom()
        .scaleExtent([0.1, Infinity])
        .on("zoom", (event) => {
          svg.attr("transform", event.transform);
        });
      svg.call(zoom);
    }
  </script>
</body>