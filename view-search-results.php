<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <div class="section-header mb-2 mt-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> نتائج البحث عن : <span class="bold search-word"> شروط الحج </span> </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div>



        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> مؤلفات الشيخ </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->

        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> مرئيات </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-6 col-xl-4 mb-4">
                        <?php @include "./shared-html/video-card.html"; ?>
                    </div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->

        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> لقاءات إذاعية </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-6 col-xl-4 mb-4">
                        <?php @include "./shared-html/video-card.html"; ?>
                    </div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->

        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> مقاطع عن الأقصى </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-6 col-xl-4 mb-4">
                        <?php @include "./shared-html/video-card.html"; ?>
                    </div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->

        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> شروحات علميه </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-6 col-xl-4 mb-4">
                        <?php @include "./shared-html/video-card.html"; ?>
                    </div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->

        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> خطب منبريه </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-12 mb-4"><?php @include "./shared-html/sound-card.html"; ?></div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->

        <div class="co-one-category">

            <div class="d-flex justify-content-center align-items-center mb-4">
                <div class="section-header section-header-bg-secondary section-header-sm">
                    <i class="icon icon-title-shape-left me-4"></i>
                    <h4 class="headline"> محاضرات و دروس </h4>
                    <i class="icon icon-title-shape-right ms-4"></i>
                </div>
            </div>

            <div class="row mb-5">
                <?php foreach (range(1, 3) as $i) { ?>
                    <div class="col-md-12 mb-4"><?php @include "./shared-html/sound-card-with-thumbnail.html"; ?></div>
                <?php } ?>
            </div>

        </div> <!-- co-one-category -->


    </div>
</main>


<?php include 'layout-footer.php'; ?>