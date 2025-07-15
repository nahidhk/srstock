<!DOCTYPE html>
<html lang="en">
 
<head>
    <link rel="shortcut icon" href="/src/img/logo.png" type="image/x-icon">
    <meta name="description" content="SR Stock - Your one-stop shop for all your needs. Explore our wide range of products and enjoy seamless shopping experience.">
    <meta name="keywords" content="SR Stock, online shopping, e-commerce, buy products">
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
    <?php include 'components/nav.asp'; ?>


    <br><br><br>



    <!-- carousel -->

    <div class="carousel">
        <div id="story" class="mbulta flex medel">

        </div>
    </div>





    <!-- shopping card -->
     <?php include 'components/soping.asp'; ?>

<!-- end soping card -->





    <br><br>
    <!-- Footer  -->
    <?php include 'components/footer.asp'; ?>
    <!-- js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
<script>
  const timestamp = new Date().getTime();

  const link = document.createElement("link");
  link.rel = "stylesheet";
  link.href = "src/css/style.css?v=" + timestamp;
  document.head.appendChild(link);

  const script = document.createElement("script");
  script.src = "src/js/main.js?v=" + timestamp;
  document.body.appendChild(script);
</script>

</body>

</html>