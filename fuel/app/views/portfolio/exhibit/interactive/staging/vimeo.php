
<div class="portfolioExhibitPage">
    <?php if(empty($exhibit->assets)): ?>
    <?php else: ?>
        <?php foreach($exhibit->assets as $asset): ?>
            <div  class="portfolioRow" id="<?= $asset->slug; ?>">
                <?php if($asset->type == "vimeo"): ?>
                    <article style="width: 100%; padding: 2em;">
                        <h3  style="text-align: center"><?= $asset->name; ?></h3>
                        <p style="text-align: center"><?= $asset->description; ?></p>
                        <a class="btn btn-primary"
                           style="display: block; margin: 0 auto; width: 16em; text-align: center"
                           href="<?= $asset->url; ?>" target="_blank">Watch video on Vimeo.</a>
                    </article>

                    <?= View::forge('portfolio/vimeo/iframe')->set('asset', $asset);  ?>

                <?php elseif($asset->type == "invision"): ?>
                    <article style="width: 100%; padding: 2em;">
                        <h3  style="text-align: center"><?= $asset->name; ?></h3>
                        <p style="text-align: center"><?= $asset->description; ?></p>
                        <a class="btn btn-primary"
                           style="display: block; margin: 0 auto; width: 16em; text-align: center"
                           href="<?= $asset->url; ?>" target="_blank">Open prototype in new window</a>
                    </article>

                    <?= View::forge('portfolio/invision/ipad')->set('url', $asset->url);  ?>
                <?php else: ?>
                <article class="information">
                    <h3 ><?= $asset->name; ?></h3>
                    <p ><?= $asset->description; ?></p>
                </article>
                <section class="exhibit-thumbnails">

                    <img src="http://danielrodasdesign.com/assets/img/portfolio<?= $asset->url; ?>" alt="">

                </section>
                <?php endif; ?>

            </div>

        <?php endforeach; ?>
    <?php endif; ?>

    <?= $related; ?>

    <section><?= View::forge()->render('_includes/back-to-top'); ?></section>
</div>
