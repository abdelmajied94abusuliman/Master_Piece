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
    <title>HomeWebsite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php include("./components/header.css")?>
        <?php include("./components/footer.css")?>
        <?php include("./CSS/home.css")?>
    </style>
    
    


</head>
<body>
    
    <?php include ("./components/header.php") ?>

    <section id="image-and-search-home">
        <div id="container-text-and-search">
            <div>
                <h1 id="first-line-intro">LET’S FIND THE HOME</h1>
                <p id="second-line-intro">THAT’S PERFECT FOR YOU.</p>
            </div>
            <div id="container-icon-and-search">
                <span><button id="button-for-search"><i class="fa-solid fa-magnifying-glass"></i></button><input type="text" placeholder="Search" id="search-bar"></span>
            </div>
        </div>
    </section>

    <section class="the-sections-after-first">
        <div class="title-of-section">
            <p>Explore Rentals in Aqaba</p>
        </div>
        <div id="container-of-apartment-photos-and-description">
            <figure>
                <img src="IMG/2516846-800x600.jpg" alt="200 Sq. M. | JOD10,000 Yearly" class="apartment-image-in-explore">
                <figcaption>
                    <p class="name-of-area-for-apartment">The seventh residential area, Aqaba</p>
                    <p>24, Basman St.</p>
                    <p>200 Sq. M. | JOD10,000 Yearly</p>
                </figcaption>
            </figure>
            <figure>
                <img src="./IMG/2533618-800x600.jpg" alt="120 Sq. M. | JOD 265 Monthly" class="apartment-image-in-explore">
                <figcaption>
                    <p class="name-of-area-for-apartment">The fifth residential area, Aqaba</p>
                    <p>3, Yuhanna Ben Ruba St.</p>
                    <p>120 Sq. M. | JOD 265 Monthly</p>
                </figcaption>
            </figure>
            <figure>
                <img src="IMG/2557959-800x600.jpg" alt="110 Sq. M. | JOD 45 Daily" class="apartment-image-in-explore">
                <figcaption>
                    <p class="name-of-area-for-apartment">Al-Mahdood area, Aqaba</p>
                    <p>11, Khalil Jubran St.</p>
                    <p>110 Sq. M. | JOD 45 Daily</p>
                </figcaption>
            </figure>
            <figure>
                <img src="IMG/2563440-800x600.jpg" alt="350 Sq. M. | JOD 2,300 Monthly" class="apartment-image-in-explore">
                <figcaption>
                    <p class="name-of-area-for-apartment">Al-Manara area, Aqaba</p>
                    <p>11, Pr. Mohammad St., Aqaba</p>
                    <p>350 Sq. M. | JOD 2,300 Monthly</p>
                </figcaption>
            </figure>
        </div>
        <a id="view-more" href="./services.php"><button id="view-more-button">View more</button></a>
    </section>


    <section class="the-sections-after-first">
        <div class="title-of-section">
            <p>Advice From Industry Experts Before You <br>Find Your Next Home</p>
        </div>
        <div class="container-image-and-text">
            <img src="./IMG/Tips-for-Tenants-to-Find-a-Home-1-e1633435718207.jpg" class="image-realted-with-article" alt="woman-carry-key">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Tips for Renters</p>
                <p class="text-descrip-to-customer">Find answers to all of your renting questions with the best renter’s guide in the galaxy.</p>
                <a href="https://www.hud.gov/states/shared/working/r8/mf/topten" class="link-to-article" target="#_blank">Browse Articles</a>
            </div>
        </div>
        <div class="container-image-and-text">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Rent Vs. Buy: How To Decide In 5 Steps</p>
                <p class="text-descrip-to-customer">If you’re on the fence about whether you should rent or buy, read on to find out what you need to consider before taking the plunge.</p>
                <a href="https://www.quickenloans.com/learn/renting-vs-buying-a-house" class="link-to-article" target="#_blank">Browse Articles</a>
            </div>
            <img src="./IMG/RentBuy.png" class="image-realted-with-article" alt="woman-carry-key">
        </div>
        <div class="container-image-and-text">
            <img src="./IMG/widget_take_us_with_you_469.png" class="image-realted-with-article" alt="woman-carry-key">
            <div class="container-of-text-and-info">
                <p class="head-for-text">Take Us With You - Future Plan</p>
                <p class="text-descrip-to-customer">Keep HomeWebsite.com in the palm of your hand throughout your rental journey.</p>
            </div>
        </div>
    </section>

    <section class="the-sections-after-first">
        <div style="margin-bottom: 50px;"></div>
    </section>

    <?php include("./components/footer.php") ?>

    <span class="up"> <i class="fa-solid fa-up-long"></i></span>
    
    <script src="./js/home.js"></script>


</body>
</html>