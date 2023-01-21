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
    <title>Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php include("./CSS/slider.css")?>
        <?php include("./components/header.css")?>
        <?php include("./components/footer.css")?>
        <?php include("./CSS/home.css")?>
        <?php include("./CSS/single.css")?>
 </style>
    
    


</head>
<body>
    
    <?php include ("./components/header.php") ?>
	
    <h1 style="font-size: 2.3rem;">Ihab Al-Kasasbeh Housing Company</h1>
    <div id="container-gallary-and-location">
        <div>
            <div class="slider">
            <div class="slide">
                    <img src="IMG/2516837-800x600.jpg" alt="Photo1"/>
                </div>
            <div class="slide">
                    <img src="IMG/2516838-800x600.jpg" alt="Photo3"/>
                </div> 
            <div class="slide">
                    <img src="IMG/2516846-800x600.jpg" alt="Photo2"/>
                </div>
            <div class="slide">
                    <img src="IMG/2533618-800x600.jpg" alt="Photo3"/>
                </div> 

                <button class="btn-slide prev"><i class="fas fa-3x fa-chevron-circle-left"></i></button>
                <button class="btn-slide next"><i class="fas fa-3x fa-chevron-circle-right"></i></button>
            
            </div>
            <div class="dots-container" style="display: none;">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1077.5770096356557!2d35.02324986293484!3d29.549737643612897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1674046873059!5m2!1sar!2sjo" width="400" height="425" style="border:0; margin-right: 6rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
    </div>


    <div id="container-details-in-single">
        <div class="apartment-details" style="border-right: 1px solid black; padding-right:10rem">
            <p><strong> Location</strong> : The seventh residential area, Aqaba</p>
            <p><strong> House Num./Street</strong> : 24, Basman St.</p>
            <p><strong> Rent </strong> : 10,000 JOD / Yearly</p>
        </div>
        <div class="apartment-details">
            <p><i class="fa-solid fa-bed" style="color:green; font-size: 1.4rem;"></i> <strong> 3 Beds </strong></p>
            <p><i class="fa-solid fa-bath" style="color:rgb(34, 196, 255); font-size: 1.4rem;"></i><strong> 2 Baths </strong></p>
            <p><img src="./IMG/sqm.png" alt="SQM" style="width: 1.1rem; height:1.1rem"> <strong> 200 Sq. M. </strong></p>
        </div>
    </div>

    <h2 id="description">Description :</h2>
    <div id="container-description">
        <p>Furnished Apartment For Rent In The seventh residential area.</p>
        <p>The seventh residential area - Aqaba is a very prime location.</p>
        <div id="general-and-contact-contaienr">
            <div>
                <p style="font-weight: bold;">General details :</p> 
                <ul>
                    <li>First Floor.</li>
                    <li>200 sq m built-up area.</li>
                    <li>The building is 15 years old.</li>
                    <li>Price: 10,000 JOD.</li>
                </ul>
            </div>
            <div id="btn-owner">
                <a href="#"><button>Contact With Owner</button></a>
                <p>Pleas Login To See The Contact's Information.</p>
            </div>
        </div>
        <div>
            <p style="font-weight: bold;">Added features :</p>
            <p>3 bedrooms-3 bathrooms -store room- laundry room- kitchen- built in wardrobe- balcony-Manual shutters- Refrigerator -washing machine-dish washer- dryer- solar heater- garage.</p>
        </div>
    </div>



    <section class="the-sections-after-first">
        <div class="title-of-section">
            <p>Suggested Apartment</p>
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
    </section>

    <section class="the-sections-after-first">
        <div style="margin-bottom: 50px;"></div>
    </section>
    
    <?php include("./components/footer.php") ?>
    
    <span class="up"> <i class="fa-solid fa-up-long"></i></span>
    
    <script src="./js/contact.js"></script>

    <script src="./js/arrows.js"></script>
</body>
</html>