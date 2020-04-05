<?php
$conn=mysqli_connect("host,"user","pwd","db")or die("Can't Connect...");
if ($mysqli->connect_errno) {
    // Something you should not do on a public site, but this example will show you
    // anyways, is print out MySQL error related information -- you might log this
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

}
?>
