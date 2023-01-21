<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" This is website to search for apartment in aqaba for rent or buy or show your house for sell ">
    <meta name="author" content="Abdelmajied Akram Abu Suliman">
    <meta name=" Keyword " content=" aqaba , apartment , rent , buy , sell , jordan , tourism , activities in aqaba , red sea , house ">
    <meta name="Copyright" content=" Orange Coding Academy . Designed by Abdelmajied Akram Abu Suliman ">
    <meta name="refresh" content=" 1 ">
    <link rel="icon" type="image/x-icon" href="./IMG/icon.png">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php include("./components/header.css")?>
        <?php include("./components/footer.css")?>
        <?php include("./CSS/contactUS.css")?>
        
    </style>
</head>

<body>

    <?php include ("./components/header.php") ?>

    <section class="contact_section">

        <div class="contact_bg">
            <h1>Contact With US</h1>
        </div>

        <div class="contact_body">

        <h2> Were here to help </h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                 </div>
            <div class="contact_info">
                <div>
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> Phone No.</span>
                    <span class="text">+962 7 7807 9497</span>
                </div>

                <div>
                    <span><i class="fa-solid fa-at"></i></span>
                    <span>  Email </span>
                    <span class="text">abdelmajied.abusuliman@gmail.com</span>
                </div>

                <div>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <span> Address</span>
                    <span class="text"> Aqaba</span>
                </div>
            </div>


            <div class="contact_form">
                <form action="" method="post">
                    <div>
                    <input type="text"  class="form_control" name="fname" id="fname" placeholder="First Name" required>
                    <input type="text"  class="form_control" name="lname" id="lname" placeholder="Last Name" required>
                </div>

                <div>
                    <input type="email" class="form_control" name="email" id="email" placeholder="Email" required>
                    <input type="text" class="form_control" name="phone" id="phone" placeholder="Phone" required>
                </div>
                <textarea class="form_control" name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                <input type="submit" class="send_btn" value="send message">
                </form>

                <div>
                    <img src="./IMG/contact.png" alt="contact us">
                </div>

            </div>
        </div>

    </section>
    
    <?php include("./components/footer.php") ?>

    <span class="up"> <i class="fa-solid fa-up-long"></i></span>
    
    <script src="./js/contact.js"></script>

</body>
</html>