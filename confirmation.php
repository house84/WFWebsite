<!DOCTYPE html>
<?php include 'PHP\connectioninfo.php'; ?>
<html>
    <head></head>
    <body>
        Confirmation Page <br/>

        <?php
            foreach($_POST as $KEY => $value) {
                echo "<br/> $KEY : $value<br/>";
            }
        ?>
    </body>
</html>
