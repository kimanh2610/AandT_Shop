<?php
    $ten = 'clothingshop';
    $con = new mysqli('localhost','root', "", $ten);
    $con->set_charset('utf8');
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>