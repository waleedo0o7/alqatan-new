<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <div class="section-header mb-2 mt-5  mb-4">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> نتائج البحث عن : <span class="bold search-word"> شروط الحج </span> </h3>
            <i class="icon icon-title-shape-right ms-4"></i>
        </div>



        <div class="tap-buttons-wrapper mb-5">

            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#" class="btn btn-outline-primary ajax-data active" data-related-wrapper="articles-wrapper"> المقالات </a>
                <a href="#" class="btn btn-outline-primary ajax-data" data-related-wrapper="visuals-wrapper"> مرئيات </a>
                <a href="#" class="btn btn-outline-primary ajax-data" data-related-wrapper="infographics-wrapper"> انفوجرافيك </a>
                <a href="#" class="btn btn-outline-primary ajax-data" data-related-wrapper="caricatures-wrapper"> الكاريكاتير </a>
            </div>

        </div>

        <div class="tap-content-wrapper">

            <div class="result-section-wrapper">


                <div class="co-one-category">

                    <div class="row mb-5">
                        <?php foreach (range(1, 3) as $i) { ?>
                            <div class="col-md-6 col-xl-4 mb-4"><?php @include "./shared-html/book-card.html"; ?></div>
                        <?php } ?>
                    </div>

                </div> <!-- co-one-category -->


            </div>

        </div><!-- tap-content-wrapper -->




        <br /><br /><br /><br />
        <br /><br /><br /><br />
        <br /><br /><br /><br />















    </div>
</main>


<?php include 'layout-footer.php'; ?>