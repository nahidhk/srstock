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
        <div class="cart">
           <div class="flexin mdrow2 center fullpage">
           
                <div class=" wFill">
                    <div class="imgbox">
                        <img src="/src/img/exampule.png" alt="">
                    </div>
                </div>
                <div class=" wFill">
                    <blockquote>
                        <div class="flex rows">
                            <div>
                            <div class="brid">
                                <img src="/src/img/exampule.png" alt="">
                            </div>
                            <button class="btnio">
                                Type Color
                            </button>
                            </div>
                             
                        </div>
                        <br>
                        <h1>This is product text</h1>
                        <h3>500 ৳ <span class="otc"><s><i>500 ৳</i></s></span></h3>
                        <p><strong>This is product description</strong></p>
                        <hr>
                        <strong>Size:</strong>
                        <div class="flex rows">
                            <div class="sbtn">2XL</div>
                             <div class="sbtn">XL</div>
                              <div class="sbtn">L</div>
                        </div>

                    </blockquote>
                </div>
           
           </div>
        </div>
    </section>







    <!-- code end -->
    <br><br>
    <!-- Footer  -->
    <?php include '../components/footer.asp'; ?>
    <!-- js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
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









