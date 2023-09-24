<!doctype html>
<html lang="en">
<?php include('@/layout/head.php') ?>
<body>
    <?php include('@/layout/navigation2.php') ?>
    <?php $PageName="Gallery"; $PageImage=""; include('@/layout/breadcrumb.php');?>
    <div class="gallery-area sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery-tab">
                        <ul class="tab-menu">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".tournament">Tournament Gellary</li>
                            <li data-filter=".course">Cource Gallery</li>
                            <li data-filter=".management">Management</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row g-2 gallery-grid">
                <div class="col-md-3 gallery-item management">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-5-big.png">
                            <img src="assets/img/gallery/gallery-5.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item course">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-6-big.png">
                            <img src="assets/img/gallery/gallery-6.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item management">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-3-big.png">
                            <img src="assets/img/gallery/gallery-3.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item tournament">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-4-big.png">
                            <img src="assets/img/gallery/gallery-4.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 gallery-item course">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-2-big.png">
                            <img src="assets/img/gallery/gallery-2.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item tournament">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-7-big.png">
                            <img src="assets/img/gallery/gallery-7.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item management">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-8-big.png">
                            <img src="assets/img/gallery/gallery-8.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item course">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-10-big.png">
                            <img src="assets/img/gallery/gallery-10.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 gallery-item tournament">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-11-big.png">
                            <img src="assets/img/gallery/gallery-11.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 gallery-item course">
                    <div class="single-gallery">
                        <a data-lightbox="image1" href="assets/img/gallery/gallery-9-big.png">
                            <img src="assets/img/gallery/gallery-9.jpg" class="lazy" alt>
                        </a>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <div class="button--wrap">
                    <a class="eg-btn btn--primary golf-btn mx-auto" href="#">Load More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('@/layout/footer2.php') ?>
</body>

</html>