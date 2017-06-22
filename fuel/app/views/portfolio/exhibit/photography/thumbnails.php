<?php foreach ($exhibit->assets as $asset): ?>
    <article class="col-xs-6 col-md-3">
        <section class="thumbnail">
            <input type="hidden" value="<?= $asset->slug; ?>" />
            <a href="<?= Uri::base(false) . 'portfolio/exhibit/photography/show/' . $asset->slug ?>">
                <img class="img-responsive" src="<?= Uri::base(false) . 'assets/img/portfolio' . $asset->url ?>"
                     alt="<?= $exhibit->name ?>" />
                <article class="caption">
                    <h3><?= $asset->name ?></h3>
                    <p><?= $asset->description ?></p>
                </article>
            </a>
        </section>
    </article>
<?php endforeach; ?>
