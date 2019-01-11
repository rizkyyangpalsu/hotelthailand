<?php
include_once 'navbar.php';
include_once 'banner-gallery.php';
?>

<section class="section-spacing bottom-none inverse-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2><span>Gallery</span></h2>
                    <p>Some Photos from our Hotel
                        .</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-outer">
        <ul class="gallery-items">
            <?php
            for ($x = 0; $x <= 1;$x++) :
            ?>
            <li class="filtr-item" data-category="1">
                <div class="gallery-inner">
                    <img src="assets/images/g1.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g1.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="3">
                <div class="gallery-inner">
                    <img src="assets/images/g2.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g2.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g3.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g3.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="5">
                <div class="gallery-inner">
                    <img src="assets/images/g4.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g4.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g5.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g5.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="4">
                <div class="gallery-inner">
                    <img src="assets/images/g6.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g6.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="5">
                <div class="gallery-inner">
                    <img src="assets/images/g7.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g7.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g8.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g8.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
            <li class="filtr-item" data-category="2">
                <div class="gallery-inner">
                    <img src="assets/images/g9.jpg" alt=""/>
                    <div class="gallery-overlay">
                        <a href="assets/images/g9.jpg" class="venobox" data-gall="gallery"><i
                                class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </li>
                <li class="filtr-item" data-category="2">
                    <div class="gallery-inner">
                        <img src="assets/images/g10.jpg" alt=""/>
                        <div class="gallery-overlay">
                            <a href="assets/images/g10.jpg" class="venobox" data-gall="gallery"><i
                                    class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </li>
            <?php
            endfor;
            ?>
        </ul>
    </div>
</section>

<?php
include_once 'feedback.php';
include_once 'footer.php';
?>
