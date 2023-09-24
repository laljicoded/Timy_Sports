<!doctype html>
<html lang="en">
<?php include('@/layout/head.php') ?>

<body>
    <?php include('@/layout/navigation2.php') ?>
    <?php $PageName="About Us"; $PageImage="https://upload.wikimedia.org/wikipedia/commons/b/b6/Image_created_with_a_mobile_phone.png"; include('@/layout/breadcrumb.php');?>
    <?php
    include('@/home/about-section.php');
    include('@/about/company-history.php');
    include('@/home/feature.php');
    include('@/about/testimonial.php');
    include('@/home/blog-slider.php');
    include('@/layout/footer2.php'); 
    ?>
</body>

</html>