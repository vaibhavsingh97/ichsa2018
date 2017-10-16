<?php
  $title = "SCRS Travel Grant &amp; Registration Fees | ICHSA 2018";
  $id_name = 'id="registration-page"';
  include 'include/php/head.php';
?>

    <main>
        <div class="container">
            <h4 class="heading">SCRS Travel Grant &amp; Registration Fee Support</h4>
            <div class="divider"></div>
            <div class="section">
                <div class="row">
                    <div class="col s12">
                        <div class="card darken-1 z-depth:2">
                            <div class="card-content black-text">
                                <p style="text-align:justify;"> A select number of candidates will be supported for the travel and registration grant by
                                    Soft Computing Research Society. It is only applicable to the Indian Research Scholars
                                    and Students which are currently enrolled at some University/Institute. The nature of
                                    support will be as follows:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="highlight" class="section scrollspy">
                        <div class="row">
                            <div class="col s12">
                                <table class="highlight centered">
                                    <tbody>
                                        <tr>
                                            <td>Travel Grant</td>
                                            <td>Maximum of INR 3000</td>
                                            <td>Recipient Needs to produce a ticket of public transport by any means Air/Rail/Road
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Registration Fee</td>
                                            <td>INR 2500</td>
                                            <td>Rest registration fee amount has to be paid by recipient</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p style="font-size:18px;color:yelow;"><a class="btn btn-floating pulse"><i class="material-icons">info</i></a>&nbsp;&nbsp;&nbsp;All the eligible scholars and students are requested to fill the following form, also upload the
