<?php
// Database configuration
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Nahid@!2345s$!';
$dbName = 'srstock';

// Create connection
$mysqli = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}





$productId = isset($_GET['productId']) ? intval($_GET['productId']) : 0;


$sql = "SELECT * FROM products WHERE id = $productId LIMIT 1";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    $product = $result->fetch_assoc();

   
    $sizes = json_decode($product['sizes_json'], true)['size'];
    $photos = json_decode($product['photos_json'], true);
    $mainPhoto = $photos[0]['photo'];
} else {
    echo "<h2>Product not found!</h2>";
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SR Stock</title>
</head>

<body>
    <div id="mysearch" class="search center flex vcc">
        <input class="searchinput" type="search" placeholder="Search for products & brands">
        <div class="search-btn flex center">
            <button onclick="closepopup('mysearch')" class="black-btn margin">
                <i class="fas fa-x"></i>
            </button>
        </div>
    </div>
    <!-- Navigation Bar -->
    <?php require_once '../components/nav.asp'; ?>
    <br><br><br>
    <!-- That is a point of interest -->






    <section class="flex center">
        <form action="buy/#<?= htmlspecialchars($product['id']) ?>" method="post">
            <div class="cart">
                <div class="flexin mdrow2 center fullpage">

                    <!-- Left Image -->
                    <div class="wFill">
                        <div class="imgbox" onmouseover="zoomIn(this)" onmouseout="zoomOut(this)">
                            <img id="mainPhoto" src="/admin/dash/upload/uploads/<?= htmlspecialchars($mainPhoto) ?>"
                                alt="">
                        </div>
                    </div>

                    <!-- Right Details -->
                    <div class="wFill">
                        <blockquote>
                            <div class="flex rows">
                                <?php foreach ($photos as $photo): ?>
                                <div onclick="imgcall({img:'<?= htmlspecialchars($photo['photo']) ?>',color:'<?= htmlspecialchars($photo['color']) ?>'})">

                                    <!-- All color photos -->
                                    <div class="flex rows">

                                        <div 
                                            class="brid">
                                            <img style="max-width: 100px; max-height: 100px; object-fit: cover;  border-radius: 8px;"
                                                src="/admin/dash/upload/uploads/<?= htmlspecialchars($photo['photo']) ?>"
                                                alt="<?= htmlspecialchars($photo['color']) ?>">

                                        </div>

                                    </div>

                                    <button id="color-<?= htmlspecialchars($photo['color']) ?>" type="button" class="btnio"><?= htmlspecialchars($photo['color']) ?></button>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <br>
                            <h1><?= htmlspecialchars($product['name']) ?></h1>
                            <h3>
                                <?= htmlspecialchars($product['price']) ?> ৳
                                <span class="otc">
                                    <s><i><?= htmlspecialchars($product['discount_amount']) ?> ৳</i></s>
                                </span>
                            </h3>
                            <p><strong><?= htmlspecialchars($product['description']) ?></strong></p>
                            <hr>

                            <strong>Size:</strong>
                            <div class="flex rows">
                                <?php foreach ($sizes as $size): ?>
                                <div onclick="openSizeSelector(this, '<?= htmlspecialchars($size) ?>')" class="sbtn">
                                    <?= htmlspecialchars($size) ?></div>
                                <?php endforeach; ?>

                            </div>

                            <br>
                            <div class="flex beet">
                                <div class="flex">
                                    <div class="flex cotix">
                                        <button type="button" onclick="qtyoption('decrease')" class="pbtn">-</button>
                                        <input name="qty" id="qty" type="number" value="1" class="qty">
                                        <button type="button" onclick="qtyoption('increase')" class="pbtn">+</button>
                                    </div>
                                </div>
                                <!-- all form -->

                                <input type="hidden" name="productId" value="<?= htmlspecialchars($productId) ?>">
                                <input type="hidden" name="productImage" id="productimg"
                                    value="<?= htmlspecialchars($mainPhoto) ?>">
                                <input type="hidden" name="color" id="color"
                                    value="<?= htmlspecialchars($photos[0]['color']) ?>">
                                <input type="hidde" name="productSize" id="sixe"
                                    value="<?= htmlspecialchars($sizes[0]) ?>">


                                <div class="flex rows">
                                    <button type="submit" class="buyBtn black-btn">Buy Now</button>
                                    <button class="buyBtn black-btn">Add to Cart</button>
                                </div>
                            </div>
                        </blockquote>
                    </div>

                </div>
            </div>
        </form>
    </section>









    <!-- code end -->
    <br><br>
    <!-- Footer  -->
    <?php include '../components/footer.asp'; ?>
    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <script src="/src/js/cart.js"></script>
    <script>
    const timestamp = new Date().getTime();

    const link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = "/src/css/style.css?v=" + timestamp;
    document.head.appendChild(link);

    const script = document.createElement("script");
    script.src = "/src/js/main.js?v=" + timestamp;
    document.body.appendChild(script);
    </script>

</body>

</html>