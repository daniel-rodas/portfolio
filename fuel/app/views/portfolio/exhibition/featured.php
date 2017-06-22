
<div class="portfolio-featured-slide-show">
    <div class="portfolio-featured-slide-show-indicator">
        <span class="portfolio-featured-slide-show-indicator-previous">
            <a href="/">&#60</a>

        </span>
    </div>

    <?php if(empty($exhibitionFeature)): ?>

    <?php else: ?>
        <article  class="portfolio-featured-asset" id="-<?= $exhibitionFeature->slug; ?>" >
            <img class="image-responsive" src="<?= Uri::base(false) . "assets/img/portfolio" . $exhibitionFeature->url ?>" alt="<?= $exhibitionFeature->url ?>">
            <div class="caption">
                <a href="<?= \Router::get('show_exhibition_feature', array('segment' => $exhibitionFeature->slug)); ?>" >
                    <h2><?= $exhibitionFeature->name; ?></h2>
                </a>
            </div>
        </article>
    <?php endif; ?>

    <div class="portfolio-featured-slide-show-indicator">
        <span class="portfolio-featured-slide-show-indicator-next">
            <a href="/">&#62</a>

        </span>
    </div>
</div>
