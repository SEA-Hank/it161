<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Developer Examples and Resources by YingHeng He</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/big/css/big.css" />

    <link rel="stylesheet" href="/big/css/nav.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="/big/js/script.js"></script>
</head>

<body>


    <main>
        <header>
        <h1><a href="/big/index.html"> Web Developer Examples and Resources by YingHeng He</a></h1>
            <nav>
                <div id="cssmenu">
                    <ul>
                        <li><a href="/index.html"><i class="fa fa-fw fa-institution"></i> ITC161</a></li>
                        <li><a href="/big/index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
                        <li><a href="/big/gallery.html"><i class="fa fa-fw fa-camera-retro"></i> LIGHTBOX II Gallery</a>
                        </li>
                        <!--DROP DOWN MENU FOR RESEARCH PAGES-->
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i> Research Topics</a>
                            <ul>
                                <li><a href="/big/smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                                <li><a href="/big/accessibility.html"><i class="fa fa-fw fa-globe"></i>
                                        Accessibility</a>
                                </li>
                                <li><a href="/big/forms.html"><i class="fa fa-fw fa-globe"></i>
                                        Forms</a>
                                </li>
                            </ul>
                        </li>
                        <!--DROP DOWN MENU FOR RESEARCH PAGES-->

                        <!--DROP DOWN MENU FOR Google Tools PAGES-->
                        <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
                            <ul>
                                <li><a href="/big/seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                                <li><a href="/big/calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                                <li><a href="/big/map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                            </ul>
                        </li>
                        <!--DROP DOWN MENU FOR Google Tools PAGES-->
                        <li><a href="/big/contact.php"><i class="fa fa-user" aria-hidden="true"></i> Contact Hank</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section class="fullwidth">
            <h2>Contact yingheng he</h2>
             
        </section>
<div class="wrapper">

<?php
    /*
     * Below are 2 different forms to be re-used       
     * 
     * Only use one at a time, comment out the other!       
     *
     */

    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "horicky7@gmail.com";  //place your/your client's email address here
    $toName = "yingheng he-itc 161"; //place your client's name here
    $website = "yingheng he -itc 161";  //place NAME of your client's website

    echo loadContact('simple.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>


        <footer>
            <p><small>&copy; 2019 by <a href="contact.php" target="_blank">yingheng he</a>, All Rights
                    Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a
                        href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid
                        CSS</a></small></p>
        </footer>
</div>
    </main>
</body>

</html>