<?php include 'layout-header.php'; ?>

<?php include 'layout-intro-section.php'; ?>

<main>

    <div class="container">

        <div class="section-header mb-5 mt-5">
            <i class="icon icon-title-shape-left me-4"></i>
            <h3 class="headline"> المحاضرات </h3>
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



        <div class="co-sounds">

            <?php @include "./shared-html/sound-card.html"; ?>
            <?php @include "./shared-html/sound-card.html"; ?>
            <?php @include "./shared-html/sound-card.html"; ?>
            <?php @include "./shared-html/sound-card.html"; ?>

        </div><!-- co-sounds -->



    </div>
</main>


<?php include 'layout-footer.php'; ?>








<div class="modal fade" id="exampleModal" aria-labelledby="add-brand">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-body relative">

                <video controls="" width="100%">
                    <source src="https://al-qattan.net/storage/uploads/96idlRhtCGdGd96om4Q4ftWFPfny4SbM3PoMgPDZ.mp4">
                </video>

                <div class="d-flex justify-content-center align-items-center mt-3">
                    <ul class="d-flex social-media-links-colored links-lg reset-ul">
                        <li class="ml-2"><a href="#" class="link facebook" target="_blank"> <i class="fab  fa-facebook-f"></i> </a></li>
                        <li class="ml-2"><a href="#" class="link x-twitter" target="_blank"> <i class="fab  fa-x-twitter"></i> </a></li>
                        <li class="ml-2"><a href="#" class="link whatsapp" target="_blank"> <i class="fab  fa-whatsapp"></i> </a></li>
                        <li class="ml-2"><a href="#" class="link telegram" target="_blank"> <i class="fa  fa-paper-plane"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>