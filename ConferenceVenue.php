<?php
  $title = "Conference Venue | ICHSA 2018";
  $id_name = 'id="conference-venue-page"';
  include 'include/php/head.php';
?>

    <main>
        <div class="container">
            <h4 class="heading">Conference Venue</h4>
            <div class="divider"></div>
            <div class="section">
                <div class="section">
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-tabs">
                                    <ul class="tabs tabs-fixed-width teal">
                                        <li class="tab">
                                            <a class="white-text waves-light active" href="#parking">
                                                <i class="material-icons" style="font-size: 20px !important; vertical-align: sub; padding: 5px;">directions_car</i> Parking</a>
                                        </li>
                                        <li class="tab">
                                            <a class="white-text waves-light" href="#bus">
                                                <i class="material-icons" style="font-size: 20px !important; vertical-align: sub; padding: 5px;">directions_bus</i> Buses / Shuttles</a>
                                        </li>
                                        <li class="tab">
                                            <a class="white-text waves-light" href="#rail">
                                                <i class="material-icons" style="font-size: 20px !important; vertical-align: sub; padding: 5px;">directions_railway</i> Mainline Rail</a>
                                        </li>
                                        <li class="tab">
                                            <a class="white-text waves-light" href="#airport">
                                                <i class="material-icons" style="font-size: 20px !important; vertical-align: sub; padding: 5px;">local_airport</i> Airports</a>
                                        </li>
                                        <li class="tab">
                                            <a class="white-text waves-light" href="#ola">
                                                <i class="material-icons" style="font-size: 20px !important; vertical-align: sub; padding: 5px;">
                                                    <img src="assets/images/ola.png" height="20px" alt="">
                                                </i> Ola Cabs</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-content grey lighten-4">
                                    <div id="parking">
                                        <p>There is parking available onsite at BML Munjal University and there will be an attendant
                                            to guide and direct you upon arrival. </p>
                                    </div>
                                    <div id="bus">
                                        <p>
                                            Imformation will be updated soon.
                                        </p>
                                    </div>
                                    <div id="rail">
                                        <p> IFCO Metro station is a 40 minutes taxi ride from BML Munjal University.</p><br>
                                        <p>
                                            <strong>From New Delhi Railway Station (NDLS)</strong>: Please take Ajmeri Gate Exit and board on Metro from New Delhi Metro Station towards
                                            Huda City Centre, and deboard the metro at IFFCO CHOWK Metro station.<br>
                                            <strong>From Old Delhi Railway Station (DLI)</strong>: On the main exit you will find Chandani Chowk Metro
                                            station, please board on the train toward HUDA CITY CENTRE and deboard the metor
                                            at IFFCO CHOWK Metro Station. <br>
                                            <strong>From ISBT (Kashmere Gate) Bus Stop</strong>: Please board
                                            on the Delhi Metro at Kashmere Gate Metro Station and move towards Huda City
                                            Centre (Yellow Line) and deboard at IFFCO Chowk Metro Station. <br>
                                            You can use Delhi Metro App for better info. 
                                            <a href="https://play.google.com/store/apps/details?id=com.sraoss.dmrc" target="_blank"><img src="assets/images/google_play.png" alt="Google Play Button"></a>
                                        </p>
                                    </div>
                                    <div id="airport">
                                        <p>
                                            The Indira Gandhi International Airport airport is a 1.1 hour taxi journey to BML Munjal University.
                                        </p>
                                        <br>
                                        <img src="assets/images/location-map.jpg" style="display: block;margin: 0 auto;" alt="location Map">
                                    </div>
                                    <div id="ola">
                                        <p>
                                            To help you commute to and from the Indira Gandhi International Airport, you can opt for Ola cab.
                                            <ul class="collection">
                                                <li class="collection-item avatar">
                                                    <img src="assets/images/ola/ic_micro.png" style="vertical-align: sub;" alt="Ola Micro" class="circle">
                                                    <span class="title" style="vertical-align: sub;">
                                                        <h5 style="text-align: initial; margin-top: 10px;">Micro</h5>
                                                    </span>
                                                    <span class="secondary-content">
                                                        <p style="font-size:1.2em; margin-top:10px; text-align:center;">₹ 612 - ₹ 676 (Approx)</p>
                                                    </span>
                                                </li>
                                                <li class="collection-item avatar">
                                                    <img src="assets/images/ola/ic_mini.png" style="vertical-align: sub;" alt="Ola Mini" class="circle">
                                                    <h5 style="text-align: initial; margin-top: 10px;">Mini</h5>
                                                    <a href="#!" class="secondary-content">
                                                        <p style="font-size:1.2em; margin-top:10px; text-align:center;">₹ 650 - ₹ 718 (Approx)</p>
                                                    </a>
                                                </li>
                                                <li class="collection-item avatar">
                                                    <img src="assets/images/ola/ic_prime.png" style="vertical-align: sub;" alt="Ola Prime" class="circle">
                                                    <h5 style="text-align: initial; margin-top: 10px;">Prime Sedan</h5>
                                                    <a href="#!" class="secondary-content">
                                                        <p style="font-size:1.2em; margin-top:10px; text-align:center;">₹ 706 - ₹ 780 (Approx)</p>
                                                    </a>
                                                </li>
                                                <li class="collection-item avatar">
                                                    <img src="assets/images/ola/ic_prime_play.png" style="vertical-align: sub;" alt="Ola Prime Play" class="circle">
                                                    <h5 style="text-align: initial; margin-top: 10px;">Prime Play</h5>
                                                    <a href="#!" class="secondary-content">
                                                        <p style="font-size:1.2em; margin-top:10px; text-align:center;">₹ 706 - ₹ 780 (Approx)</p>
                                                    </a>
                                                </li>
                                                <li class="collection-item avatar">
                                                    <img src="assets/images/ola/ic_suv.png" style="vertical-align: sub;" alt="Ola SUV" class="circle">
                                                    <h5 style="text-align: initial; margin-top: 10px;">Prime SUV</h5>
                                                    <a href="#!" class="secondary-content">
                                                        <p style="font-size:1.2em; margin-top:10px; text-align:center;">₹ 991 - ₹ 1095 (Approx)</p>
                                                    </a>
                                                </li>
                                            </ul>
                                            </h5>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
           <h5> <a href="downloads.php">Click here to downlaod "How to reach Conference Venue"</a></h5>
        </div>

    </main>

    <?php
   include 'include/php/foot.php';
  ?>