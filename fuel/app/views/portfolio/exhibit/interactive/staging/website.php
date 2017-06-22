
        <article class="campaign-staging">
            <?php if ($this->renderSilent($a['url'])): ?>
                <a href="<?= $a['url']->url ?>" target="_blank" >
                    <img class="img-responsive" src="<?= Uri::base(false) . 'assets/img/portfolio' . $a['image']->url ?>" alt="<?= $a['image']->name ?>" />
                    <p class="text-center">Click on image to go to demo website.</p>
                </a>
            <?php endif; ?>
        </article>




