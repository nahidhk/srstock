<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="src/css/style.css?v=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAP Dashboard</title>
</head>

<body>
    <nav class="nav">
        <div class="flex around">
            <div class="logo">
                <h1>NAP Dashboard</h1>
            </div>
            <div class="menu">
                <button onclick="openpopup('configPopup')" class="navbtn btn"><i
                        class="fas fa-cog iconx"></i>Config</button>
                <button onclick="logouti()" class="navbtn btn"><i
                        class="fas fa-right-from-bracket iconx"></i>Logout</button>

            </div>
        </div>
    </nav>



    <!-- The account and connfig  -->

    <div id="configPopup" class="darkbox vcc">
        <div class="popup">
            <div class="underline">
                Config Account
            </div>
            <blockquote>


                <h1>Config By Python!</h1>

                <p>
                    Up To Date and Linux Command
                </p>

                <code>
                        $ sudo apt update && sudo apt upgrade -y
                    </code> <br>
                <code>
                        $ sudo apt install python3-pip -y
                    </code> <br>
                <code>
                        $ sudo nano config.json
                    </code>

            </blockquote>
        </div>
    </div>

    <br><br><br><br>





    <!-- install your sorce code  !!!! Remove the code is a api php rename index.html > index.php-->





    <section class="flex center">
        <!-- mySql button -->
        <div class="min">
            <img src="/admin/dash/svg/mysql.svg" alt="">
            <strong>MySQL</strong>
        </div>
        <!-- **** mysql btn**** -->

        <!-- ads button -->
        <div class="min">
            <img src="/admin/dash/svg/ads.svg" alt="">
            <strong>Ad's</strong>
        </div>
        <!-- **** ads btn**** -->

        <!-- Product Post button -->
        <div onclick="openpopup('postpopup')" class="min">
            <img src="/admin/dash/svg/upload.svg" alt="">
            <strong>Post</strong>
        </div>
        <!-- **** Product Post   btn**** -->

        <!-- Post List button -->
        <div onclick="openpopup('listPopup')" class="min">
            <img src="/admin/dash/svg/list.svg" alt="">
            <strong>Post List</strong>
        </div>
        <!-- **** post List btn**** -->



    </section>



    <!-- post popup -->
    <div id="postpopup" class="darkbox vcc">
        <div class="popup fill">
            <div class="underline flex beet">
                <div></div>
                <div>Post</div>
                <div onclick="closepopup('postpopup')" class="closeBtn"><i class="fa-solid fa-x"></i></div>
            </div>
            <?php include 'components/post.asp'; ?>
        </div>
    </div>
<!-- Post Popup******* -->
 <!-- post list popup --> 
   <div id="listPopup" class="darkbox vcc">
       <div class="popup fill">
           <div class="underline flex beet">
               <div></div>
               <div>Post List</div>
               <div onclick="closepopup('listPopup')" class="closeBtn"><i class="fa-solid fa-x"></i></div>
           </div>
           <?php include 'components/list.asp'; ?>
       </div>
   </div>

    <!-- nosql -->








    <!-- javascript -->
    <!-- font awesome js working -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- site js -->
    <script src="/admin/src/js/login.js?v=1.0"></script>
    <script src="/admin/src/js/main.js?v=1.0"></script>
    <script src="/admin/src/js/post.js?v=1.0"></script>

</body>

</html>