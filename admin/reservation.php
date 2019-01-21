<?php
include('db.php');

$getRoom = (isset($_GET['room']) && !empty($_GET['room'])) ? $_GET['room'] : null;
?>
  <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>
  <title>PHPflow.com :  Multi step Form Using PHP,Bootstrap and jQuery</title>
</head>
<body>
  <div class="container">
    <h1></h1>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  
  <form id="regiration_form" novalidate action="action.php"  method="post">
  <fieldset>
   <u><div class="panel-heading">
                            PERSONAL INFORMATION
                        </div> </u>
   <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
                        <option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                        <option value="Prof.">Prof.</option>
                        <option value="Rev .">Rev .</option>
                        <option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>

                               </div>
                 <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>

                               </div>
                 <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div>
                 <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Indonesia" checked="">Indonesia
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Indonesia ">Non Indonesia
                                            </label>

                                </div>
                                <?php

                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                ?>
                <div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
                        <option value selected ></option>
                                                <?php
                        foreach($countries as $key => $value):
                        echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                        endforeach;
                        ?>
                                            </select>
                </div>
                <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>

                               </div>
                                <u> <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div> </u>
                                <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
                        <option value ></option>
                                                <option value="Luxury Room"
                                                    <?php echo ($getRoom === 'Luxury Room') ? 'selected': ''?>
                                                >LUXURY ROOM</option>
                                                <option value="Deluxe Room"
                                                    <?php echo ($getRoom === 'Deluxe Room') ? 'selected': ''?>
                                                >DELUXE ROOM</option>
                        <option value="Guest House"
                                                    <?php echo ($getRoom === 'Guest House') ? 'selected': ''?>
                                                >GUEST HOUSE</option>
                        <option value="Single Room"
                                                    <?php echo ($getRoom === 'Single Room') ? 'selected': ''?>
                                                >SINGLE ROOM</option>
                                            </select>
                              </div>
                <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
                        <option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                        <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                        <option value="None">None</option>


                                            </select>
                              </div>
                              <div class="form-group">
                                                          <label>Adult</label>
                                                          <input type="number" name="adult" type ="text" class="form-control" required>




                                            </div>
                                            <div class="form-group">
                                                                        <label>Children</label>
                                                                      <input type="number" name="children" type ="text" class="form-control" required>




                                                          </div>
                <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
                        <option value selected ></option>
                                                <option value="1">1</option>
                                              <!--  <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option> -->
                                            </select>
                              </div>


                <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
                        <option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
                        <option value="Half Board">Half Board</option>
                        <option value="Full Board">Full Board</option>



                                            </select>
                              </div>
                <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">

                               </div>
                 <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">

                               </div>

            


  
    <input type="button" name="data[password]" class="next btn btn-info" value="Next" />


  </fieldset>
  <fieldset>
<div class="form-group">
                                            <label>Metode Payment*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="btrans"  value="banktf" checked="">Bank Tranfer
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="btrans"  value="banktfs">Non Bank tranfer
                                            </label>
                                            

                                </div>
    <div class="form-group">
                                        
                                            <select name="bank" class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Single">01993858581 AN / BANK INTERNATIONAL </option>
                                               

                                           </select>
                              </div>
    
    <input type="button" name="next" class="next btn btn-info" value="Next" />

  </fieldset>
  <fieldset>
<div>
<label>Upload Your proof</label>
   <input type="file" name="profile_image"  required="">
   </div>
   <br>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" id="submit_data" />


  </fieldset>
  </form>
  </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});
</script>