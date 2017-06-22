<div class="row">

    <?php if (isset($exhibits)): ?>
        <h3 class="col-xs-12 col-md-12">Related Exhibits</h3>
        <?php foreach ($exhibits as $exhibit): ?>
            <div class="col-xs-6 col-md-3">
                <article class="thumbnail">
                    <section class="media-left">
                        <a href="<?= Uri::base(false) . "portfolio/exhibit/" . $exhibit->slug ?>" class="media-object">
                            <img class="img-responsive media-object" src="<?= Uri::base(false) . "assets/img/portfolio" . $exhibit->url; ?>" alt="<?= $exhibit->name; ?>">
                        </a>
                    </section>

                    <section class="media-body">
                        <h3 class="media-heading"><?= $exhibit->name; ?></h3>
                    </section>
                </article>

            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
