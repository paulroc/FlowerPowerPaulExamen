<?php
include("functions/functions.php");
include("admin_area/includes/db.php");
//echo $output;
?>

<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>Flower Power</title>

    <link rel="stylesheet" href="styles/style.css" media="all"/>
</head>

<body>

<!-- Main content begint hier -->
<div class="main_wrapper">

    <div class="header_wrapper">

        <div class="header_logo">
            <a href="index.php">
                <img id="logo" src="images/flower_power_examen.jpg"/>
            </a>
        </div><!--/.header_logo-->

        <div id="form">
            <form method="get" action="results.php" enctype="multipart/form-data">
                <input type="text" name="user_query" placeholder="Zoek een product"/>
                <input id="SEARCH" type="submit" name="search" value="Search"/>
            </form>
        </div>

        <div class="cart">
            <ul>
                <li class="dropdown_header_cart">
                    <div id="notification_total_cart" class="shopping-cart">
                        <img src="images/cart_icon.png" id="cart_image">
                    </div>
                </li>
            </ul>
        </div>

        <div class="register_login">
            <div class="login"><a href="login.php">Login</a></div>
            <div class="register"><a href="customer/register.php">Register</a></div>
        </div>

        <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Homepagina</a></li>
                <li><a href="all_products.php">Alle producten</a></li>
                <li><a href="my_account.php">Mijn account</a></li>
                <li><a href="cart.php">Winkelwagen</a></li>
                <li><a href="payment.php">Afrekenen</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div><!--/.header_wrapper -->

    <div class="content_wrapper">
        <div id="sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="cats">
                <li><a href="index.php">Boeketten</a></li>
                <li><a href="index.php">Losse Bloemen</a></li>
                <li><a href="index.php">Kamerplanten</a></li>

                <?php
                getCats();
                ?>
            </ul>
        </div>
        <p id="introductie_homepagina">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu eros vitae est lacinia fringilla a
            sed nibh. Sed urna dolor, aliquam eu sapien sed, pretium aliquam urna. Vivamus lacinia vulputate
            dapibus. Vivamus imperdiet ante ac quam euismod dictum. Phasellus sodales, dolor eget venenatis
            faucibus, diam est rhoncus orci, nec gravida risus arcu quis sapien. Nam vulputate sit amet diam non
            iaculis. Etiam suscipit elit risus, semper ultrices risus mollis et. Pellentesque sed risus non
            dolor blandit pretium. Praesent eu quam accumsan, congue elit in, semper magna. Phasellus accumsan
            odio in eros maximus, sed tincidunt metus pellentesque. Nulla facilisi.</p>
        <div class="foto_intro">
            <img src="images/bloemen_bruine_achtergrond.jpg" id="foto_homepagina"/>
        </div>


    </div><!-- /.content_wrapper-->

    <div id="footer">
        <h2 style="text-align:center; padding-top: 30px">&copy; 2022 ROC van Flevoland - <?php echo date('Y'); ?> Door
            Paul van Breda</h2>
    </div>
</div><!-- /.main wrapper-->
<!-- Einde van de Main container begint hier --->

</body>

</html>

