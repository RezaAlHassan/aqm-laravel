
<?php include('C:\xampp\htdocs\aqm\resources\views\overview.php'); ?>
<?php include('C:\xampp\htdocs\aqm\resources\views\count.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
     - different shapes like bubbles conatining info
     - feature to include no of visits to sites 
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AQM</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/select2.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">

    <nav id="header-navbar" class="navbar navbar-expand-lg py-6">
        <div id="title" class="container">

            <a id="logo" class="d-flex text-white text-center">
                <div class="px-2 mt-1">
                    <img src="../assets/img/bd-flag.jpg" height="20px" alt="">
                </div>
                <h3>AQM</h3>
            </a>


        </div>

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_izy5ndvp.json"  background="transparent"  speed="1"  style="width: 50px; height: 50px;"  loop  autoplay></lottie-player>
    </nav>
    

    <div class="jumbotron d-flex align-items-center">
        <div class="container text-center">
            <h2 id="subtitle" class="display-1 mb-4">AQM measures air quality in real time for all districts in
               <b> Bangladesh</b></h1>
        </div>
        

        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="triangle triangle-1">
            <img src="../assets/img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-2">
            <img src="../assets/img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-3">
            <img src="../assets/img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-4">
            <img src="../assets/img/obj_triangle.png" alt="">
        </div>
    </div>


    <!-- Features Section-->

    <section id="features" class="bg-white">
        <div class="container">
            <div class="section-content">
                <!-- Section Title -->
                <div class="title-wrap mb-5" data-aos="fade-up">
                    <h2 class="section-title">
                        Data
                    </h2>
                    <p class="section-sub-title">Air quality data is displayed in a number of ways<br> Choose your pick
                    </p>
                </div>
                <!-- End of Section Title -->
                <div class="row">
                    <!-- Features Holder-->
                    <div class="col-md-10 offset-md-1 features-holder">
                        <div class="row">
                            <!-- Features Item -->
                            <div class="col-md-4 col-sm-12 text-center mt-4">
                                <a href="#map">
                                    <div class="pointer p-5 mb-4" data-aos="fade-up">

                                        <div class="my-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z" />
                                            </svg>
                                        </div>
                                        <h4>Map</h4>
                                        <p>AQI level based on colors, shown on the Bangladesh map divided among its many
                                            districts</p>

                                    </div>
                                </a>

                                <a href="#dailyLC">
                                    <div class="pointer  p-5 mb-4" data-aos="fade-up">
                                        <div class="my-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
                                            </svg>
                                        </div>
                                        <h4>Chart:Daily</h4>
                                        <p>Division based AQI on a (PM vs district) line chart</p>
                                    </div>
                            </div>
                            </a>


                            <!-- End of Feature Item -->
                            <!-- Features Item -->
                            <div class="col-md-4 col-sm-12 text-center mt-4">
                                <a href="#yearlyLC">
                                    <div class="pointer p-5 mb-4" data-aos="fade-up">
                                        <div class="my-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
                                            </svg>
                                        </div>
                                        <h4>Chart:Yearly</h4>
                                        <p>Division based AQI on a (PM vs year) line chart</p>
                                    </div>
                                </a>

                             <a href="#boxPlot">
                                <div class="pointer p-5 mb-4" data-aos="fade-up">
                                    <div class="my-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="currentColor" class="bi bi-layer-backward" viewBox="0 0 16 16">
                                            <path
                                                d="M8.354 15.854a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708l1-1a.5.5 0 0 1 .708 0l.646.647V4H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9v7.793l.646-.647a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1 0 .708l-3 3z" />
                                            <path
                                                d="M1 9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4.5a.5.5 0 0 1 0 1H1v2h4.5a.5.5 0 0 1 0 1H1zm9.5 0a.5.5 0 0 1 0-1H15V6h-4.5a.5.5 0 0 1 0-1H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4.5z" />
                                        </svg>
                                    </div>
                                    <h4>Box Plot</h4>
                                    <p>Season based AQI, with time filters (daily, weekly and monthly)</p>
                                </div>
                            </a>
                            </div>
                       


                            <!-- End of Feature Item -->
                            <!-- Features Item -->
                            <div class="col-md-4 col-sm-12 text-center mt-4">
                                <a href="#barChart">
                                    <div class="pointer p-5 mb-4" data-aos="fade-up">
                                        <div class="my-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                fill="currentColor" class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                            </svg>
                                        </div>
                                        <h4>Bar Chart</h4>
                                        <p>Yearly Average AQI shown in a bar chart(average PM vs Year)</p>
                                    </div>
                                </a>
                                <div class="pointer p-5 mb-4" data-aos="fade-up">
                                    <div class="my-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                            <path fill-rule="evenodd"
                                                d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                                        </svg>
                                    </div>
                                    <h4>Route Map</h4>
                                    <p>Route-wise AQI levels shown in a street map with color codes</p>
                                </div>
                            </div>
                            <!-- End of Feature Item -->
                        </div>

                    </div>
                    <!-- End of Features Holder-->
                </div>
            </div>
        </div>

        <!-- End of Features Section-->

        <section id="page3">
            
            <div class="b-example-divider"></div>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
            <div class="container" data-aos="fade-up">

                <div id="overviewTop"                 <?php
                if ($aqi->aqi <=50){
                    echo ' style="background: #024213;"';
                }
                elseif($aqi->aqi <=100){
                    echo ' style="background: #917117;"';
                }
                elseif($aqi->aqi <=150){
                    echo ' style="background: #733007;"';
                }
                elseif($aqi->aqi <=200){
                    echo ' style="background: #9e1f0b;"';
                }
                elseif($aqi->aqi <=250){
                    echo ' style="background: #2d07ed;"';
                }
                elseif($aqi->aqi <=300){
                    echo ' style="background: #0a0000;"';
                } 
                ?> class="container p-3 my-3 text-white">
                    <div class="col">
                        <div class="row ">

                            <h6 style="font-size:25px; font-weight:1000;">AQI:<span><?php
                                echo $aqi->aqi?></span></h6>
                        </div>

                        <br>
                        <div class="row">
                            <h4><?php  checkAQI($aqi) ?></h4>
                        </div>
                    </div>
                </div>

                <div id="overviewBox" class="container p-3 my-3 border">
                    <div class="col" id="overviewCont1">

                        <div class="row">
                            <p style="font-size:50px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Overview </p>
                        </div>

                        <div class="row">
                            <h5  style=" font-size:30px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Location: <?php echo $district?></h5>
                        </div>


                    </div>

                    <div class="row overviewTable">
                        <!--/ overview table -->
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Air Quality Index </p>
                            <p > <?php echo $aqi->aqi?> </p>
                        </div>
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Temperature </p>
                            <p ><?php echo $dashboard->temperature ."(*C)"?> </p>
                        </div>
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Rain Precipitation </p>
                            <p ><?php echo $dashboard->rain?> </p>
                        </div>
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Windspeed </p>
                            <p ><?php echo $dashboard->windspeed ."(km/h)"?> </p>
                        </div>
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Visibility</p>
                            <p ><?php echo $dashboard->visbility?> </p>
                        </div>
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Cloud Cover</p>
                            <p ><?php echo $dashboard->cloud?> </p>
                        </div>
                        <div class="col colStyle ">
                            <p class="tableHeadingText">Relative Humidity</p>
                            <p ><?php echo $dashboard->humidity ."%" ?> </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
 
        </section>


        <div class="b-example-divider"></div>
        <div class="section-content" data-aos="fade-up">
        <div class="container col-xxl-8 px-8">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3 title-header" > Map</h1>
                <h5 class="display-5 fw-bold lh-1 mb-3 sub-header" > Daily AQI of All Districts</h1>
                <p class="paragraph-text">The daily air quality index (AQI),  which represnts the quality of air incliding pollutants today, 
                  is shown for all districts. The data is recorded daily, delivered to our database and processed into data which 
                  can be shown in this chart.The level of air quality represented by each color is given in the legend. The authenticity of 
                  the data is absolute as the data is retrieved from government sources. </p>
              </div>
           
            <div class="col-10 col-sm-8 col-lg-6">
                <script src="https://code.highcharts.com/maps/highmaps.js"></script>
                <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
                <div id="mapContainer"></div>
            </div>

          </div>
        </div>
    </div>
      
        <div class="b-example-divider"></div>
        <!-- End of Testimonial Section-->
        <!-- Portfolio Section -->
        <section class="bg-white">
            <div id="yearlyLC" class="container">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/series-label.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <div class="section-content" data-aos="fade-up">
                    <div class="heading-section text-center">
                        <h2 style="font-family:monospace; letter-spacing: -2px;">
                            Yearly Line Chart
                        </h2>
                    </div>

                    <figure class="highcharts-figure">
                        <div id="chartContainerYearly"></div>
                    </figure>
                </div>
            </div>


        </section>
        <div class="b-example-divider"></div>
        <!-- End of Portfolio Section -->
        <!-- Client Section -->
        <section id="client">
            <div id="barChart" class="container">
                <div class="section-content" data-aos="fade-up">

                    <div class="col-md-12">
                        <!-- Section Title -->
                        <div class="title-wrap mb-5">
                            <h2 style="font-family:monospace; letter-spacing: -2px;">
                                Bar Chart
                            </h2>
                        </div>
                        <!-- End of Section Title -->
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                        <figure class="highcharts-figure">
                            <div id="barContainer"></div>

                        </figure>

                    </div>


                </div>
        </section>


        <div class="b-example-divider"></div>

        <section class="bg-white">
            <div id="dailyLC" class="container">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/series-label.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                <div class="section-content" data-aos="fade-up">
                    <div class="heading-section text-center">
                        <h2 style="font-family:monospace; letter-spacing: -2px;">
                            Daily Line Chart
                        </h2>
                    </div>

                    <figure class="highcharts-figure">
                        <div id="chartContainerDaily"></div>
                    </figure>
                </div>
            </div>


        </section>
        <!-- End of Client Section -->
        <!-- Reservation Section -->
        <div class="b-example-divider"></div>
        <section id="boxPlot" class="bg-white section-content">
            <div class="Container">
                 <script src="https://code.highcharts.com/highcharts.js"></script>
                 <script src="https://code.highcharts.com/highcharts-more.js"></script>
                 <script src="https://code.highcharts.com/modules/exporting.js"></script>
                 <script src="https://code.highcharts.com/modules/export-data.js"></script>
                 <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <div class="heading-section text-center">
            <h2 style="font-family:monospace; letter-spacing: -2px;">
               Box Plot Data
            </h2>
        </div>

        <figure class="highcharts-figure">
         <div id="bpContainer1"></div>
         <div id="bpContainer2"></div>
         <div id="bpContainer3"></div>

        </figure>
          </div>
        </section>
        <!-- End of Reservation Section -->
        <!-- Features Section-->
        <section id="cta" class="bg-fixed overlay" style="background-image: url(../assets/img/bg.jpg);">
            <div class="container">
                <div class="section-content" data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="mb-2" style="font-family:monospace; letter-spacing: -2px;">CONNECT & CONTRIBUTE</h2>
                            <p>Help us to make our readings more accurate by completing a simple survey</p>
                            <a class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#exampleModalScrollable">SURVEY</a>          
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-weight: bold;" id="exampleModalScrollableTitle">Survey</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                          <label style="font-weight: bold;" for="exampleInputEmail1">Full Name</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label style="font-weight: bold;" for="exampleInputPassword1">District</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <label style="font-weight: bold;" for="exampleInputPassword1">Air Quality</label>
                        <div class="form-check">
                            <input class="form-check-input" name="radios"  type="radio"  id="radio1" value="option1" checked>
                            <label class="form-check-label" for="radio1">
                              Healthy
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="radios"  type="radio" id="radio2" value="option2">
                            <label class="form-check-label" for="radio2">
                              Moderate
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="radios"  type="radio"  id="radio3" value="option3">
                            <label class="form-check-label" for="radio3">
                              Unhealthy
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="radios" type="radio" id="radio4" value="option4">
                            <label class="form-check-label" for="radio4">
                              Very Unhealthy
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="radios" type="radio" id="radio5" value="option5">
                            <label class="form-check-label" for="radio5">
                              Hazardous
                            </label>
                          </div>
                          <br>
                        
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                      </form>
                </div>
              </div>
            </div>
          </div>
        <!-- End of Features Section-->
        <div id="arrPrint"></div>
        </div>
        <footer class="mastfoot my-3">
            <div class="inner container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 d-flex align-items-center">

                    </div>

                    
                    <div class="col-lg-4 col-md-12">
                        <nav class="nav nav-mastfoot justify-content-center d-flex align-items-center">
                            <a class="nav-link" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a class="nav-link" href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </nav>
                    </div>
                    

                </div>
            </div>
        </footer> <!-- External JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/select2.min.js "></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
        <script src="../assets/js/isotope.min.js"></script>
        <script src="../assets/js/lightcase.js"></script>
        <script src="../assets/js/waypoint.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="../assets/js/app.min.js "></script>
        <script src="../assets/js/chart.js "></script>
        <script src="//localhost:35729/livereload.js"></script>
        
        
        <script>// MAP
            (async () => {
                const topology = await fetch(
                    "https://code.highcharts.com/mapdata/countries/bd/bd-all.topo.json"
                ).then((response) => response.json());

                
            
                //  The data is joined to map using value of 'hc-key'
                // property by default. See API docs for 'joinBy' for more info on linking
                // data and map.
                const data = [
                    ["bd-da", {{$getLatestDhakaSt->aqi}}],
                    ["bd-kh", {{$getLatestKhulnaSt->aqi}}],
                    ["bd-ba", {{$getLatestBarishalSt->aqi}}],
                    ["bd-cg", {{$getLatestChittagongSt->aqi}}],
                    ["bd-sy", {{$getLatestSylhetSt->aqi}}],
                    ["bd-rj", {{$getLatestRajshahiSt->aqi}}],
                    ["bd-rp", {{$getLatestRangpurSt->aqi}}],
                ];

               
                // the map chart
                Highcharts.mapChart("mapContainer", {
                    chart: {
                        map: topology,
                    },
            
                    title: {
                        text: "",
                    },
            
                    subtitle: {
                        text: "",
                    },
            
                    colorAxis: {
                        min: 0,
                        dataClasses: [
                            {
                                from: 0,
                                to: 50,
                                color: "#024213",
                                name: "Good",
                            },
                            {
                                from: 51,
                                to: 100,
                                color: "#917117",
                                name: "Moderate",
                            },
                            {
                                from: 101,
                                to: 150,
                                color: "#733007",
                                name: "Unhealthy For Sensitive Groups",
                            },
                            {
                                from: 151,
                                to: 200,
                                color: "#9e1f0b",
                                name: "Unhealthy ",
                            },
                            {
                                from: 201,
                                to: 250,
                                color: "#2d07ed",
                                name: "Very Unhealthy",
                            },
                            {
                                from: 251,
                                to: 300,
                                color: "#0a0000",
                                name: "Hazardous",
                            },
                        ],
                    },
            
                    series: [
                        {
                            data: data,
                            name: "AQI",
                            dataLabels: {
                                enabled: true,
                                format: "{point.name}",
                            },
                        },
                    ],
                });
            })(); //end of map
           </script>

          
          <script>
                        //should be turned to js array
                   //json object

        const barData_one = [];
        @foreach ($yearPmAverages as $yearPmAverage )
        barData_one.push(Number('{!! $yearPmAverage->pm !!}'));
        @endforeach
        //document.getElementById('arrPrint').innerHTML = barData_one;
           
          
        Highcharts.chart("barContainer", {
    chart: {
        type: "column",
    },
    title: {
        text: "",
    },
    subtitle: {
        text: "Average amount of pollutant PM2.5 in Bangladesh in recent years",
    },
    xAxis: {
        accessibility: {
            rangeDescription: "Range: 2017 to 2021",
        },
    },
    yAxis: {
        min: 0,
        title: {
            text: "Average of PM2.5",
        },
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat:
            '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: "</table>",
        shared: true,
        useHTML: true,
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
        },
        series: {
            label: {
                connectorAllowed: false,
            },
            pointStart: 2017,
        },
    },
    series: [
        {
            name: "PM2.5",
            data:  barData_one ,
        },
    ],
});

   </script>


