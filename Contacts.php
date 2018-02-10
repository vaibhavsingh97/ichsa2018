<?php
  $title = "Contacts | ICHSA 2018";
  $id_name = 'id="contacts-page"';
  include 'include/php/head.php';
?>

  <main>
    <section>
      <!--start container-->
      <div class="container">
        <div class="section">

          <p class="caption">Have a question? Don't hesitate to send us a message. Our team will be happy to help you.</p>

          <div class="divider"></div>

          <div id="contact-page" class="card">
            <div id="map"></div>
            <div class="card-content">
              <div class="row">
                <div class="col s12 m6">
                  <form class="contact-form">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" type="text" name="name">
                        <label for="first_name">Name</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" name="email">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="message" class="materialize-textarea" name="message"></textarea>
                        <label for="message">Message</label>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Send
                          <i class="mdi-content-send right"></i>
                        </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col s12 m6">
                  <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="active">
                      <div class="collapsible-header active"><i class="mdi-communication-email"></i> Need Help?</div>
                      <div class="collapsible-body" style="display: none;">
                        <ul class="collection">
                          <div class="row">
                            <div class="col s12">
                              <span class="name">Dr. Neha Yadav</span>&nbsp;&nbsp;
                            </div>
                            <div class="col s12">
                              <div class="chip">Assistant Professor (Mathematics)</div>
                            </div>
                          </div>
                          <div class="details">
                            <li class="collection-item avatar">
                              <i class="material-icons small red circle">place</i>
                              <p class="title">BML Munjal Univeristy<br>Gurgaon, India
                              </p>
                            </li>
                            <li class="collection-item avatar">
                              <i class="material-icons green circle">email</i>
                              <p class="title"><a href="mailto:neha.yadav@bml.edu.in">neha.yadav@bml.edu.in</a><br><a href="mailto:nehayadav441@gmail.com">nehayadav441@gmail.com</a>
                              </p>
                            </li>
                            <li class="collection-item avatar">
                              <i class="material-icons circle indigo">phone</i>
                              <p class="title"><a href="tel:07310751691">+91-73107-51691</a> <br><a href="tel:09627273447">+91-96272-73447</a>
                              </p>
                            </li>
                        </ul>

                        </div>
                    </li>
                  </ul>
                  </div>
                </div>

              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Company Name LLC <i class="mdi-navigation-close right"></i></span>
                <p>Here is some more information about this card.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem
                  ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Manager Name</p>
                <p><i class="mdi-communication-business cyan-text text-darken-2"></i> 125, ABC Street, New Yourk, USA</p>
                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                <p><i class="mdi-communication-email cyan-text text-darken-2"></i> support@example.com</p>
              </div>
            </div>
          </div>
        </div>
        <!--end container-->

    </section>
  </main>
  <script type="text/javascript" src="assets/js/map.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5ip1iQAihZm3p9NSSGQB19RGwxrGO6Uw&callback=initMap">
  </script>
  <?php
   include 'include/php/foot.php';
  ?>