following filled and signed form. <a href="Downloads.php">Download the form here</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="jqueryvalidation" class="section">
            <div class="row">
              <div class="col s12 m12 l12">
                  <div class="col s12 m12 l12">
                        <div class="card-panel">
                        <h4 class="header2" style="text-align:center">Form for application</h4>
                        <h4 class="header2" style="text-align:center"><?php if(isset($_GET['ok'])) { if($_GET['ok'] == '1') echo "<div id=\"card-alert\" class=\"card green\"><div class=\"card-content white-text\" style=\"font-size:24px;\"><p>You have successfully submitted form. \xF0\x9F\x98\x83</p></div></div>"; elseif($_GET['ok'] == "0") echo "<div id=\"card-alert\" class=\"card red\"><div class=\"card-content white-text\" style=\"font-size:24px;\"><p>Your submission failed!! \xF0\x9F\x98\x9E</p></div></div>";}?></h4>
                            <div class="row">
                                <form class="formValidate" id="formValidate" method="post" action="SCRSSTore.php" enctype="multipart/form-data">
                                    <input type="hidden" name="issubmit" value="true" />
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="name">Name*</label>
                                            <input id="name" name="name" type="text" data-error=".errorTxt1">
                                            <div class="errorTxt1"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="fname">Fathers Name*</label>
                                            <input id="fname" name="fname" type="text" data-error=".errorTxt2">
                                            <div class="errorTxt2"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="titleOfPaper">Title of the Paper*</label>
                                            <input id="titleOfPaper" name="titleOfPaper" type="text" data-error=".errorTxt3">
                                            <div class="errorTxt3"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="paperID">PaperId*</label>
                                            <input id="paperID" name="paperID" type="text" data-error=".errorTxt4">
                                            <div class="errorTxt4"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="nameOfInstitute">Name of the Institute*</label>
                                            <input id="nameOfInstitute" name="nameOfInstitute" type="text" data-error=".errorTxt5">
                                            <div class="errorTxt5"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="instituteRollNumber">Institute Registration No./ Roll No.*</label>
                                            <input id="instituteRollNumber" name="instituteRollNumber" type="text" data-error=".errorTxt6">
                                            <div class="errorTxt6"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="yearOfAdmission">Year of admission*</label>
                                            <input id="yearOfAdmission" name="yearOfAdmission" type="text" data-error=".errorTxt7">
                                            <div class="errorTxt7"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="nameOfTheCity">Name of the city*</label>
                                            <input id="nameOfTheCity" name="nameOfTheCity" type="text" data-error=".errorTxt8">
                                            <div class="errorTxt8"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="nearestPlace">Nearest Railway Station/ Airport*</label>
                                            <input id="nearestPlace" name="nearestPlace" type="text" data-error=".errorTxt9">
                                            <div class="errorTxt9"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="totalFare">Tentative Travel Fare (To and Fro)*</label>
                                            <input id="totalFare" name="totalFare" type="text" data-error=".errorTxt10">
                                            <div class="errorTxt10"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="ccomment" name="ccomment" class="materialize-textarea validate" data-error=".errorTxt11"></textarea>
                                            <label for="ccomment">Any other Information *</label>
                                            <div class="errorTxt11"></div>
                                        </div>
                                        <div id="file-upload" class="section" style="margin: 5px; text-align: center;" data-error=".errorTxt12">
                                            <div class="row section">
                                                <div class="col s12">
                                                    <p style="text-align: right;">Maximum file upload size 2MB.</p>
                                                    <input type="file" id="input-file-max-fs" name="file" class="dropify" data-max-file-size="2M" />
                                                </div>
                                            </div>
                                        </div>                  
                                        <div class="input-field col s12 center-align">
                                            <button class="btn waves-effect waves-light submit" type="submit" name="action">Submit
                                              <i class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>
    </main>
    <script type="text/javascript" src="./assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./assets/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="./assets/js/dropify.min.js"></script>
    <script type="text/javascript" src="./assets/js/angular.min.js"></script>
    <script>
    $("#formValidate").validate({
        rules: {
            name: {
                required: true,
                minlength: 5
            },
            fname: {
                required: true,
                minlength: 5
            },
            titleOfPaper: {
                required: true,
                minlength: 10
            },
            paperID: {
                required: true,
                minlength: 1
            },
            nameOfInstitute: {
                required: true,
                minlength: 5
            },
            instituteRollNumber: {
                required: true,
                minlength: 2
            },
            yearOfAdmission: {
                required: true,
                minlength: 4
            },
            nameOfTheCity: {
                required: true,
                minlength: 5
            },
            nearestPlace: {
                required: true,
                minlength: 5
            },
            totalFare: {
                required: true,
                minlength: 3
            },
            ccomment: {
                required: false,
                minlength: 15
            },
            file: {
                required: true,
            },
        },
        //For custom messages
        messages: {
            name: {
                required: "Enter your Full name",
                minlength: "Enter at least 5 characters"
            },
            fname: {
                required: "Enter your Fathers Name",
                minlength: "Enter at least 5 characters"
            },
            titleOfPaper: {
                required: "Enter Title of the Paper",
                minlength: "Enter at least 10 characters"
            },
            paperID: {
                required: "Enter Paper ID",
                minlength: "Enter at least 1 characters"
            },
            nameOfInstitute: {
                required: "Enter Name of your Institute",
                minlength: "Enter at least 5 characters"
            },
            instituteRollNumber: {
                required: "Enter Institute Registration Number/ Roll Number",
                minlength: "Enter at least 2 characters"
            },
            yearOfAdmission: {
                required: "Enter Year of admisson",
                minlength: "Enter at least 5 characters"
            },
            nameOfTheCity: {
                required: "Enter name of the city",
                minlength: "Enter at least 5 characters"
            },
            nearestPlace: {
                required: "Enter name of nearest Railway Station/ Airport",
                minlength: "Enter at least 5 characters"
            },
            totalFare: {
                required: "Enter tentative travel fare (To and Fro)",
                minlength: "Enter at least 3 characters"
            },
            file: {
                required: "Please upload your file",
            },
            curl: "Enter your website",
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

    $('.dropify').dropify();
    // Used events
    var drEvent = $('.dropify-event').dropify();

    drEvent.on('dropify.beforeClear', function (event, element) {
        return confirm("Do you really want to delete \"" + element.filename + "\" ?");
    });

    drEvent.on('dropify.afterClear', function (event, element) {
        alert('File deleted');
    });
    </script>
    <?php
   include 'include/php/foot.php';
  ?>