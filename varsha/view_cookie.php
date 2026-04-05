<?php

echo "<h2>Cookie Values</h2>";

if(isset($_COOKIE["username"])) {

    echo "Username: " . $_COOKIE["username"] . "<br>";
    echo "Course: " . $_COOKIE["course"] . "<br>";
    echo "City: " . $_COOKIE["city"] . "<br><br>";

    echo "<a href='close_cookie.php'>Close Cookie</a>";

} else {
    echo "No Cookie Found!";
}
?>