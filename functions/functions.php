<?php
$con = mysqli_connect("localhost", "root", "", "FlowerPowerPaul_cms");

if (mysqli_connect_errno()) {
    echo "The Connection was not established: " . mysqli_connect_error();
}


function getCats(){
    global $con;
    $get_cats = "select * from categories";

    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {
        $cat_id = $row_cats['cat_id'];

    }

}



