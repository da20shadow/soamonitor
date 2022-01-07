<?php
require_once('core/init.php');
if (isset($_SESSION['username'])){
$title = "Profile Settings - SOAMonitor.com";

$first_name = "John";
$last_name = "Doe";
$aboutMe = "Description about me....";

include ('includes/header.php');
?>
<div class="container-fluid p-1"></div>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card bg-transparent card-body p-0 border-0">
                <div class="row d-flex justify-content-between">
                    <!--Avatar -->
                    <div class="col-auto mt-4 mt-md-0">
                        <div class="avatar">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar"
                                 class="avatar-img rounded-circle border border-white border-3 shadow"
                                 width="128px" height="128px">
                        </div>
                    </div>
                    <!--Profile Info -->
                    <div class="col d-md-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h1 class="my-1 fs-4 fw-bold">
                                Mehmed Syuleyman
                                <i class="bi bi-patch-check-fill text-info small"></i>
                            </h1>
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-gem"></i>
                                    VIP Member
                                </li>
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-people text-orange me-2"></i>
                                    35 Referrals
                                </li>
                                <li class="list-inline-item h6 fw-light me-3 mb-1">
                                    <i class="bi bi-clipboard-data text-purple me-2"></i>
                                    7 Projects
                                </li>
                            </ul>
                        </div>
                        <!-- Add New Investment Button -->
                        <div class="d-flex align-items-center mt-2 mt-md-0">
                            <a href="add_new_investment.php" class="btn btn-primary mb-0"><i class="bi bi-plus-lg"></i> Add New Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--Profile Banner END-->
<!-- Account Page Content Start -->
<section class="pt-0">
    <div class="container my-4">
        <hr class="divider">
        <div class="row">
            <!--Left Sidebar -->
            <div class="col-xl-3">

                <nav class="navbar navbar-expand-md">
                    <div class="container px-1 px-xl-2 mx-0">
                        <button class="navbar-toggler m-auto collapsed my-3 w-100 bg-light border-3 border-dark shadow" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#sideBarCollapse"
                                aria-controls="sideBarCollapse"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="bi bi-list"></i>
                            Profile Menu
                        </button>
                        <div class="collapse navbar-collapse w-100 p-3 border rounded-3 bg-light shadow" id="sideBarCollapse">
                            <div class="row">
                                <div class="col-12">
                                    <a href="account.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-speedometer2 fa-fw me-2"></i>Dashboard
                                    </a>
                                </div><!--Dashboard Link END-->
                                <div class="col-12">
                                    <a href="upgrade.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-gem me-2"></i>Upgrade Account
                                    </a>
                                </div><!--Upgrade Link END-->
                                <div class="col-12">
                                    <a href="contests.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-trophy"></i> Activity Contest
                                    </a>
                                </div><!--Contest Link END-->
                                <div class="col-12">
                                    <a href="earnings.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-graph-up fa-fw me-2"></i>Earnings
                                    </a>
                                </div><!--Earnings Link END-->
                                <div class="col-12">
                                    <a href="payouts.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                                </div><!--Payouts Link END-->
                                <div class="col-12">
                                    <a href="my_investments.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-clipboard-data me-2"></i>My Investments</a>
                                </div><!--My Investments Link END-->
                                <div class="col-12">
                                    <a href="my_ads.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-megaphone me-2"></i>My Ads</a>
                                </div><!--My Ads Link END-->
                                <div class="col-12">
                                    <a href="affiliate_dashboard.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-people me-2"></i>My Referrals</a>
                                </div><!--Affiliate Dashboard Link END-->
                                <div class="col-12">
                                    <a href="edit_profile.php" class="a-m nav-link border-bottom">
                                        <i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                                </div><!--Edit Profile Link END-->
                                <div class="col-12">
                                    <a href="#" class="a-m nav-link border-bottom">
                                        <i class="bi bi-arrow-repeat me-2"></i>Subscription</a>
                                </div><!--My Subscription Link END-->
                                <div class="col-12">
                                    <a href="#" class="sign-out a-m nav-link border-bottom">
                                        <i class="bi bi-trash fa-fw me-2"></i>Delete Account</a>
                                </div><!--Delete account Links -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!--Main Content -->
            <div class="col-xl-9">
                <!-- Edit Profile -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card card-body bg-transparent border p-2 h-100">

                            <div class="row border rounded-3 m-3 p-3">

                                <h3>Edit Profile</button></h3>

                                <form class="needs-validation was-validated"
                                      novalidate="novalidate">

                                    <div class="row">

                                    <div class="col-12 col-md-6">

                                        <div class="mb-3">
                                            <label class="form-label" for="firstname">Change Avatar</label>
                                            <input type="file" class="form-control" aria-label="file Avatar" required>
                                            <div class="invalid-feedback">Example invalid form file feedback</div>
                                        </div>

                                    </div><!--Upload Avatar END -->
                                    <div class="col-12 col-md-6">

                                        <label class="form-label" for="firstname">Country:</label>
                                        <select class="form-select" required aria-label="select country">
                                            <option value="">Select Country...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antartica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France, Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                            <option value="Korea">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia, Federated States of</option>
                                            <option value="Moldova">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                            <option value="Span">Spain</option>
                                            <option value="SriLanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Viet Nam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <div class="invalid-feedback">Please, Select Country</div>
                                        <div class="valid-feedback">Good!</div>

                                    </div><!-- Select Country END -->

                                    </div> <!-- Avatar & Country END-->

                                    <div class="row">

                                    <div class="col-12 col-md-6">

                                        <label class="form-label" for="firstname">Firstname</label>
                                        <input class="form-control" type="text" name="firstname" placeholder="John"
                                               pattern="^[a-zA-Z]{3,45}$"
                                               id="firstname"
                                               value="<?php echo htmlspecialchars($first_name);?>"/>
                                        <div class="invalid-feedback">Enter Firstname</div>
                                        <div class="valid-feedback">Looks good!</div>

                                    </div><!-- First Name -->
                                    <div class="col-12 col-md-6">

                                        <label class="form-label" for="firstname">Lastname</label>
                                        <input class="form-control" type="text" name="firstname" placeholder="John"
                                               pattern="^([a-zA-Z]{3,45})$"
                                               id="firstname"
                                               value="<?php echo htmlspecialchars($last_name);?>"/>
                                        <div class="invalid-feedback">Enter Lastname</div>
                                        <div class="valid-feedback">Looks good!</div>

                                    </div><!-- Last Name -->

                                </div> <!--F name L name END -->

                                    <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="aboutMe" class="form-label">About me</label>
                                            <textarea class="form-control is-invalid" id="aboutMe"
                                                      maxlength="140"
                                                      placeholder="Required example textarea" required><?php echo htmlspecialchars($aboutMe);?></textarea>
                                            <div class="text-muted">Add brief description for your profile.</div>
                                        </div>
                                    </div>
                                </div><!--About me END-->

                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit" disabled>Save Changes</button>
                                    </div><!--Save Changes BTN -->

                                </form>

                            </div><!--Avatar, F name L name about END-->

                            <div class="row border rounded-3 m-3 p-3">

                                <h3>Social media profile</button></h3>

                                <form class="needs-validation was-validated"
                                      novalidate="novalidate">

                                    <div class="row">

                                        <div class="col-12 col-md-6">

                                            <label class="form-label" for="facebook"><i class="bi bi-facebook text-primary"></i>
                                            Enter facebook username</label>
                                            <input class="form-control" type="text" name="facebook" placeholder="fbusername"
                                                   pattern="^[a-zA-Z]{5,45}$"
                                                   id="facebook"
                                                   value="<?php echo htmlspecialchars('facebook');?>"/>
                                            <div class="invalid-feedback">Enter facebook username</div>
                                            <div class="valid-feedback">OK!</div>


                                        </div><!-- Facebook -->
                                        <div class="col-12 col-md-6">

                                            <label class="form-label" for="telegram"><i class="bi bi-telegram text-info"></i>
                                            Enter telegram username</label>
                                            <input class="form-control" type="text" name="telegram" placeholder="telegram"
                                                   pattern="^[a-zA-Z]{5,45}$"
                                                   id="telegram"
                                                   value="<?php echo htmlspecialchars('telegram');?>"/>
                                            <div class="invalid-feedback">Enter telegram username</div>
                                            <div class="valid-feedback">OK!</div>


                                        </div><!-- Telegram -->
                                        <div class="col-12 col-md-6">

                                            <label class="form-label" for="instagram"><i class="bi bi-instagram"></i>
                                            Enter Instagram username</label>
                                            <input class="form-control" type="text" name="telegram" placeholder="Instagram"
                                                   pattern="^[a-zA-Z]{5,45}$"
                                                   id="instagram"
                                                   value="<?php echo htmlspecialchars('Instagram');?>"/>
                                            <div class="invalid-feedback">Enter Instagram username</div>
                                            <div class="valid-feedback">OK!</div>


                                        </div><!-- Instagram -->
                                        <div class="col-12 col-md-6">

                                            <label class="form-label" for="youTube"><i class="bi bi-youtube text-danger"></i>
                                            Enter YouTube Profile URL</label>
                                            <input class="form-control" type="text" name="youTube" placeholder="YouTube"
                                                   pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)"
                                                   id="youTube"
                                                   value="<?php echo htmlspecialchars('YouTube');?>"/>
                                            <div class="invalid-feedback">Enter YouTube profile URL</div>
                                            <div class="valid-feedback">OK!</div>


                                        </div><!-- YouTube -->

                                    </div> <!--Facebook, Telegram END -->
                                    <div class="mb-3">
                                        <button class="btn btn-primary" type="submit" disabled>Save Changes</button>
                                    </div><!--Save Changes BTN -->

                                </form>

                            </div><!--Social Media-->

                            <div class="row border rounded-3 m-3 p-3">

                                <div class="col-12 col-md-6">
                                    <h3>Change Email</button></h3>
                                    <form class="needs-validation was-validated"
                                          novalidate="novalidate">

                                        <div class="row">

                                            <div class="col-12">
                                                <div class="bg-white p-2 border rounded-3">
                                                    <?php echo htmlspecialchars('Your email: email@mail.com');?>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <label class="form-label" for="changeEmail"><i class="bi bi-envelope"></i>
                                                    New Email</label>
                                                <input class="form-control" type="text" name="email" placeholder="new@email.com"
                                                       pattern="^([a-zA-Z0-9_.-])+@([a-zA-Z])+[.]([a-zA-Z]{2,4})+$"
                                                       id="changeEmail"/>
                                                <div class="invalid-feedback">Enter Email</div>
                                                <div class="valid-feedback">OK!</div>


                                            </div><!-- Email Input -->

                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary" type="submit" disabled>Save Changes</button>
                                        </div><!--Save Changes BTN -->

                                    </form>
                                </div><!--Change Email END -->
                                <div class="col-12 col-md-6">
                                    <h3>Change Password</button></h3>
                                    <form class="needs-validation was-validated"
                                          novalidate="novalidate">

                                        <div class="row">

                                            <div class="col-12">

                                                <label class="form-label" for="newPassword"><i class="bi bi-key"></i>
                                                    Enter New Password</label>
                                                <input class="form-control" type="text" name="newPassword" placeholder="newPassword"
                                                       id="newPassword"/>
                                                <div class="invalid-feedback">Enter New Password</div>
                                                <div class="valid-feedback">OK!</div>

                                            </div><!-- New Password Input -->
                                            <div class="col-12">

                                                <label class="form-label" for="newPasswordAgain"><i class="bi bi-key"></i>
                                                    Enter New Password Again</label>
                                                <input class="form-control" type="text" name="newPassword" placeholder="new password again"
                                                       id="newPasswordAgain"/>
                                                <div class="invalid-feedback">Enter New Password again</div>
                                                <div class="valid-feedback">OK!</div>

                                            </div><!-- New Password again Input -->
                                            <div class="col-12">

                                                <label class="form-label" for="currentPass"><i class="bi bi-key"></i>
                                                    Enter New Password Again</label>
                                                <input class="form-control" type="text" name="newPassword" placeholder="Current password"
                                                       id="currentPass"/>
                                                <div class="invalid-feedback">Enter Current Password</div>
                                                <div class="valid-feedback">OK!</div>

                                            </div><!-- Current Password Input -->

                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary" type="submit" disabled>Save Changes</button>
                                        </div><!--Save Changes BTN -->

                                    </form>
                                </div><!--Change Password END -->

                            </div><!--Email & Password -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("includes/footer.php");
}else{
    header("Location: login.php");
}
?>

