<?php if (empty($exhibits)): ?>

<?php else: ?>
    <?php foreach ($exhibits as $exhibit): ?>
        <a href="<?= \Router::get('portfolio_exhibit_show', array('slug' => $exhibit->slug)); ?>">
         <article id="<?= $exhibit->slug; ?>" class="thumbnail <?= $exhibitionSlug; ?>">

            <img
                src="<?= Uri::base(false) ?>assets/img<?= (!empty($exhibit->url) ? '/portfolio' . $exhibit->url : '/brand/mark.png'); ?>"
                alt="<?= $exhibit->slug; ?>">

                <div class="caption">
                    <h3><?= $exhibit->name; ?></h3>
                    <h4> <?= $exhibitionName; ?></h4>
                    <p class="hidden-xs"><?= Str::truncate($exhibit->description, 80, ' ...Read More'); ?></p>

                </div>

        </article>
        </a>

    <?php endforeach; ?>
<?php endif; ?>
