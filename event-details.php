<!doctype html>
<html lang="en">
<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include('@/layout/head.php');
    $slug = $_GET['slug'];
    $sql = 'SELECT * FROM events WHERE slug = ?;';
    $stmt = $DB->prepare($sql);

    // Bind the parameter (the slug) to the statement
    $stmt->bind_param('s', $slug);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $eventObj = $result->fetch_assoc();
    // $single_event= $single_event->fetch_assoc();
?>

<body>
    <?php include('@/layout/navigation2.php'); ?>
    <?php
    $eventID = $eventObj['event_id'];
    $eventName = $eventObj['event_name'];
    $PageName=$eventName; $PageImage=""; include('@/layout/breadcrumb.php');
    ?>

    <!-- Events Grid  -->
    <div class="latest-blog grid sec-mar">
        <div class="container">
            <span class="text-warning">
                EVENTS GALLERY
            </span>
            <h2 class="fw-semibold"><?= $eventName?></h2>
            <div class="row g-4 mb-4">
                <?php  
                  $EventImages= $DB->query('SELECT * FROM event_images WHERE event_id='.$eventID.';');
                  while($EventImage= $EventImages->fetch_assoc()){
                  ?>
                    <div class="col-md-6 col-lg-4">
                        <!-- Single Event Card -->
                        <div class="single-post bg-opacity-0">
                            <div class="post-thumbnail ">
                                <img src="<?php echo $EventImage['src'];?>" alt="<?php echo $EventImage['alt']?>" >
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