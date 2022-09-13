<?php
include('includes/db.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product toevoegen</title>
</head>
<body bgcolor="#808080">

<form action="insert_product.php" method="post" enctype="multipart/form-data">

    <table align="center" width="795" border="2" bgcolor="#187eae">
        <tr align="center">
            <td colspan="7"><h2>Voer hier een nieuwe product in</h2></td>
        </tr>
        <tr>
            <td align="right"><b>Product titel: </b></td>
            <td><input type="text" name="product_title" size="60" required/></td>
        </tr>

        <tr>
            <td align="right"><b>Product categorie</b></td>
            <td>
                <select name="product_cat">
                    <option>Selecteer een categorie</option>

                    <?php
                    $get_cats = "select * from categories";

                    $run_cats = mysqli_query($con, $get_cats);

                    while ($row_cats = mysqli_fetch_array($run_cats)) {
                        $cat_id = $row_cats['cat_id'];

                        $cat_title = $row_cats['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right"><b>Product foto :</b></td>
            <td><input type="file" name="product_image"/></td>
        </tr>

        <tr>
            <td align="right"><b>Product prijs :</b></td>
            <td><input type="text" name="product_price" required/></td>
        </tr>

        <tr>
            <td align="right"><b>Product omschrijving</b></td>
            <td><textarea name="product_desc" cols="57" rows="5"></textarea></td>
        </tr>

        <tr align="center">
            <td colspan="7"><input type="submit" name="insert_post" value="Voeg nieuwe product toe"/></td>
        </tr>
    </table>
</form>

</body>
</html>

<?php

if (isset($_POST['insert_post'])) {
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_desc = trim(mysqli_real_escape_string($con, $_POST['product_desc']));

    $product_image = $_FILES['product_image']['name'];
    $product_image_temp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($product_image_temp, "product_images/$product_image");

    $insert_product = " insert into product (product_cat, product_title, product_price, product_desc, product_image)
 values ('$product_cat, $product_title, $product_price, $product_desc, $product_image')";

    $insert_pro = mysqli_query($con, $insert_product);

    if ($insert_pro) {
        echo "<script>alert('Product is succesvol toegevoegd')</script>";

        echo "<script>window.open('index.php?insert_product','self')</script>";
    }
}


?>