<script>
        //data 
        const rajshahipm = [];
        @foreach ($rajshahiYearPm as $item)
        rajshahipm.push(Number('{!! $item->rajPm !!}'));
        @endforeach    
        const dhakapm = [];
        @foreach ($dhakaYearPm as $item)
        dhakapm.push(Number('{!! $item->pm !!}'));
        @endforeach
        const barishalpm = [];
        @foreach ($barishalYearPm as $item)
        barishalpm.push(Number('{!! $item->pm !!}'));
        @endforeach
        const sylhetpm = [];
        @foreach ($sylhetYearPm as $item)
        sylhetpm.push(Number('{!! $item->pm !!}'));
        @endforeach
        const ctgpm = [];
        @foreach ($ctgYearPm as $item)
        ctgpm.push(Number('{!! $item->pm !!}'));
        @endforeach
        const rangpurpm = [];
        @foreach ($rangpurYearPm as $item)
        rangpurpm.push(Number('{!! $item->pm !!}'));
        @endforeach
        const khulnapm = [];
        @foreach ($khulnaYearPm as $item)
        khulnapm.push(Number('{!! $item->pm !!}'));
        @endforeach

Highcharts.chart("chartContainerYearly", {
    title: {
        text: "",
    },

    subtitle: {
        text: "Amount of harmful pollutant 2.5 in the districts of Bangladesh",
    },

    yAxis: {
        title: {
            text: "PM2.5",
        },
    },

    xAxis: {
        accessibility: {
            rangeDescription: "Range: 2017 to 2021",
        },
    },

    legend: {
        layout: "vertical",
        align: "right",
        verticalAlign: "middle",
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false,
            },
            pointStart: 2017,
        },
    },

    series: [
        {
            name: "Dhaka",
            data: dhakapm,
        },
        {
            name: "Barishal",
            data: barishalpm,
        },
        {
            name: "Khulna",
            data: khulnapm,
        },
        {
            name: "Rajshahi",
            data: rajshahipm,
        },
        {
            name: "Sylhet",
            data: sylhetpm,
        },
        {
            name: "Chittagong",
            data: ctgpm,
        },
        {
            name: "Rangpur",
            data: rangpurpm,
        },
    ],

    responsive: {
        rules: [
            {
                condition: {
                    maxWidth: 500,
                },
                chartOptions: {
                    legend: {
                        layout: "horizontal",
                        align: "center",
                        verticalAlign: "bottom",
                    },
                },
            },
        ],
    },
});
</script>
<script>

