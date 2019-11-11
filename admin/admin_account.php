<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>TUMMY FOR YUMMY</title>
    <link rel="icon" href="../image/1004 Logo 2.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin_order.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <script defer src="../js/admin.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <?php
    include "adminHeader.inc.php";
    ?>

    <article>
        <section class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a data-toggle="pill" href="#accountProfile">Account Profile</a></li>
                        <li><a data-toggle="pill" href="#changePassword">Change Password</a></li>
                    </ul>
                </div>
                <div id="adminaccount" class="col-md-9 tab-content ">
                    <div class="tab-pane fade in active admin_card" id="accountProfile">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Adminstrator Profile</h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="username" class="col-4 col-form-label">User Name</label>
                                                    <div class="col-8">
                                                        <input id="username" name="username" placeholder="Username"
                                                            class="form-control here" type="text" value="Admin 1"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="name" class="col-4 col-form-label">First Name</label>
                                                    <div class="col-8">
                                                        <input id="name" name="name" placeholder="First Name"
                                                            class="form-control here" type="text" value="Super Power">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lastname" class="col-4 col-form-label">Last Name</label>
                                                    <div class="col-8">
                                                        <input id="lastname" name="lastname" placeholder="Last Name"
                                                            class="form-control here" type="text" value="Adminstrator">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-4 col-form-label">Email*</label>
                                                    <div class="col-8">
                                                        <input id="email" name="email" placeholder="Email"
                                                            class="form-control here" required="required" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mobileNumber" class="col-4 col-form-label">Mobile
                                                        Number*</label>
                                                    <div class="col-8">
                                                        <input id="mobileNumber" name="mobileNumber"
                                                            placeholder="Mobile Number" class="form-control here"
                                                            required="required" type="text"
                                                            onkeypress="javascript:return isNumber(event)">
                                                    </div>
                                                </div>
                                                <div class="form-group row" style="text-align: center">
                                                    <div class="col-1">
                                                        <button name="submit" type="submit" class="btn">Confirm</button>
                                                        <button name="cancel" type="cancel" class="btn"
                                                            onclick="goPrev()">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="admin_card tab-pane fade" id="changePassword">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Change Password</h4>
                                    <hr>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="form-group row">
                                            <label for="cPassword" class="col-4 col-form-label">Current
                                                Password*</label>
                                            <div class="col-8">
                                                <input id="cPassword" name="cPassword" placeholder="Current Password"
                                                    class="form-control here" type="password" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nPassword" class="col-4 col-form-label">New Password*</label>
                                            <div class="col-8">
                                                <input id="nPassword" name="nPassword" placeholder="New Password"
                                                    class="form-control here" type="password"
                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                                    size="35" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="confirmPassword" class="col-4 col-form-label">Confirm
                                                Password*</label>
                                            <div class="col-8">
                                                <input id="confirmPassword" name="confirmPassword"
                                                    placeholder="Confirm Password" class="form-control here"
                                                    type="password" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div id="message">
                                                <h4>Password must contain the following:</h4>
                                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                                <p id="number" class="invalid">A <b>number</b></p>
                                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="text-align: center">
                                            <div class="col-1">
                                                <button name="submit" type="submit" class="btn">Confirm</button>
                                                <button name="cancel" type="cancel" class="btn"
                                                    onclick="goPrev()">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <?php
    include "adminFooter.inc.php";
    ?>

</body>


</html>