<!doctype html>
<html lang="en">

<?php include('@/layout/head.php') ?>

<body>
    <?php include('@/layout/navigation2.php'); ?>
    <?php $PageName = "Solutions";
    $PageImage = "";
    include('@/layout/breadcrumb.php'); ?>
    <!-- <div class="our-team sec-mar">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="single-person">
                        <div class="person-img">
                            <img src="assets/img/team/team-1.jpg" alt>
                            <div class="person-inner p-2 text-center rounded-0">
                                <a href='<?php echo $BasePath . "contact.php"; ?>' class="text-white"><i class="bi bi-telephone me-2"></i>Contact Now</a>
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
    </div> -->


    <div class="container-fluid " style="margin-top :100px; margin-bottom:200px; margin-left:20px; margin-right:20px">
        <div class="row">
            <!-- <div class="col-6 lalji" style="background-image: url(assets/img/algetiming.jfif); background-color: #cccccc; height: 400px;width:600px; background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;margin-right:20px;margin-left:80px;"></div>
            <div class="col-6 ritikesh" style="background-image: url( assets/img/raceresult.jpg); background-color: #cccccc; height: 400px;width:600px; ;background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;margin-left:20px; margin-right:30px;"> </div> -->

            <div class="col-6"><img src="assets/img/raceresult.jpg" alt="" style="size:covered; border-radius:30px;">
                <p style="float: right;"><a href="https://www.raceresult.com/en/home/index.php" target="_blank"><button type="button" class="btn btn-danger m-5">Race Result</button></a></p>
            </div>
            <div class="col-6"><img src="assets/img/algetiming.jfif" alt="" style="size:covered; height:400px;width:800px;border-radius:30px;">
                <p style="float: right; "><a href="https://alge-timing.com/" target="_blank"><button type="button" class="btn btn-warning m-5">Alge Timing</button></a></p>
            </div>
        </div>
    </div>

    <?php include('@/layout/footer2.php') ?>

</body>

</html>