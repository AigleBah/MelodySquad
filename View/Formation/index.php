<section class="container bg-white border py-4 px-5 ms-rounded mt-3">
    <h1>Nos formations</h1>
    <hr class="">
    <div class="row row-cols-2 row-cols-lg-3 g-4">
        <?php for($i = 0; $i < 11; ++$i) { ?>
        <div class="col">
            <a href="#" class="card text-decoration-none link-dark">
                <img src="/Public/img/formation_card_default.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 card="title">Ingénieur du son</h5>
                    <p class="card-category">Mix & Mastering</p>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</section>