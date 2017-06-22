
<?php foreach ($sideBySide as $k => $a): ?>

   <?php if ( $a->type == 'side-by-side' ): ?>
       <article class="campaign-side-by-side">
       <img class="img-responsive" src="<?= Uri::base(false) . 'assets/img/portfolio' . $a->url ?>" alt="<?= $a->name ?>" />
   </article>
   <?php endif; ?>

<?php endforeach; ?>



