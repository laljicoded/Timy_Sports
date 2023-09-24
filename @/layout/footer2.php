 <!--Lalji work on inline css-->
<footer  style="background-color:black;">
    <div class="container">
        <div class="footer-top py-0">
            <div class="row justify-content-start "  >
                <div>
                    <div class="footer-logo text-start">
                        <a href="index.html"><img src="assets/img/logo.png" height="60" alt></a>
                        <p class="text-start">Less than half a decade from official inception, we are already the Leader in all sports segments we have ventured so far. Be it in Football, Table
                            Tennis, Swimming, Automobile Racing, Track Cycling, MTB, Dragon Boat Racing, Kayaking, White Water Rafting and other Sports Events.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom border-top py-2">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-8 col-lg-10 col-xl-7">
                    <ul class="footer-bottom-menu text-start">
                        <!--<li><a href="#">Home</a></li>-->
                        <!--<li><a href="#">About</a></li>-->
                        <!--<li><a href="#">Events</a></li>-->
                        <!--<li><a href="#">Products</a></li>-->
                        <!--<li><a href="#">Contact</a></li>-->
                        
                         <li><a href="<?php echo $BasePath . "index.php"; ?>">Home</a></a></li>
                            <li><a href="<?php echo $BasePath . "about.php"; ?>">About Us</a></li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;font-size: 14px;display: inline-block;"> Our Offering
                                    </button>
                                        <ul class="dropdown-menu " style="background-color:#242424;color:white;">
                                         <li><a class="dropdown-item" href="<?php echo $BasePath . "events.php"; ?>">sales</a></li>
                                         <li><a class="dropdown-item" href="<?php echo $BasePath . "events.php"; ?>">service</a></li>
                                        </ul>
                                       </div>
                            </li>
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white; font-size: 14px; display: inline-block;"> Technology&nbsp;Paartner
                                    </button>
                                        <ul class="dropdown-menu " style="background-color:#242424; color:white;">
                                         <li><a class="dropdown-item" href="<?php echo $BasePath . "solutions.php"; ?>">ALGE TIMING</a></li>
                                         <li><a class="dropdown-item" href="<?php echo $BasePath . "events.php"; ?>">RACE RESULT</a></li>
                                        </ul>
                                       </div>
                                
                            </li>
                            <li><a href="<?php echo $BasePath . "contact.php"; ?>">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-5 text-end">
                    <div class="copy-txt">
                        <span>Copyright © 2022-23 Timy Sports. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="<?php echo $BasePath; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/popper.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/jquery.lazy.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/anime.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/waypoints.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo $BasePath; ?>assets/js/custom.js"></script>
<!--End Scripts -->