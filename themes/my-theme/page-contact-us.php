<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">  
     <title>contact</title>
</head>
<body>
    <!-- contact-us -->
     <div class=" contact-us">
        <p> <span >Home </span>/ Contact Us</p>
        <h1> Contact Us</h1>
     </div>

    <div class="contact-box">
    
        <div class="left-info">
            <h2 class="title">Contact Us</h2>

            <p class="info"><i class="fa-solid fa-phone"></i> 088 755 7692</p>
             <p class="info"><i class="fa-solid fa-phone"></i> 088 755 7692</p>
            <p class="info"><i class="fa-solid fa-envelope"></i> chheunnita169@gamil.com</p>
            <p class="info">
                <i class="fa-solid fa-location-dot"></i>Threa village, stung Meanchey, Meanchey , Phnom Penh </p>
            
            <h2 class="title">Follow Us</h2>
            <div class="social-icons">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-linkedin-in"></i>
                <i class="fa-brands fa-telegram"></i>
            </div>
        </div>

        <div class="right-form">
            <h2 class="main-title">We want to hear from you</h2>
            <p class="desc">Please fill out the form below to contact our team. We will respond as soon as possible. 
                Alternatively, phone or e-mail us using the information on the left.</p>

            <form class="contact-form">
                <label>Name </label>
                <input class="input" type="text" placeholder="Your Name">

                <div class="form-row">
                    <div class="half">
                        <label>Phone </label>
                        <input class="number" type="tel" placeholder="Mobile Number">
                    </div>
                    <div class="half">
                        <label>Email </label>
                        <input class="number" type="email" placeholder="Email Address">
                    </div>
                </div>

                <label>Subject</label>
                <input class="input" type="text">

                <label>Message</label>
                <textarea class="textarea" placeholder="Message"></textarea>

                <button class="btn-send">Send</button>
            </form>
        </div>

</div>


</body>
</html>