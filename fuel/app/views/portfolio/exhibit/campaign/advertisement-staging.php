<?php foreach ($assets as $a): ?>

    <?php if ( $a->type == 'staging' ): ?>
        <article class="campaign-staging">
            <img class="img-responsive" src="<?= Uri::base(false) . 'assets/img/portfolio' . $a->url ?>" alt="<?= $a->name ?>" />
        </article>
    <?php endif; ?>

<?php endforeach; ?>



