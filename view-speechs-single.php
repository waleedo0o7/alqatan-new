<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <div class="section-header mb-5 mt-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> الخطب المنبرية </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div>

        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="co-search mb-5">
                    <div class="input-with-icon-wrapper input-with-submit-button">
                        <input type="text" class="form-control" id="name" placeholder=" ابحث عن ... ">
                        <a href="#" class="btn btn-primary submit-btn"> بحث </a>
                    </div>
                </div><!-- co-search -->
            </div>
        </div>


        <div class="title-with-end-btn mb-3">
            <div class="section-header section-header-bg-secondary section-header-sm ">
                <i class="icon icon-title-shape-left me-4"></i>
                <h4 class="headline">  اسم التصنيف  </h4>
                <i class="icon icon-title-shape-right ms-4"></i>
            </div>
            <a href="#" class="color-secondary end-btn"> مشاهدة المزيد </a>
        </div>

        <div class="co-sounds">

            <?php @include "./shared-html/sound-card-with-thumbnail.html"; ?>
            <?php @include "./shared-html/sound-card-with-thumbnail.html"; ?>
            <?php @include "./shared-html/sound-card-with-thumbnail.html"; ?>


        </div><!-- co-sounds -->


    </div>
</main>


<?php include 'layout-footer.php'; ?>