<?php
    //define variables
    $firstnameErr = $usernameErr = $lastnameErr = $address1Err = $address2Err = $cityErr = $stateErr =
    $genderErr = $maritalErr = $emailErr = $birthdayErr = $phonenumberErr =  $zipErr = $passwordErr = $verificationErr = "";

    $firstname = $username = $lastname = $address1 = $address2 = $city = $state = $gender = $marital =
    $email = $birthday = $phonenumber = $zip = $pword = $verification = "";

    $isValid = false;

    $validCount = $check = 0;

    $reset = "Reset";

    //Check for errors use:  echo"<script>alert($validCount);</script>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $username = clean_input($_POST["username"]);
        if (empty($username)) {
            $usernameErr = "Username is required";
            $check = 1;
        } else {
            if (strlen($username) < 6 || strlen($username) > 50) {
                $usernameErr = "Username must be between 6 and 50 characters in length";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $pword = trim($_POST["pword"]);
        if (empty($pword)) {
            $passwordErr = "Password is Required";
            $check = 1;
        } else {
            if (!preg_match('/^(?=.*[0-9]+.*)(?=.*[a-z]+.*)(?=.*[A-Z])(?=.*[!@#$%^&*]+.*)[0-9a-zA-Z!@#$%&*]{8,50}$/', $pword)) {
                $passwordErr = "Password must be at least 8 characters long, and contain 1 capital, 1 lowercase, 1 digit, 1 special character";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }


        $verification = trim($_POST["verification"]);
        if (empty($verification)) {
            $verificationErr = "Must confirm password";
            $check = 1;
        } else {
            $check = trim($_POST["pword"]);
            if ($verification != $pword) {
                $verificationErr = "Passwords do not match";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $firstname = clean_input($_POST["firstname"]);
        if (empty($firstname)) {
            $firstnameErr = "First name is required";
            $check = 1;
        } else {
            if (strlen($firstname) > 50) {
                $firstnameErr = "First name must be less than 50 characters";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $lastname = clean_input($_POST["lastname"]);
        if (empty($lastname)) {
            $lastnameErr = "Last name is required";
            $check = 1;
        } else {
            if (strlen($lastname) > 50) {
                $lastnameErr = "Name must be less then 50 characters";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $address1 = clean_input($_POST["address1"]);
        if (empty($address1)) {
            $address1Err = "Address is required.";
            $check = 1;
        } else {
            if (strlen($address1) > 100) {
                $address1Err = "Address must be less than 100 characters";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $address2 = clean_input($_POST["address2"]);
        if (strlen($address2) > 100) {
            $address2Err = "Address must be less than 100 characters";
            $check = 1;
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $city = clean_input($_POST["city"]);
        if (empty($city)) {
            $cityErr = "City is required.";
            $check = 1;
        } else {
            if (strlen($city) > 50) {
                $cityErr = "City must be less than 50 characters";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        if (isset($_POST["state"])) {
            $state = clean_input($_POST["state"]);
            if (empty($state)) {
                $stateErr = "State is required.";
                $check = 1;
            } else {
                $check = 0;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $zip = trim($_POST["zip"]);
        if (empty($zip)) {
            $zipErr = "Zip Code is Required";
            $check = 1;
        } else {
            if (preg_match('/^[0-9]{5}$/', $zip) || preg_match('/^[0-9]{5}-[0-9]{4}$/', $zip)) {
                $check = 0;
            } else {
                $zipErr = "Zip code must be in ##### OR #####-#### format";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $phonenumber = trim($_POST["phonenumber"]);
        if (empty($phonenumber)) {
            $phonenumberErr = "Phone number is required.";
            $check = 1;
        } else
            if (strlen($phonenumber) != 12 || !preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phonenumber)) {
                $phonenumberErr = "Phone number in ###-###-#### format";
                $check = 1;
            }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        $email = clean_input($_POST["email"]);
        if (empty($email)) {
            $emailErr = "Email is required";
            $check = 1;
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $check = 1;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        if (isset($_POST["gender"])) {
            $gender = clean_input($_POST["gender"]);
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
                $check = 1;
            }
        } else {
            $genderErr = "Gender is required";
            $check = 1;
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        if (isset($_POST["marital"])) {
            $marital = clean_input($_POST["marital"]);
            if (empty($_POST["marital"])) {
                $maritalErr = "Martial status is required";
                $check = 1;
            }
        } else {
            $maritalErr = "Marital Status is required";
            $check = 1;
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        if (isset($_POST["birthday"])) {
            $birthday = clean_input($_POST["birthday"]);
            if (empty($birthday)) {
                $birthdayErr = "State is required.";
                $check = 1;
            } else {
                $check = 0;
            }
        }
        if ($check == 0) {
            $validCount += 1;
            $check = 0;
        }

        if ($validCount == 15) {
            $isValid = true;
        } else {
            //echo "<script>alert('Fill out all required fields');</script>";
        }
    }


    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }