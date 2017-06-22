    <?php if(empty($exhibits)): ?>

    <?php else: ?>
        <?php foreach($exhibits as $exhibit): ?>
            <div class="exhibitionColumn">
                <article id="<?= $exhibit->slug; ?>" class="thumbnail">
                    <a href="<?= \Router::get('portfolio_exhibit_show', array('slug' => $exhibit->slug)); ?>" >
                        <div class="img-crop">
                            <img src="http://danielrodasdesign.com/assets/img<?= ( !empty($exhibit->url) ?  '/portfolio' . $exhibit->url : '/brand/mark.png' ); ?>" alt="<?= $exhibit->slug; ?>">
                        </div>
                        <div class="caption">
                            <h3><?= $exhibit->name; ?></h3>
                            <p class="hidden-xs"><?= Str::truncate($exhibit->description, 50, ' ...Read More'); ?></p>
                        </div>
                    </a>
                </article>
            </div>

        <?php endforeach; ?>
    <?php endif; ?>
