<!doctype html>
<html lang="en">

<?php include('@/layout/head.php') ?>

<body>
    <?php include('@/layout/navigation.php'); ?>
    <?php $PageName="Solutions"; $PageImage=""; include('@/layout/breadcrumb.php');?>
    <div class="our-team sec-mar">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="single-person">
                        <div class="person-img">
                            <img src="assets/img/team/team-1.jpg" alt>
                            <div class="person-inner p-2 text-center rounded-0">
                                <a href='<?php echo $BasePath."contact.php";?>' class="text-white"><i class="bi bi-telephone me-2"></i>Contact Now</a>
                            </div>
                        </div>
                        <div class="inner-cnt">
                            <h4>William James</h4>
                            <span>Chairman, GLC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('@/layout/footer2.php') ?>

</body>

</html>