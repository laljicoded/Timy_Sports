<!doctype html>
<html lang="en">
<?php include('@/layout/head.php') ?>

<body>
    <?php include('@/layout/navigation.php') ?>
    <?php $PageName="Error"; $PageImage=""; include('@/layout/breadcrumb.php');?>

    <div class="error-area sec-mar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="error-content">
                        <img src="assets/img/error.png" alt>
                        <h1>There’s nothing here</h1>
                        <p>The page you are looking for may have been renamed or does nost exist in this server you will be redirected to Home shortly.</p>
                        <div class="button--wrap">
                            <a class="eg-btn btn--primary golf-btn mx-auto" href="index.html">Back To Home <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('@/layout/footer2.php'); ?>
</body>

</html>