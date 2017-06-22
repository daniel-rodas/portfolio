

<div class="portfolioExhibitPage">
    <section class="portfolioRow ">
    <?= $logo ?>
    </section>
     <article class="exhibit-campaign-information">
         <p class="lead"><?= $exhibit->description ?></p>
         <img
                 src="<?= Uri::base(false) . 'assets/img/portfolio' . $this->renderSilent($descriptionImage->url) ?>"
                 alt="<?=$this->renderSilent($descriptionImage->name) ?>" />
     </article>

    <section class="portfolioRow">
        <?= $advertisementStaging ?>
    </section>
    <section class="portfolioRow">
        <?= $sideBySide ?>
    </section>
    <section class="portfolioRow ">
        <?= $alternativePosters ?>
    </section>
    <?= $related; ?>
    <section><?= View::forge()->render('_includes/back-to-top'); ?></section>
</div>
