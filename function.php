<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$conn = new mysqli($dbhost,'root','ubaya','elisaliedb');
if ($conn->connect_error) {
    echo "Unable to connect, please try again";
    die();
}

?>
