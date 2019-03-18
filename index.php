<!-- +-+-+-+-+-+-+-+ +-+-+-+-+-+ +-+-+-+-+ +-+-+-+ +-+-+-+-+-+ +-+-+-+ +-+-+
|b|i|n|t|a|n|g| |h|e|r|e|.| |w|o|w|,| |y|o|u| |f|o|u|n|d| |m|e|!| |:|)|
+-+-+-+-+-+-+-+ +-+-+-+-+-+ +-+-+-+-+ +-+-+-+ +-+-+-+-+-+ +-+-+-+ +-+-+
-->
<?php
// TITLE MENU
$title = "Indonesia Bird Nest | Original Indonesia Birds Nest";
$titleproduct = "Product And Solutions | Heat Transfer";
$titleproductii = "Product And Solutions | Separation Equipment";
$titleproductiii = "Product And Solutions | Fluid Handling Equipment";
$titleindustries = "WH ALLEN | Industries";
$titlesupport = "WH ALLEN | Services And Support";
$titlecontact = "WH ALLEN | Contact Us";
$title404 = "404 | Page not found!";
$about = "WH ALLEN | About Us";
// CONTENT HERE
include 'content/menu.php';
if (isset($_GET['page'])) {
    $web = $_GET['page'];
    switch ($web) {
        case 'blog';
            include "content/blog.php";
            break;
        case 'home':
            include "content/home.php";
            break;
        case 'why-choose-us':
            include "content/chooseus.php";
            break;
        case 'about-us';
            include "content/aboutus.php";
            break;
        case 'contact-us';
            include "content/contactus.php";
            break;
        case 'bird-nestgallery';
            include "content/birdgallery.php";
            break;
        case 'company-gallery';
            include "content/companygallery.php";
            break;
        case 'thank-you';
            include "content/thank.php";
            break;
        default:
            include "content/404.php";
            break;
    }
} else {
    include "content/home.php";
    include "content/gallery_home.php";
}

include 'content/footer.php';
?>
    <!-- END CONTENT HERE -->

