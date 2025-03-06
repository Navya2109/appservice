<?php 
$product_id = isset($_GET['id']) ? $_GET['id'] : null;
$product_name = '';
$product_price = '';
$product_image = '';

if ($product_id == 1) {
    $product_name = "Product 1";
    $product_price = "$49.99";
    $product_image = "images/image1.jpg";
} elseif ($product_id == 2) {
    $product_name = "Product 2";
    $product_price = "$79.99";
    $product_image = "images/image2.jpg";
}
// Add more product conditions here if needed

?>

<?php include('header.php'); ?>

<div class="product-detail">
    <h2><?php echo $product_name; ?></h2>
    <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>" class="product-image">
    <p class="price"><?php echo $product_price; ?></p>
    <p class="description">This is a beautiful product that you will love to wear!</p>
    <button class="add-to-cart">Add to Cart</button>
</div>

<?php include('footer.php'); ?>
