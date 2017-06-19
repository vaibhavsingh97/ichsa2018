<?php
  $title = "Online Registrations | ICHSA 2018";
  $id_name = 'id="online-registrations-page"';
  include 'include/php/head.php';
?>

  <main>
    <div class="container">
      <h4 class="heading">Online Registrations</h4>
      <div class="divider"></div>
      <div class="section">
        <div id="jqueryvalidation" class="section">
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel z-depth-2">
                <div class="row">
                  <form class="formValidate" id="formValidate" method="get" action="">
                    <div class="row">
                      <!-- Name of Deligate -->
                      <div class="input-field col s12">
                        <label for="cfullname">Name of Deligate *</label>
                        <input id="cfullname" name="cfullname" type="text" data-error=".errorTxt1">
                        <div class="errorTxt1"></div>
                      </div>
                      <!-- Gender -->
                      <div class="col s12">
                        <label for="genter_select">Gender *</label>
                        <p>
                          <input name="cgender" type="radio" id="gender_male" data-error=".errorTxt2" />
                          <label for="gender_male">Male</label>
                        </p>
                        <p>
                          <input name="cgender" type="radio" id="gender_female" value="f" />
                          <label for="gender_female">Female</label>
                        </p>
                        <div class="input-field">
                          <div class="errorTxt2"></div>
                        </div>
                      </div>
                      <!-- Designation -->
                      <div class="input-field col s12">
                        <label for="cdesignation">Designation *</label>
                        <input id="cdesignation" name="cdesignation" type="text" data-error=".errorTxt3">
                        <div class="errorTxt3"></div>
                      </div>
                      <!-- Name of Institute / Organization -->
                      <div class="input-field col s12">
                        <label for="cinstitutename">Name of Institute / Organization *</label>
                        <input id="cinstitutename" name="cinstitutename" type="text" data-error=".errorTxt4">
                        <div class="errorTxt4"></div>
                      </div>
                      <!-- Address -->
                      <div class="input-field col s12">
                        <textarea id="caddress" name="caddress" class="materialize-textarea validate" data-error=".errorTxt5"></textarea>
                        <label for="caddress">Address *</label>
                        <div class="errorTxt5"></div>
                      </div>
                      <!-- Email -->
                      <div class="input-field col s12">
                        <label for="cemail">E-Mail *</label>
                        <input id="cemail" type="email" name="cemail" data-error=".errorTxt6">
                        <div class="errorTxt6"></div>
                      </div>
                      <!-- Phone -->
                      <div class="input-field col s12">
                        <label for="cphone">Phone *</label>
                        <input id="cphone" type="number" name="cphone">
                      </div>
                      <!-- Mobile -->
                      <div class="input-field col s12">
                        <label for="cmobile">Mobile *</label>
                        <input id="cmobile" type="number" name="cmobile" data-error=".errorTxt7">
                        <div class="errorTxt7"></div>
                      </div>
                      <!-- Whether Presenting a Paper -->
                      <div class="col s12">
                        <label for="cpresentpaper">Whether Presenting a Paper *</label>
                        <select class="error browser-default" id="cpresentpaper" name="cpresentpaper" data-error=".errorTxt7">
                          <!-- <option value="" disabled selected>Choose your profile</option> -->
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt7"></div>
                        </div>
                      </div>
                      <!-- Paper Title -->
                      <div class="input-field col s12">
                        <label for="cpapertitle">Paper Title *</label>
                        <input id="cpapertitle" name="cpapertitle" type="text" data-error=".errorTxt8">
                        <div class="errorTxt8"></div>
                      </div>
                      <!-- Paper ID -->
                      <div class="input-field col s12">
                        <label for="cpaperid">Paper ID *</label>
                        <input id="cpaperid" name="cpaperid" type="text" data-error=".errorTxt9">
                        <div class="errorTxt9"></div>
                      </div>
                      <!-- Registration Category -->
                      <div class="col s12">
                        <label for="cregistrationcategory">Whether Presenting a Paper *</label>
                        <select class="error browser-default" id="cregistrationcategory" name="cregistrationcategory" data-error=".errorTxt10">
                          <!-- <option value="" disabled selected>Choose your profile</option>
                          <option value="1">Yes</option>
                          <option value="2">No</option> -->
                          <option value="Full Time Student Author Indian -- INR 5000" selected="selected">Full Time Student Author Indian -- INR 5000</option>
                          <option value="Full Time Student Author Non-Indian - USD 300">Full Time Student Author Non-Indian - USD 300</option>
                          <option value="Full Time Student Author Indian Member SCRS -- INR 4500">Full Time Student Author Indian Member SCRS -- INR 4500</option>
                          <option value="Full Time Student Author Non-Indian Member SCRS -- USD 250">Full Time Student Author Non-Indian Member SCRS -- USD 250</option>
                          <option value="Regular Author Indian - INR 9500">Regular Author Indian - INR 9500</option>
                          <option value="Regular Author Non-Indian - USD 350">Regular Author Non-Indian - USD 350</option>
                          <option value="Regular Author Indian Member SCRS - INR 8500">Regular Author Indian Member SCRS - INR 8500</option>
                          <option value="Regular Author Non-Indian Member SCRS - USD 300">Regular Author Non-Indian Member SCRS - USD 300</option>
                          <option value="Only Attending Indian - INR 2000">Only Attending Indian - INR 2000</option>
                          <option value="Only Attending Non-Indian - USD 100">Only Attending Non-Indian - USD 100</option>
                          <option value="Only Attending Indian Member SCRS - INR 1500">Only Attending Indian - INR 1500</option>
                          <option value="Only Attending Non-Indian Member SCRS - USD 80">Only Attending Non-Indian - USD 80</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt10"></div>
                        </div>
                      </div>
                      <!-- Extra Paper Charges -->
                      <div class="col s12">
                        <label for="cpapercharges">Extra Paper Charges *</label>
                        <select class="error browser-default" id="cpapercharges" name="cpapercharges" data-error=".errorTxt11">
                           <!-- <option value="" disabled selected>Choose your profile</option> -->
                            <option value="0">Not Applicable</option>
                            <option value="Indian- INR 4500">Indian- INR 4500</option>
                            <option value="Non-Indian - USD 200">Non-Indian - USD 200</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt11"></div>
                        </div>
                      </div>
                      <!-- Accommodation Needed -->
                      <div class="col s12">
                        <label for="caccomodation">Accommodation Needed *</label>
                        <select class="error browser-default" id="caccomodation" name="caccomodation" data-error=".errorTxt12">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt12"></div>
                        </div>
                      </div>
                      <!-- Mode of Payment -->
                      <div class="col s12">
                        <label for="cpaymentmode">Mode of Payment *</label>
                        <select class="error browser-default" id="cpaymentmode" name="cpaymentmode" data-error=".errorTxt13">
                          <option value="Online Transaction">Online Transaction</option>
                          <option value="Demand Draft">Demand Draft (DD)</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt13"></div>
                        </div>
                      </div>
                      <div class="col s12">
                        <label for="tnc_select">T&C *</label>
                        <p>
                          <input type="checkbox" class="checkbox" id="cagree" name="cagree" data-error=".errorTxt14" />
                          <label for="cagree">Please agree to our policy</label>
                        </p>
                        <div class="input-field">
                          <div class="errorTxt14"></div>
                        </div>
                      </div>
                      <div class="input-field col s12">
                        <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                                             <i class="mdi-content-send right"></i>
                                           </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- chartist -->
  <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="assets/js/additional-methods.min.js"></script>
  <script type="javascript">
  $("#formValidate").validate({
    rules: {
      cfullname: "required",
      cgender: "required",
      cdesignation: "required",
      cinstitutename: "required",
      caddress: {
        required: true,
        minlength: 15
      },
      cemail: {
        required: true,
        email: true
      },
      cmobile: "required",
      uname: {
        required: true,
        minlength: 5
      },
      cpresentpaper: "required",
      cpapertitle: "required",
      cpaperid: "required",
      cregistrationcategory: "required",
      cpapercharges: "required",
      caccomodation: "required",
      cpaymentmode: "required",
      cagree: "required",
    },
    //For custom messages
    messages: {
      uname: {
        required: "Enter a username",
        minlength: "Enter at least 5 characters"
      },
      curl: "Enter your website",
    },
    errorElement: 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
  });
  </script>
  <?php
   include 'include/php/foot.php';
  ?>
