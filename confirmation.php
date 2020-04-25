<!DOCTYPE html>
<?php include 'PHP\connectioninfo.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project 1</title>
    <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    <link href="./css/animation.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="jquery.1.7.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>

<body>
<?php 'PHP\selectUserData.php'; ?>


<nav class="navbar-navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="./img/morningWFsky.jpg">Wild Frontier</a>
        </div>
    </div>
</nav>

<div class="container-fluid text-left">
    <div class="row-content">
        <br><br><br>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sidenav">
            <p><a class="link" href="index.php">Home</a></p>
            <p><a class="link" href="#">Registration</a></p>
            <p><a class="link" href="animations.php">Animations</a></p>
        </div>
        <br><br><br><br><br><br>
        <form method="post" novalidate id="myForm"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 text-left">
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div id="UserDiv" class="form-group">
                            <label for="username">Username:</label>
                            <input disabled  id="username" name="username" class="form-control"
                                   type="text" placeholder="Username" value="<?php echo $username; ?>"/>
                            <span id="UserErr" class="error"> <?php echo $usernameErr;?> </span>
                        </div>
                        <div id="passDiv" class="form-group">
                            <label for="password">Password:</label>
                            <input disabled  type="password" id="password" class="form-control" name="password"
                                   placeholder="Password" value="<?php echo $password; ?>"/>
                            <span id="passErr" class="error"> <?php echo $passwordErr;?> </span>
                        </div>
                        <div id="verPassDiv" class="form-group">
                            <label for="verification">Verify Password:</label>
                            <input disabled  type="password" id="verification" class="form-control" name="verification"
                                   placeholder="Verify Password" value="<?php echo $verification; ?>"/>
                            <span id="verPassErr" class="error"><?php echo $verificationErr;?></span>
                        </div>
                        <div class="form-group" id="FirstDiv">
                            <label for="firstname">First Name:</label>
                            <input disabled  id="firstname" name="firstname" class="form-control"
                                   type="text" placeholder="First" value="<?php echo $firstname; ?>" >
                            <span id="FirstErr" class="error"> <?php echo $firstnameErr;?> </span>
                        </div>
                        <div class="form-group" id="LastDiv">
                            <label for="lastname">Last Name:</label>
                            <input disabled  id="lastname" name="lastname" class="form-control"
                                   type="text" placeholder="Last" value="<?php echo $lastname; ?>" >
                            <span id="LastErr" class="error"> <?php echo $lastnameErr;?> </span>
                        </div>
                        <div class="form-group" id="Add1Div">
                            <label for="address1">Address Line 1:</label>
                            <input disabled  id="address1" name="address1" class="form-control"
                                   type="text" placeholder="Address" value="<?php echo $address1; ?>">
                            <span id="Add1Err" class="error"> <?php echo $address1Err;?> </span>
                        </div>
                        <div class="form-group" id="Add2Div">
                            <label for="address2">Address Line 2:</label>
                            <input disabled  id="address2" name="address2" class="form-control"
                                   type="text" placeholder="Address Line 2 (Optional)" value="<?php echo $address2;?>" >
                            <span id="Add2Err" class="error"> <?php echo $address2Err;?> </span>
                        </div>
                        <div class="form-group" id="CityDiv">
                            <label for="city">City:</label>
                            <input disabled  id="city" name="city" class="form-control"
                                   type="text" placeholder="City" value="<?php echo $city;?>" >
                            <span id="CityErr" class="error"> <?php echo $cityErr;?> </span>
                        </div>
                    </div>
                    <!-- <div class="col-xs-0 col-sm-3 col-md-3 col-lg-3 center-block">
                     </div
                     -->
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group" id="StateDiv">
                            <label for="state">State:</label>
                            <select  disabled  id="state" name="state" class="form-control"
                                    value="<?php echo $state;?>">
                                <option value="">--Please Select--</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="AA">Armed Forces Americas</option>
                                <option value="AP">Armed Forces Pacific</option>
                                <option value="AE">Armed Forces Others</option>
                            </select>
                            <span id="StateErr" class="error"> <?php echo $stateErr;?> </span>
                        </div>
                        <div class="form-group" id="ZipDiv">
                            <label for="zip">Zip Code:</label>
                            <input disabled  id="zip" name="zip" class="form-control"
                                   type="text" placeholder="Zip Code" value="<?php echo $zip;?>"/>
                            <span id="ZipErr" class="error"> <?php echo $zipErr;?> </span>
                        </div>
                        <div class="form-group" id="PhoneDiv">
                            <label for="phonenumber">Phone Number:</label>
                            <input disabled  id="phonenumber" name="phonenumber" class="form-control"
                                   type="text" placeholder="###-###-####" value="<?php echo $phonenumber;?>"/>
                            <span id="PhoneErr" class="error"> <?php echo $phonenumberErr;?> </span>
                        </div>

                        <div class="form-group" id="EmailDiv">
                            <label for="email">Email:</label>
                            <input disabled  id="email" type="email" class="form-control"
                                   placeholder="Email" name="email" value="<?php echo $email;?>" />
                            <span id="EmailErr" class="error"> <?php echo $emailErr;?> </span>
                        </div>

                        <div class="form-group">
                            <label for="gender" id="gender">Gender:</label><br>
                            <input disabled  type="radio" required="true" name="gender" id="maleGender"
                                <?php if ($gender=="maleGender") {echo "checked";}?>
                                   value="male"/> <label for="maleGender">Male</label><br>
                            <input disabled  type="radio"
                                   name="gender" id="femaleGender"
                                <?php if ($gender=="femaleGender") {echo "checked";}?>
                                   value="female"/> <label for="femaleGender">Female</label><br>
                            <input disabled  type="radio"
                                   name="gender" id="otherGender"
                                <?php if ($gender=="otherGender") {echo "checked";}?>
                                   value="other"/> <label for="otherGender">Other</label>
                            <span id="GenderErr" class="error"> <br/> <?php echo $genderErr;?> </span>
                        </div>
                        <div class="form-group">
                            <label for="marital" id="marital">Marital Status:</label><br>
                            <input disabled  type="radio" required="true" name="marital" id="married"
                                <?php if ($marital=="married") {echo "checked";}?>
                                   value="married"/> <label for="married">Married</label><br>
                            <input disabled  type="radio" name="marital" id="notMarried"
                                <?php if ($marital=="notMarried") {echo "checked";}?>
                                   value="notMarried"/> <label for="notMarried">Not Married</label><br>
                            <span id="GenderErr" class="error"> <?php echo $maritalErr;?> </span>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Date of Birth:</label>
                            <input disabled type="date" name="birthday" id="birthday" value="<?php echo $birthday;?>">
                            <span id="BirthdayErr" class="error"> <br/> <?php echo $birthdayErr;?> </span>
                        </div>

                       <br><br><br>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
        </form>
    </div>
</div>
<br><br><br><br>
<footer class="navbar navbar-fixed-bottom">
    <div class="container-fluid text-center">
        <div class="row-links">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 f_link">
                <a class="link" href="https://www.linkedin.com/in/nickjhouse" target="_blank">LinkedIn</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 f_link">
                <a class="link" href="https://www.github.com/house84" target="_blank">GitHub</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 f_link">
                <a class="link" href="https://media1.giphy.com/media/l0NwKAlZzZ9pyi9fa/giphy.gif?cid
                =790b76116b478002c700e5c58ec15190d395842248e6bbde&rid=giphy.gif" target="_blank">The Best</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            </div>
        </div>
    </div>
</footer>

</body>
