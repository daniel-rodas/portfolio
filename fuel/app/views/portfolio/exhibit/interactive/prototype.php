
<?php foreach ($prototype as $k => $a): ?>
       <article class="campaign-side-by-side">
       <img class="img-responsive" src="<?= Uri::base(false) . 'assets/img/portfolio' . $a->url ?>" alt="<?= $a->name ?>" />
   </article>
<?php endforeach; ?>



