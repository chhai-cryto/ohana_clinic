<?php
/* Template Name: Header Only */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header Page</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
</head>
<body>

    <header>
        <div class="header">
            <div class="menu">
                <img src="<?php echo get_template_directory_uri(); ?>/assets-image/logo.png" alt="<?php bloginfo('jinro'); ?>">
                    <div class="menu-bar">
                        <ul>
                            <li>
                                <a href="<?php echo home_url('home'); ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('first-visit'); ?>">First Visit</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('about'); ?>">About our hospital</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('medical'); ?>">Medical information</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('contact-us'); ?>">Contact us</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('access'); ?>">Access and consultation Hours</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </header>
    
</body>
</html>
