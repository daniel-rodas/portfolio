<div class="portfolioExhibitPage">
    <?php if (empty($exhibit->assets)): ?>
    <?php else: ?>
    <img class="exhibit-photography img-responsive"
         src="<?= Uri::base(false) . 'assets/img/portfolio' . $featuredImage->url ?>" alt="<?= $featuredImage->name ?>" />

    <div class="row">
        <?= $thumbnails ?>
    </div>
    <?php endif; ?>
    <?= $related ?>
</div>

