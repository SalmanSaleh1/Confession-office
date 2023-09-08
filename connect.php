<?php
$mysqli = new mysqli("sql200.epizy.com", "epiz_31672450", "G3A1poERkFU", "epiz_31672450_base");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
if (!mysqli_set_charset($mysqli, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($mysqli));
    exit();
}
?>
