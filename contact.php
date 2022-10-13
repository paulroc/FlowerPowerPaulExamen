<?php
include("functions/functions.php");
include("admin_area/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact formulier</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="contact.css" media="all">
</head>
<body>
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
            <div class="login"><a href="index.php?action=login">Login</a></div>
            <div class="register"><a href="customer_register.php">Register</a></div>
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

        <div class="contact_form_midden_op_pagina">
            <main>
                <p id="titel_contactpagina">VERSTUUR E-MAIL</p>
                <form class="contact-form" action="contactform.php" method="post">
                    <input type="text" name="naam" placeholder="Volledige naam">
                    <input type="text" name="mail" placeholder="Uw e-mail adres">
                    <input type="text" name="onderwerp" placeholder="onderwerp">
                    <textarea name="message" placeholder="Bericht"></textarea>
                    <button type="submit" name="submit">Verzend e-mail</button>
                </form>
            </main>
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

