<!doctype html>
<html lang="en">
<?php include('@/layout/head.php') ?>

<body>
    <?php include('@/layout/navigation2.php'); ?>
    <?php $PageName = "Events";
    $PageImage = "";
    include('@/layout/breadcrumb.php'); ?>

    <!-- Events Grid  -->
    <div class="latest-blog grid sec-mar">
        <div class="container">
            <span class="text-warning">
                EVENTS
            </span>
            <h2 class="fw-semibold">Just play, Have fun. Enjoy the game</h2>
            <div class="row g-4 mb-4">
                <?php
                $Events = $DB->query('SELECT * FROM events;');
                while ($Event = $Events->fetch_assoc()) {
                    $event_name = $Event['event_name'];
                    $event_image = $Event['event_image'];
                    $event_slug = $Event['slug'];
                    $event_date = $Event['created_at'];
                    $event_link = $BasePath . 'event-details.php?slug=' . $event_slug;
                ?>
                    <div class="col-md-6 col-lg-4">
                        <!-- Single Event Card -->
                        <div class="single-post bg-opacity-0">
                            <a href="<?= $event_link ?>" class="post-thumbnail ">
                                <img src="<?php echo $event_image; ?>" alt="<?php echo $event_name ?>">
                            </a>
                            <div class="p-3">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <a href="<?= $event_link ?>" class="fs-3 mb-2 fw-semibold mb-0"><?php echo $event_name ?></a>
                                    <a href="<?= $event_link ?>" class="mb-2 rounded-pill btn btn-warning">
                                        View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include('@/layout/footer2.php');  ?>
</body>

</html>