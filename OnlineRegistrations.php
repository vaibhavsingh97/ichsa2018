<?php
  $title = "Online Registrations | ICHSA 2018";
  $id_name = 'id="online-registrations-page"';
  include 'include/php/head.php';
  ?>
  <main>
    <div class="container">
      <h4 class="heading">Online Registrations</h4>
      <div class="divider"></div>
      <h5 class="center-align">Instructions: Please keep the details of the fee deposited ready before submiting registration form </h5>
      <div class="section">
        <div id="jqueryvalidation" class="section">
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel z-depth-2">
                <div class="row">
                <h4 class="header2" style="text-align:center"><?php if(isset($_GET['ok'])) { if($_GET['ok'] == '1') echo "<div id=\"card-alert\" class=\"card green\"><div class=\"card-content white-text\" style=\"font-size:24px;\"><p>You have successfully submitted form. \xF0\x9F\x98\x83</p></div></div>"; elseif($_GET['ok'] == "0") echo "<div id=\"card-alert\" class=\"card red\"><div class=\"card-content white-text\" style=\"font-size:24px;\"><p>Your submission failed!! \xF0\x9F\x98\x9E</p></div></div>";}?></h4>
                  <form class="formValidate" id="formValidate" method="post" action="saveRegDetails.php">
                  <input type="hidden" name="issubmit" value="1">
                    <div class="row">
                      <!-- Name of Deligate -->
                      <div class="input-field col s12">
                        <label for="cdeligatename">Name of Delegate *</label>
                        <input id="cdeligatename" name="cdeligatename" type="text" data-error=".errorTxt1">
                        <div class="errorTxt1"></div>
                      </div>
                      <!-- Gender -->
                      <div class="col s12">
                        <label for="genter_select">Gender *</label>
                        <p>
                          <input name="cgender" type="radio" id="gender_male" value="male" data-error=".errorTxt2" />
                          <label for="gender_male">Male</label>
                        </p>
                        <p>
                          <input name="cgender" type="radio" id="gender_female" value="female" data-error=".errorTxt2" />
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
                        <label for="cphone">Phone (Optional)</label>
                        <input id="cphone" type="number" name="cphone" data-error=".errorTxt7">
                        <div class="errorTxt7"></div>
                      </div>
                      <!-- Mobile -->
                      <div class="input-field col s12">
                        <label for="cmobile">Mobile *</label>
                        <input id="cmobile" type="number" name="cmobile" data-error=".errorTxt8">
                        <div class="errorTxt8"></div>
                      </div>
                      <!-- Whether Presenting a Paper -->
                      <div class="col s12">
                        <label for="cpresentpaper">Whether Presenting a Paper *</label>
                        <select class="error browser-default" id="cpresentpaper" name="cpresentpaper" data-error=".errorTxt9">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt9"></div>
                        </div>
                      </div>
                      <!-- Paper Title -->
                      <div class="input-field col s12">
                        <label for="cpapertitle">Paper Title *</label>
                        <input id="cpapertitle" name="cpapertitle" type="text" data-error=".errorTxt10">
                        <div class="errorTxt10"></div>
                      </div>
                      <!-- Paper ID -->
                      <div class="input-field col s12">
                        <label for="cpaperid">Paper ID *</label>
                        <input id="cpaperid" name="cpaperid" type="text" data-error=".errorTxt11">
                        <div class="errorTxt11"></div>
                      </div>
                      <!-- Registration Category -->
                      <div class="col s12">
                        <label for="cregistrationcategory">Registration Category *</label>
                        <select class="error browser-default" id="cregistrationcategory" name="cregistrationcategory" data-error=".errorTxt12">
                          <option value="" disabled selected>Choose options</option>
                          <option value="Early Bird">Early Bird</option>
                          <option value="Regular Registration">Regular Registration</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt12"></div>
                        </div>
                      </div>
                      <!-- Early Bird -->
                      <div class="col s12 hidden" id="early">
                        <label for="cregistrationcategory-option-early">Early Bird</label>
                        <select class="error browser-default" id="cregistrationcategory-option-early" name="cregistrationcategory-option-early" data-error=".errorTxt12">
                          <option id="nullEarly" value="" disabled selected>Select your package</option>
						  <option value="Regular Author Indian -- INR 6000">Regular Author Indian -- INR 6000</option>
                          <option value="Regular Author Foreigner -- USD 600">Regular Author Foreigner -- USD 600</option>
                          <option value="Full time student author Indian -- INR 3000">Full time student author Indian -- INR 3000</option>
                          <option value="Full time student author Foreigner -- USD 500">Full time student author Foreigner -- USD 500</option>
                          <option value="Only presenting a paper Indian -- INR 2000">Only presenting a paper Indian -- INR 2000</option>
                          <option value="Only presenting a paper Foreigner -- USD 300">Only presenting a paper Foreigner -- USD 300</option>
                          <option value="Only attending Indian -- INR 1500">Only attending Indian -- INR 1500</option>
                          <option value="Only attending Foreigner -- USD 100">Only attending Foreigner -- USD 100</option>
                        </select>
                      </div>
                      <!-- Regular Registration -->
                      <div class="col s12 hidden" id="regular">
                        <label for="cregistrationcategory-option-regular">Regular Registration</label>
                        <select class="error browser-default" id="cregistrationcategory-option-regular" name="cregistrationcategory-option-regular" data-error=".errorTxt12">
                          <option id="nullRegular" value="" disabled selected>Select your package</option>
						  <option value="Regular Author Indian -- INR 7500">Regular Author Indian -- INR 7500</option>
                          <option value="Regular Author Foreigner -- USD 700">Regular Author Foreigner -- USD 700</option>
                          <option value="Full time student author Indian -- INR 4500">Full time student author Indian -- INR 4500</option>
                          <option value="Full time student author Foreigner -- USD 600">Full time student author Foreigner -- USD 600</option>
                          <option value="Only presenting a paper Indian -- INR 3000">Only presenting a paper Indian -- INR 3000</option>
                          <option value="Only presenting a paper Foreigner -- USD 400">Only presenting a paper Foreigner -- USD 400</option>
                          <option value="Only attending Indian -- INR 3000">Only attending Indian -- INR 3000</option>
                          <option value="Only attending Foreigner -- USD 200">Only attending Foreigner -- USD 200</option>
                        </select>
                      </div>
                      <!-- Extra Paper Charges -->
                      <div class="col s12">
                        <label for="cpapercharges">Extra Paper Charges *</label>
                        <select class="error browser-default" id="cpapercharges" name="cpapercharges" data-error=".errorTxt13">
                          <option value="0">Not Applicable</option>
                          <option value="Indian- INR 4500">Indian- INR 2000</option>
                          <option value="Non-Indian - USD 200">Non-Indian - USD 100</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt13"></div>
                        </div>
                      </div>
                      <!-- Accommodation Needed -->
                      <div class="col s12">
                        <label for="caccomodation1">Accommodation Needed (Only for Indian participants)*</label>
                        <select class="error browser-default" id="caccomodation1" name="caccomodation1" data-error=".errorTxt14">
                          <option value="" disabled selected>Choose options</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                          <option value="Not Applicable">Not Applicable</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt14"></div>
                        </div>
                      </div>
                      <!-- Accommodation Needed -->
                      <div class="col s12 hidden" id="yes">
                        <label for="caccomodation2">Accommodation Needed (If yes) *</label>
                        <select class="error browser-default" id="caccomodation2" name="caccomodation2" data-error=".errorTxt14">
						  <option value=" " disabled selected>Select your option</option>
                          <option value="Single">Single</option>
                          <option value="Shared">Shared</option>
                        </select>
                      </div>
                      <!-- Accommodation Needed -->
                      <div class="col s12">
                        <label for="caccompanyingperson">Accompanying Person *</label>
                        <select class="error browser-default" id="caccomodation" name="caccomodation" data-error=".errorTxt15">
                          <option value="None">None</option>
                          <option value="From India -- INR 1500 (1 Person)">From India -- INR 1500 (1 Person)</option>
                          <option value="From Abroad -- USD 100 (1 Person)">From Abroad -- USD 100 (1 Person)</option>
                          <option value="From India -- INR 3000 (2 Person)">From India -- INR 3000 (2 Person)</option>
                          <option value="From Abroad -- USD 200 (2 Person)">From Abroad -- USD 200 (2 Person)</option>
                          <option value="From India -- INR 4500 (3 Person)">From India -- INR 4500 (3 Person)</option>
                          <option value="From Abroad -- USD 300 (3 Person)">From Abroad -- USD 300 (3 Person)</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt15"></div>
                        </div>
                      </div>
                      <!-- Mode of Payment -->
                      <div class="col s12">
                        <label for="cpaymentmode">Mode of Payment *</label>
                        <select class="error browser-default" id="cpaymentmode" name="cpaymentmode" data-error=".errorTxt16">
                          <option value="" disabled selected>Choose options</option>
                          <option value="Online Transaction (NEFT/RTGS/IMPS)">Online Transaction (NEFT/RTGS/IMPS)</option>
                          <option value="PayU transfer">PayU transfer</option>
                        </select>
                        <div class="input-field">
                          <div class="errorTxt16"></div>
                        </div>
                      </div>
                      <div class="divider"></div>
                      <h5 class="center">Details Of Payment</h4>
                        <div class="input-field col s12">
                          <label for="camount">Amount Paid *</label>
                          <input id="camount" type="number" name="camount" data-error=".errorTxt17">
                          <div class="input-field">
                            <div class="errorTxt17"></div>
                          </div>
                        </div>
                        <div class="input-field col s12">
                          <label for="conlinetransaction">Online Transaction ID/Ref. No. *</label>
                          <input id="conlinetransaction" type="text" name="conlinetransaction" data-error=".errorTxt18">
                          <div class="input-field">
                            <div class="errorTxt18"></div>
                          </div>
                        </div>
                        <div class="input-field col s12">
                          <label for="cdate">Date *</label>
                          <input id="cdate" type="text" class="datepicker" name="cdate" data-error=".errorTxt19">
                          <div class="input-field">
                            <div class="errorTxt19"></div>
                          </div>
                        </div>
                        <div class="input-field col s12">
                          <label for="cbankname">Bank Name *</label>
                          <input id="cbankname" type="text" name="cbankname" data-error=".errorTxt20">
                          <div class="input-field">
                            <div class="errorTxt20"></div>
                          </div>
                        </div>
                        <div class="input-field col s12">
                          <label for="cplace">Place *</label>
                          <input id="cplace" type="text" name="cplace" data-error=".errorTxt21">
                          <div class="input-field">
                            <div class="errorTxt21"></div>
                          </div>
                        </div>
                        <div class="input-field col s12">
                          <label for="cifsc">IFSC/SWIFT Code *</label>
                          <input id="cifsc" type="text" name="cifsc" data-error=".errorTxt22">
                          <div class="input-field">
                            <div class="errorTxt22"></div>
                          </div>
                        </div>
                        <center>
                          <div class="col s12 center-align">
                            <div id="cbot" class="g-recaptcha" data-sitekey="6LeHRjoUAAAAABobHGQQBHZgzlI1tvm0M51_bNbT" data-error=".errorTxt23"></div>
                          </div>
                          <div class="input-field">
                            <div class="errorTxt23"></div>
                          </div>
                        </center>
                        <div class="input-field col s12 center-align">
                          <button class="btn btn-large waves-effect waves-light submit" type="submit" name="action">Submit
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
  <script type="text/javascript" src="./assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="./assets/js/additional-methods.min.js"></script>
  <script src="assets/js/sweetalert.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script>
    $("#formValidate").validate({
      rules: {
        cdeligatename: {
          required: true,
          minlength: 5
        },
        cgender: {
          required: true
        },
        cdesignation: {
          required: true,
          minlength: 5
        },
        cinstitutename: {
          required: true,
          minlength: 5
        },
        caddress: {
          require: true,
          minLength: 5
        },
        cemail: {
          require: true,
          email: true
        },
        cmobile: {
          require: true,
          minLength: 5
        },
        cpresentpaper:{
          require: true
        },
        cpapertitle: {
          require: true,
          minlength: 5
        },
        cpaperid: {
          require: true,
          minlength: 1
        },
        cregistrationcategory: {
          require: true
        },
        cpapercharges: {
          require: true
        },
        caccomodation: {
          require: true
        },
        caccompanyingperson: {
          require: true
        },
        cpaymentmode:{
          require: true
        },
        camount:{
          require: true,
          number: true
        },
        conlinetransaction:{
          require: true
        },
        cdate:{
          require: true,
          date: true
        },
        cbankname:{
          require: true,
          minLength: 5
        },
        cplace: {
          require: true,
          minLength: 3
        },
        cifsc:{
          require: true,
          minLength: 3
        },
        cbot: {
          require: true
        },
      },
      //For custom messages
      messages: {
        cdeligatename: {
          required: "Enter your Full name",
          minlength: "Enter at least 5 characters"
        },
        cgender: {
          required: "Please select your gender"
        },
        cdesignation: {
          required: "Enter your designation",
          minlength: "Enter at least 5 characters"
        },
        cinstitutename: {
          required: "Enter Name of your Institute",
          minlength: "Enter at least 5 characters"
        },
        caddress: {
          required: "Enter your address",
          minlength: "Enter at least 5 characters"
        },
        cemail: {
          required: "Enter your email"
        },
        cmobile: {
          required: "Enter your Mobile Number",
          minlength: "Enter at least 5 characters"
        },
        cpresentpaper:{
          required: "Select yes/no"
        },
        cpapertitle:{
          required: "Enter your Paper Title",
          minlength: "Enter at least 5 characters"
        },
        cpaperid:{
          required: "Enter your Paper ID",
          minlength: "Enter at least 1 characters"
        },
        cregistrationcategory: {
          required: "Select your Registration Category"
        },
        cpapercharges: {
          required: "Select Extra paper charges"
        },
        caccomodation: {
          required: "Select Accomdation"
        },
        caccompanyingperson:{
          required: "Select Accompanying Person"
        },
        cpaymentmode:{
          required: "Select Mode of Payment"
        },
        camount:{
          required: "Enter Amount Paid"
        },
        conlinetransaction:{
          required: "Enter Online Transaction ID/ Reference Number"
        },
        cdate: {
          required: "Enter Date"
        },
        cbankname:{
          required: "Enter your Bank Name",
          minlength: "Enter at least 5 characters"
        },
        cplace: {
          required: "Enter your Place",
          minlength: "Enter at least 3 characters"
        },
        cifsc:{
          required: "Enter your IFSC/SWIFT code",
          minlength: "Enter at least 3 characters"
        },
        cbot:{
          required: "Please prove that your are human"
        }
      },
      errorElement: 'div',
      errorPlacement: function (error, element) {
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