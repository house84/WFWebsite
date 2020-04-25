<?php
    if ($isValid) {
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = $conn->prepare("INSERT INTO registration (username, password, firstName, lastName, 
            address1, city, state, zipCode, phone, email, gender, maritalStatus, dateofBirth)
            VALUES  (:name, '', '', '', :website, '', :comment, '', '', :email, :gender, '', CURDATE())");
            $sql->bindParam(':name', $name);
            //$sql->bindParam(':website', $website);
            //$sql->bindParam(':comment', $comment);
            $sql->bindParam(':email',$email);
            $sql->bindParam(':gender', $gender);

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