Highcharts.chart("chartContainerDaily", {
    title: {
        text: "",
    },

    subtitle: {
        text: "Amount of harmful pollutant 2.5 in the districts of Bangladesh",
    },

    yAxis: {
        title: {
            text: "PM2.5",
        },
    },

    xAxis: {
        categories: [
            "Chittagong",
            "Rangpur",
            "Barishal",
            "Dhaka",
            "Khulna",
            "Rajshahi",
            "Sylhet",
        ],
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false,
            },
        },
    },

    series: [
        {
            name: "Concentration of PM2.5",
            data: [{{$getLatestChittagongSt->pm}}, {{$getLatestRangpurSt->pm}}, {{$getLatestBarishalSt->pm}}, {{$getLatestDhakaSt->pm}}, {{$getLatestKhulnaSt->pm}}, {{$getLatestRajshahiSt->pm}}, {{$getLatestSylhetSt->pm}}],
        },
    ],

    responsive: {
        rules: [
            {
                condition: {
                    maxWidth: 500,
                },
                chartOptions: {
                    legend: {
                        layout: "horizontal",
                        align: "center",
                        verticalAlign: "bottom",
                    },
                },
            },
        ],
    },
});
</script>
<script>
        const station = [];
        @foreach ($stationBP as $item)
        station.push('{!! $item->stationNo !!}');
        @endforeach  


     
