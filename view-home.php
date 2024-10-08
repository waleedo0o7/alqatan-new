<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <section id="news">
        <div class="container">
            <div class="co-news-slider">

                <div class="news-slider">

                    <div class="swiper swiper-news-slider">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <?php @include "./shared-html/news-slider-card-lg.html"; ?>
                            </div> <!-- swiper-slide -->
                            <div class="swiper-slide">
                                <?php @include "./shared-html/news-slider-card-lg.html"; ?>
                            </div> <!-- swiper-slide -->
                            <div class="swiper-slide">
                                <?php @include "./shared-html/news-slider-card-lg.html"; ?>
                            </div> <!-- swiper-slide -->
                            <div class="swiper-slide">
                                <?php @include "./shared-html/news-slider-card-lg.html"; ?>
                            </div> <!-- swiper-slide -->
                            <div class="swiper-slide">
                                <?php @include "./shared-html/news-slider-card-lg.html"; ?>
                            </div> <!-- swiper-slide -->

                        </div>


                        <!-- If we need pagination -->
                        <div class="news-pagination"></div>

                    </div>


                    <div class="title-and-slider">

                        <div class="headline-title ltr">

                            <i class="icon icon-lg icon-title-shape-left me-4"></i>
                            <p class="lead m-0"> الأكثر مشاهدة </p>
                            <i class="icon icon-lg icon-title-shape-right ms-4"></i>
                        </div>



                        <div class="co-most-reads w-100">
                            <?php @include "./shared-html/news-slider-card.html"; ?>
                            <?php @include "./shared-html/news-slider-card.html"; ?>
                            <?php @include "./shared-html/news-slider-card.html"; ?>

                        </div><!-- co-most-reads -->

                        <div class="swiper swiper-news-thumbs-slider d-none ">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <?php @include "./shared-html/news-slider-card.html"; ?>
                                </div> <!-- swiper-slide -->


                                <div class="swiper-slide">
                                    <?php @include "./shared-html/news-slider-card.html"; ?>
                                </div> <!-- swiper-slide -->


                                <div class="swiper-slide">
                                    <?php @include "./shared-html/news-slider-card.html"; ?>
                                </div> <!-- swiper-slide -->


                                <div class="swiper-slide">
                                    <?php @include "./shared-html/news-slider-card.html"; ?>
                                </div> <!-- swiper-slide -->


                                <div class="swiper-slide">
                                    <?php @include "./shared-html/news-slider-card.html"; ?>
                                </div> <!-- swiper-slide -->

                            </div>
                        </div>

                    </div>


                </div> <!-- news-slider -->

            </div><!-- co-news-slider -->
        </div>
    </section> <!-- news -->

    <section id="legacy" class="section py-5 bg-gray-light">

        <div class="section-header mb-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> التراث الدعوي للشيخ القطان </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div> <!-- section-header -->


        <div class="container mb-3">
            <div class="row">
                <div class="col-sm-6 col-xl-3  mb-5 mb-md-0">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-video-2 mb-3"></i>
                            <h3 class="text-center"> المرئيات </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->
                <div class="col-sm-6 col-xl-3  mb-5 mb-md-0">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-video-1 mb-3"></i>
                            <h3 class="text-center"> المحاضرات </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->
                <div class="col-sm-6 col-xl-3  mb-5 mb-md-0">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-book-open-1 mb-3"></i>
                            <h3 class="text-center"> مؤلفات الشيخ </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->
                <div class="col-sm-6 col-xl-3  mb-5 mb-md-0">
                    <div class="co-icon-card">
                        <a href="#">
                            <i class="icon icon-sound-waves mb-3"></i>
                            <h3 class="text-center"> الخطب </h3>
                        </a>
                    </div><!-- co-icon-card -->
                </div> <!-- col-sm-6 -->



            </div> <!-- row -->
        </div> <!-- container -->


    </section> <!-- legacy -->











    <section id="banner" class="section py-5">



        <div class="container mb-4">



            <div class="co-swiper-slider mb-5">
                <div class="swiper-button-prev banner-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next banner-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper banner-swiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <img src="assets/images/banner.jpg" class="img-fluid w-100" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <img src="assets/images/banner.jpg" class="img-fluid w-100" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <img src="assets/images/banner.jpg" class="img-fluid w-100" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <img src="assets/images/banner.jpg" class="img-fluid w-100" style="border-radius: 20px;">
                            </div>
                        </div>

                    </div>

                </div>

            </div> <!-- co-swiper-slider -->

        </div> <!-- container -->

    </section> <!-- banner -->


    <section id="books" class="section py-5">

        <div class="container mb-4">
            <div class="title-with-end-btn">
                <div class="section-header mb-5">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h3 class="headline"> مؤلفات الشيخ </h3>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div> <!-- section-header -->
            </div>
        </div>




        <div class="container mb-4">



            <div class="co-swiper-slider mb-5">
                <div class="swiper-button-prev books-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next books-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper books-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


            <div class="text-center">
                <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
            </div>



        </div> <!-- container -->







        <!-- <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div> -->

    </section> <!-- books -->

    <section id="visuals" class="section py-5 bg-gray-light">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مرئيات </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <div class="swiper-button-prev visuals-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next visuals-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper visuals-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- visuals -->

    <section id="most-reads" class="section mb-5 py-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> الأكثر قراءة </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev most-reads-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next most-reads-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper most-reads-swiper">
                    <!-- Additional required wrapper -->


                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/book-card.html"; ?>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- most-reads -->

    <section id="explanations" class="section pb-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> شروحات علمية </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <div class="swiper-button-prev explanations-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next explanations-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper explanations-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- explanations -->

    <section id="quotes" class="section pb-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مقولات مأثورة للشيخ </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <div class="swiper-button-prev quotes-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next quotes-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper quotes-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/quote-card.html"; ?>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/quote-card.html"; ?>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/quote-card.html"; ?>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/quote-card.html"; ?>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/quote-card.html"; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->


    </section> <!-- quotes -->

    <section id="fans" class="section py-5 bg-gray-light">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> احباب الشيخ </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">
                <div class="swiper-button-prev fans-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>
                <div class="swiper-button-next fans-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper fans-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/video-card.html"; ?>
                            </div>
                        </div>


                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->

        <div class="text-center">
            <a href="#" class="btn btn-primary"> مشاهدة المزيد </a>
        </div>

    </section> <!-- fans -->

    <section id="gallery" class="section bg-secondary py-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline color-white"> صور الشيخ </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider arrows-down">

                <div class="swiper-button-prev gallery-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>

                <div class="swiper-button-next gallery-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper gallery-swiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="swiper-slide-content">



                                <div class="co-gallery-card-images">

                                    <div class="co-images">

                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>


                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>



                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>



                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>



                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>



                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>



                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>



                                        <a data-fancybox="fancy-gallery-2" href="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-01.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-01.jpg">

                                        </a>








                                    </div>

                                    <h3 class="text-center color-primary"> لقاءات </h3>

                                </div><!-- gallery-card -->



                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->


                        <div class="swiper-slide">
                            <div class="swiper-slide-content">

                                <div class="co-gallery-card-images">

                                    <div class="co-images">

                                        <a data-fancybox="fancy-gallery-3" href="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-02.jpg">

                                        </a>

                                        <a data-fancybox="fancy-gallery-3" href="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-02.jpg">

                                        </a>

                                        <a data-fancybox="fancy-gallery-3" href="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-1" src="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-2" src="assets/images/galerry-02.jpg">

                                            <img alt="" class="img-fluid image-3" src="assets/images/galerry-02.jpg">

                                        </a>

                                    </div>

                                </div><!-- gallery-card -->

                            </div> <!-- swiper-slide-content -->

                        </div> <!-- swiper-slide -->

                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <?php @include "./shared-html/gallery-in-slider-card.html"; ?>
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <?php @include "./shared-html/gallery-in-slider-card.html"; ?>
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <?php @include "./shared-html/gallery-in-slider-card.html"; ?>
                            </div> <!-- swiper-slide-content -->
                        </div> <!-- swiper-slide -->

                    </div> <!-- swiper-wrapper -->

                    <!-- If we need pagination -->
                    <div class="gallery-pagination"></div>

                </div> <!-- swiper gallery-swiper -->

            </div> <!-- co-swiper-slider -->

        </div> <!-- container -->

    </section> <!-- gallery -->

    <section id="partners" class="section py-5">

        <div class="container mb-4">

            <div class="section-header mb-5">
                <i class="icon icon-title-shape-left me-4"></i>
                <h3 class="headline"> مواقع صديقة </h3>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div> <!-- section-header -->

            <div class="co-swiper-slider">

                <div class="swiper-button-prev partners-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>

                <div class="swiper-button-next partners-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

                <div class="swiper partners-swiper">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="swiper-slide-content ">
                                <?php @include "./shared-html/partner-card.html"; ?>
                            </div>
                        </div>





                    </div>
                </div>
            </div> <!-- co-swiper-slider -->


        </div> <!-- container -->


    </section> <!-- partners -->

</main>

<?php include 'layout-footer.php'; ?>