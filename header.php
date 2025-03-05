<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TEDxAUEB Blog">
    <meta name="author" content="TEDxAUEB">
    <?php wp_head(); ?>

    <!-- Font Awesome CDN link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Script -->
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/header.js"></script>
</head>

<body>

    <div class="root">
        <div class="main-container">
            <header class="head">
                <a target="_blank" href="https://tedxaueb.org/">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo/TEDxAUEB_Logo.png" alt="TEDxAUEB Logo" style="display: block;">
                </a>
                <nav class="menu">
                    <ul>
                        <li><a target="_blank" href="https://tedxaueb.org/">Home</a></li>
                        <li><a target="_blank" href="https://tedxaueb.org/about-ted/">About</a></li>
                        <li><a target="_blank" href="https://tedxaueb.org/history/">Events</a></li>
                        <li><a target="_blank" href="https://tedxaueb.org/meet-the-team/">Team</a></li>
                    </ul>
                </nav>
                <div class="hamburger" id="hamburger">
                    <span class="bar bar1"></span>
                    <span class="bar bar2"></span>
                    <span class="bar bar3"></span>
                </div>
            </header>
        </div>
    </div>

    <div class="overlay-menu" id="overlayMenu">
        <div class="overlay-header">
            <div class="close-btn" id="closeBtn"></div>
        </div>
        <nav class="overlay-nav">
            <ul>
                <li><a target="_blank" href="https://tedxaueb.org/">Home</a></li>
                <li><a target="_blank" href="https://tedxaueb.org/about-ted/">About</a></li>
                <li><a target="_blank" href="https://tedxaueb.org/history/">Events</a></li>
                <li><a target="_blank" href="https://tedxaueb.org/meet-the-team/">Team</a></li>
            </ul>
        </nav>
    </div>