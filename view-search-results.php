<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="py-5 mb-5 search-results-header bg-gray-light">

        <div class="col-md-6 m-auto">
            <h2 class="text-center mb-3"> نتائج البحث عن " فلسطين " </h2>
            <div class="form-group co-input-with-btn mb-0">
                <input type="text" class="form-control search bg-white" placeholder="بحث" value="فلسطين">
                <a href="video-list.php" class="btn btn-primary action-btn button"> بحث </a>
            </div>
        </div>
    </div>

    <div class="container">

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

    </div>
</main>


<?php include 'layout-footer.php'; ?>