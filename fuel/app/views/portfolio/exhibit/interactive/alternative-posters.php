
<?php foreach ($assets as $a): ?>

   <?php if ( $a->type == 'alternative' ): ?>
       <article class="interactive-alternative">
       <h3><?= $a->name ?></h3>
       <img class="img-responsive" src="<?= Uri::base(false) . 'assets/img/portfolio' . $a->url ?>" alt="<?= $a->name ?>" />
   </article>
   <?php endif; ?>

<?php endforeach; ?>



