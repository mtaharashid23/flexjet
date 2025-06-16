<?php $title = "Home";
include 'include/header.php' ?>


<!-- BANNER START -->
<section class="banner bannerSlider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="bannerImg" data-background="images/mainBnnr.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bannerImg__content">
                                <h1 data-swiper-parallax="-200">heading One</h1>
                                <p data-swiper-parallax="-200">this is a paragraph.</p>
                                <a href="#" class="themeBtn">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="bannerImg" data-background="images/mainBnnr.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="bannerImg__content">
                                <h1 data-swiper-parallax="-200">heading One</h1>
                                <p data-swiper-parallax="-200">this is a paragraph.</p>
                                <a href="#" class="themeBtn">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!-- BANNER END -->

<?php include 'include/footer.php' ?>