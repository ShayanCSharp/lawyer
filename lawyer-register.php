<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/hover-min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/plugins/opklim-icons/style.css" />
    <link rel="stylesheet" href="assets/plugins/fontawesome-5/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.css" />
    <link rel="stylesheet" href="assets/css/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/lawyer-register.css">
</head>

<body>
    <?php include("assets/inc/nav-bar.php") ?>
    <div class="container">
        <?php include("message.php") ?>
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col d-flex justify-content-center p-0">
                    <form class="p-4 rounded bg-white" method="post" enctype="multipart/form-data">
                        <h4>SIGN UP AS A LAWYER</h4>
                        <p>UPON SUBMISSION OF THIS FORM YOU WILL BE OFFICIALLY ENROLLED AS AN ONLINE ASSOCIATE WITH US AND YOUR PROFILE WILL BE SHOWCASED ON THIS WEBSITE.
                        </p>
                        <div class="row mt-4">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="firstName" placeholder="name@example.com" onkeyup="NameValid(this)"  >
                                <label for="floatingInput">First Name</label>
                                <p class="error" id="firstNameError"></p>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="lastName" placeholder="name@example.com" onkeyup="NameValid(this)"  >
                                <label for="floatingInput">Last Name</label>
                                <p class="error" id="lastNameError"></p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="father" placeholder="name@example.com" onkeyup="NameValid(this)"  >
                                <label for="floatingInput">Father Name</label>
                                <p class="error" id="fatherError"></p>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" onkeyup="emailValid()"  >
                                <label for="floatingInput">Email Address</label>
                                <p class="error" id="emailError"></p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="password" class="form-control" id="Password" placeholder="name@example.com" onkeyup="passwordValid()"  >
                                <label for="floatingInput">Password</label>
                                <p class="error" id="PasswordError"></p>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="password" class="form-control" id="confirmPass" placeholder="name@example.com" onkeyup="confirmpasswordValid()"  >
                                <label for="floatingInput">Confrim Password</label>
                                <p class="error" id="confirmPassError"></p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <lable for="" class="form-label">Picture</lable>
                                <input type="file" class="form-control" id="file"  >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">House/Building/Plot/Street/Road*
                                </label>
                                <input type="text" id="fullAddress" class="form-control"  >
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Locality/Town/Tehsil/Taluka*
                                </label>
                                <select id="town" class="form-select"  >
                                    <option value="Default">Choose Locality/Town/Tehsil/Taluka</option>
                                    <option value="Badin Tehsil">Badin Tehsil</option>
                                    <option value="Khoski Tehsil">Khoski Tehsil</option>
                                    <option value="Matli Tehsil">Matli Tehsil</option>
                                    <option value="Shaheed Fazi Rahu Tehsil">Shaheed Fazi Rahu Tehsil</option>
                                    <option value="Talhar Tehsil">Talhar Tehsil</option>
                                    <option value="Tando Bago Tehsil">Tando Bago Tehsil</option>
                                    <option value="Jati Tehsil">Jati Tehsil</option>
                                    <option value="Karo Chan Tehsil">Karo Chan Tehsil</option>
                                    <option value="Mirpur Batharo Tehsil">Mirpur Batharo Tehsil</option>
                                    <option value="Shah Bandar Tehsil">Shah Bandar Tehsil</option>
                                    <option value="Sujawal Tehsil">Sujawal Tehsil</option>
                                    <option value="Ghorobari Tehsil">Ghorobari Tehsil</option>
                                    <option value="Keti Bandar">Keti Bandar</option>
                                    <option value="Mirpur Sakro Tehsil">Mirpur Sakro Tehsil</option>
                                    <option value="Thatta Tehsil">Thatta Tehsil</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Choose a District*
                                </label>
                                <select id="district" class="form-select">
                                    <option value="default">Choose a District</option>
                                    <option value="Abbottabad">Abbottabad</option>
                                    <option value="Astore">Astore</option>
                                    <option value="Attock">Attock</option>
                                    <option value="Awaran">Awaran</option>
                                    <option value="Awaran">Badin</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Choose a Province*
                                </label>
                                <select id="province" class="form-select">
                                    <option value="Default">Choose a Province</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Sindh">Sindh</option>
                                    <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                    <option value="Balochistan">Balochistan</option>
                                    <option value="Gilgit-Balistan">Gilgit-Balistan</option>
                                    <option value="Azad Kashmir">Azad Kashmir</option>
                                    <option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Country*
                                </label>
                                <select class="form-select" id="country">
                                    <option value="Pakistan">Pakistan</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Postal Code*
                                </label>
                                <input type="number" class="form-control" id="postal"  >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">CNIC No*
                                </label>
                                <input type="number" id="cnic" class="form-control"  >
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Date of Birth*
                                </label>
                                <input type="date" class="form-control" id="bday"  >
                            </div>
                        </div>
                        <div class="row mt-4">
                            <h5>Martial Status*
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Single" name="marri" id="single"  >
                                <label for="single" class="form-label">Single</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Married" name="marri" id="Married">
                                <label for="Married" class="form-label">Married</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Widowed" name="marri" id="Widowed">
                                <label for="Widowed" class="form-label">Widowed</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Divorced" name="marri" id="Divorced">
                                <label for="Divorced" class="form-label">Divorced</label>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <h5>Gender*
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Male" name="gender" id="Male"  >
                                <label for="Male" class="form-label">Male</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Female" name="gender" id="Female">
                                <label for="Female" class="form-label">Female</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="radio" value="Transgender" name="gender" id="Transgender">
                                <label for="Transgender" class="form-label">Transgender</label>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="mobNumber" placeholder="name@example.com">
                                <label for="floatingInput">Mobile Number*</label>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="whatNumber" placeholder="name@example.com">
                                <label for="floatingInput">Whatsapp Number*</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-4">
                                <h5>Qualifications</h5>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Select Degree You Hold*
                                </label>
                                <select id="degree" class="form-select">
                                    <option value="Default">Choose Degree</option>
                                    <option value="LLB">LLB</option>
                                    <option value="LLM">LLM</option>
                                    <option value="PhD.">PhD.</option>
                                    <option value="PGDL">PGDL</option>
                                    <option value="Bar at Law">Bar at Law</option>
                                    <option value="Diplomas">Diplomas</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">University/College*
                                </label>
                                <select id="uni-clg" class="form-select">
                                    <option value="Default">Choose University/College</option>
                                    <option value="University of Peshawar">University of Peshawar</option>
                                    <option value="Department of law islamia College University, Peshawar">Department of law islamia College University, Peshawar</option>
                                    <option value="College of law, Peshawar University">College of law, Peshawar University</option>
                                    <option value="Edwards College, Peshawar Cantt.">Edwards College, Peshawar Cantt.</option>
                                    <option value="Frontier Law College, Peshawar City">Frontier Law College, Peshawar City</option>
                                    <option value="Islamia Law College, Peshawar">Islamia Law College, Peshawar</option>
                                    <option value="Jinnah Law College, Peshawar">Jinnah Law College, Peshawar</option>
                                    <option value="Mardan Law College, Mardan">Mardan Law College, Mardan</option>
                                    <option value="Muslim Law College, Swat">Muslim Law College, Swat</option>
                                    <option value="Peshawar Law College, Peshawar">Jinnah Law College, Peshawar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Your LLB Degree Completion Date*
                                </label>
                                <input type="date" class="form-control" id="degreeComplete">
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">City of Legal Practice*
                                </label>
                                <input type="text" id="legal_city" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Enrolment Year*
                                </label>
                                <select id="enrolmentYear" class="form-select">
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 d-flex flex-column">
                                <label for="" class="form-label">Enrolment Type*
                                </label>
                                <select id="enrolementType" class="form-select">
                                    <option value="Lower Court">Lower Court</option>
                                    <option value="High Court">High Court</option>
                                    <option value="Supreme Court">Supreme Court</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label for="" class="form-label">Select Expertise</label>
                                <select id="expertise" class="form-select">
                                    <option value="Default">Select Expertise</option>
                                    <?php
                                    include("assets/inc/db_conn.php");

                                    $sql = mysqli_query($conn, "SELECT * FROM `practicearea` WHERE visible = 0");

                                    if (mysqli_num_rows($sql) > 0) {
                                        foreach ($sql as $row) {
                                    ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-4">
                                <h5>Social Links</h5>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="facebook" placeholder="www,">
                                <label for="floatingInput">Facebook</label>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="twitter" placeholder="">
                                <label for="floatingInput">Twitter</label>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="linkedin" placeholder="">
                                <label for="floatingInput">LinkedIn</label>
                            </div>
                            <div class="form-floating col-lg-6 col-md-12">
                                <input type="text" class="form-control" id="instagram" placeholder="">
                                <label for="floatingInput">Instagram</label>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <label for="" class="form-label">Write about yourself</label>
                                <textarea name="aboutLawyer" id="aboutLawyer"  class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col"><button type="submit" class="btn">Register</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("assets/inc/side-menu.php") ?>
    <!-- /.side-menu__block -->
    <?php include("assets/inc/search-pop.php") ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/jquery.enllax.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/nouislider.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/lawyer-register.js"></script>
</body>

</html>