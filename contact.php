<!DOCTYPE html>
<html lang="en">
<?php include('@/layout/head.php'); ?>
<body>
  <?php include('@/layout/navigation.php'); ?>
  <?php $PageName="Contact Us"; $PageImage=""; include('@/layout/breadcrumb.php');?>
  <?php 
    include('@/contact/contact-section.php'); 
    include('@/contact/googlemap.php'); 
    include('@/layout/footer2.php'); 
  ?>

</body>

</html>