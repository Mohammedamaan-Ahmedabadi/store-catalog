<?php
include "stock/stock.php";
include "web-service/collect-and-print-data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soccer Store</title>
    <?php include "includes/styles.php"; ?>
</head>

<body>

<?php include "includes/navigation.php"; ?>

<?php include "includes/masthead.php"; ?>

<div class="container py-5">
    <h2 id="catalog">Products</h2>

    <div class="row">
        <?php printHTML(); ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>
<?php include "includes/scripts.php"; ?>

</body>
</html>