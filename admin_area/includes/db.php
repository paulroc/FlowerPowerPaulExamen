<?php
$con = mysqli_connect("localhost", "root","","FlowerPowerPaul_cms");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
