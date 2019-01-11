<?php include_once 'navbar.php' ?>

<?php
if (isset($_GET['id']) && !empty($_GET['id']))
    include_once 'detail-room.php';
else
    include_once 'list-room.php';
?>

<?php
if (isset($_GET['id']) && !empty($_GET['id'])) :
    if ($_GET['id'] == 'deluxe-room') :
        include_once 'deluxe-room.php';
    elseif ($_GET['id'] == 'luxury-room') :
        include_once 'luxury-room.php';

    elseif ($_GET['id'] == 'guest-house') :
        include_once 'guest-room.php';
    elseif ($_GET['id'] == 'single-room') :
        include_once 'single-room.php';
    endif
    ?>
    <!-- end featured tour -->
<?php
else :
    ?>
    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Popular Rooms</span></h2>
                        <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor
                            consectur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="row hotels">
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="hotel-item wow fadeIn">
                        <div class="media">
                            <div class="thumb">
                                <a href="rooms.php?id=deluxe-room">
                                    <img src="assets/images/r1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="hotel-info">
                                    <h3><a href="rooms.php?id=deluxe-room">Deluxe Room</a></h3>
                                    <p>These Deluxe Rooms let you relax as you admire a beautiful view of the pool. Stay
                                        connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV
                                        and
                                        DVD player.

                                    </p>
                                    <div class="hotel-price">$320.00
                                        <small>- Per Night</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="hotel-item wow fadeIn">
                        <div class="media">
                            <div class="thumb">
                                <a href="rooms.php?id=luxury-room">
                                    <img src="assets/images/r2.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="tour-info">
                                    <h3><a href="rooms.php?id=luxury-room">Luxury Room</a></h3>
                                    <p>These Deluxe Rooms let you relax as you admire a beautiful view of the pool. Stay
                                        connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV
                                        and
                                        DVD player.

                                    </p>
                                    <div class="hotel-price">$220.00
                                        <small>- Per Night</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="hotel-item wow fadeIn">
                        <div class="media">
                            <div class="thumb">
                                <a href="rooms.php?id=guest-house">
                                    <img src="assets/images/r3.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="tour-info">
                                    <h3><a href="rooms.php?id=guest-house">Guest House</a></h3>
                                    <p>These Guest Rooms let you relax as you admire a beautiful view of the pool. Stay
                                        connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV
                                        and
                                        DVD player.

                                    </p>
                                    <div class="hotel-price">$180.00
                                        <small>- Per Night</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-6">
                    <div class="hotel-item wow fadeIn">
                        <div class="media">
                            <div class="thumb">
                                <a href="rooms.php?id=single-room">
                                    <img src="assets/images/r4.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="tour-info">
                                    <h3><a href="rooms.php?id=single-room">Single Room</a></h3>
                                    <p>These Single Rooms let you relax as you admire a beautiful view of the pool. Stay
                                        connected as you enjoy our free WiFi and watch movies with our 32-inch LCD TV
                                        and
                                        DVD player.

                                    </p>
                                    <div class="hotel-price">$150.00
                                        <small>- Per Night</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once 'feedback.php';
endif
?>


<?php include_once 'footer.php' ?>
