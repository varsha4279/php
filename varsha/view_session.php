<?php
session_start();  // Start session

echo "<h2>Session Values</h2>";

if(isset($_SESSION["username"])) {

    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Course: " . $_SESSION["course"] . "<br>";
    echo "City: " . $_SESSION["city"] . "<br><br>";

    echo "<a href='destroy_session.php'>Destroy Session</a>";

} else {
    echo "No Session Found!";
}
?>