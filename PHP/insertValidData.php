<?php
    if ($isValid) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $uname, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = $conn->prepare("INSERT INTO registration (username, password, firstName, lastName, 
            address1, city, state, zipCode, phone, email, gender, maritalStatus, dateofBirth)
            VALUES  (:username, :pword, :firstname, :lastname, :address1, :city, :state, :zip, :phonenumber, :email, :gender, :marital, :birthday)");
            $sql->bindParam(':username', $username);
            $sql->bindParam(':pword', $pword);
            $sql->bindParam(':firstname',$firstname);
            $sql->bindParam(':lastname', $lastname);
            $sql->bindParam(':address1', $address1);
            $sql->bindParam(':city', $city);
            $sql->bindParam(':state', $state);
            $sql->bindParam(':zip', $zip);
            $sql->bindParam(':phonenumber', $phonenumber);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':gender', $gender);
            $sql->bindParam(':marital', $marital);
            $sql->bindParam(':birthday', $birthday);

            $sql->execute();

            $last_id = $conn->lastInsertId();
            $_SESSION["last_id"] = "$last_id";

            header("Location: confirmation.php");
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } finally {
            $conn = null;
        }
    }
?>