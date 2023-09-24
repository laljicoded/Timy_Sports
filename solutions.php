<!doctype html>
<html lang="en">

<?php include('@/layout/head.php') ?>

<body>
    <?php include('@/layout/navigation2.php'); ?>
    <?php $PageName = "Technology Partners";
    $PageImage = "";
    include('@/layout/breadcrumb.php'); ?>
    <div class="container py-5">
        <h3 class="fw-semibold">
            Technology Partners
        </h3>
        <div class="row g-3">
            <div class="col-12 col-lg-6">
                <a class="solution-card p-relative h-100" href="https://www.raceresult.com/v12/en/home/" target="_blank">
                    <img src="assets/img/raceresult.jpg" class="w-100 h-100" alt="" style="object-fit:cover;">
                    <div class="d-flex align-items-center justify-content-center h-100 w-100" style="position: absolute;top:0;left:0;">
                        <button type="button" class="solution-card-btn btn btn-danger m-5">
                            Race Result
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-6">
                <a class="solution-card p-relative h-100" href="https://alge-timing.com/" target="_blank">
                    <img src="assets/img/algetiming.jfif" class="w-100 h-100" alt="" style="object-fit:cover;">
                    <div class="d-flex align-items-center justify-content-center h-100 w-100" style="position: absolute;top:0;left:0;">
                        <button type="button" class="solution-card-btn btn btn-warning m-5">
                            Alge Timing
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include('@/layout/footer2.php') ?>

</body>

</html>