Highcharts.chart("bpContainer1", {
    chart: {
        type: "boxplot",
    },

    title: {
        text: "Box plot of station-wise recorded PM2.5 concentration",
    },

    xAxis: {
        categories: station,
        title: {
            text: "Station No.",
        },
    },
 
    legend: {
        enabled: false,
    },

    yAxis: {
        title: {
            text: "PM2.5",
        },
    },

    series: [
        {
            name: "Observations (Conc. of PM2.5)",
            data: [
                // min, lower q, median, upper q, max
                [25, 70, 150, 170, 250],
                [50, 80, 170, 180, 270],
                [60, 90, 170, 190, 280],
                [35, 130, 140, 150, 200],
                [55, 60, 100, 120, 250],
                [45, 90, 110, 140, 220],
                [20, 100, 110, 130, 280],
                [30, 75, 100, 140, 220],
                [27, 65, 100, 160, 230],
                [70, 120, 150, 180, 250],
                [40, 110, 120, 190, 270],
                [60, 100, 110, 120, 250],
                [75, 130, 150, 180, 240],
                [10, 110, 130, 150, 270],
                [25, 90, 100, 150, 210],
                [30, 80, 83, 100, 220],
                [35, 70, 80, 90, 270],
                [40, 60, 65, 100, 220],
                [50, 70, 80, 100, 230],
                [65, 90, 150, 180, 280],
                [20, 50, 60, 100, 265],
            ],
            tooltip: {
                headerFormat: "<em>Station No: {point.key}</em><br/>",
            },
        },
    ],
});
</script>

</body>

</html>