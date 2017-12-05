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
                            <i class="material-icons">directions_car</i>
                            <i class="material-icons">directions_bus</i>
                            <i class="material-icons">directions_railway</i>
                            <i class="material-icons">local_airport</i>
                            <div class="card">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                                        because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-tabs">
                                    <ul class="tabs tabs-fixed-width">
                                        <li class="tab">
                                            <a href="#test4"><i class="material-icons" style="margin: 0 auto">directions_car</i> Parking</a>
                                        </li>
                                        <li class="tab">
                                            <a class="active" href="#test5">Test 2</a>
                                        </li>
                                        <li class="tab">
                                            <a href="#test6">Test 3</a>
                                        </li>
                                        <li class="tab">
                                            <a href="#test7">Test 4</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-content grey lighten-4">
                                    <div id="test4">Test 1</div>
                                    <div id="test5">Test 2</div>
                                    <div id="test6">Test 3</div>
                                    <div id="test7">Test 4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php
   include 'include/php/foot.php';
  ?>