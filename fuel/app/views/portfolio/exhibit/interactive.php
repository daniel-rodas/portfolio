
<div class="portfolioExhibitPage">
    <section class="portfolioRow ">
        <?= $logo ?>
    </section>
    <article class="exhibit-interactive-information">
         <p class="lead"><?= $exhibit->description ?></p>
         <img
                 src="<?= Uri::base(false) . 'assets/img/portfolio' . $this->renderSilent($descriptionImage->url) ?>"
                 alt="<?=$this->renderSilent($descriptionImage->name) ?>" />
    </article>

    <?= $this->renderSilent($informationAssuranceMap) ?>
    <?= $this->renderSilent($websiteMockup) ?>
    <?= $this->renderSilent($prototype) ?>

    <?= $this->renderSilent($invisionAppIpad) ?>
    <?= $this->renderSilent($invisionAppIphone) ?>

    <?= $related; ?>
    <section><?= View::forge()->render('_includes/back-to-top'); ?></section>
</div>
