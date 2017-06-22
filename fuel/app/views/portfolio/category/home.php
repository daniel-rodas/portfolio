<div class="row">
    <?php if (empty($exhibitions)): ?>

    <?php else: ?>
        <?php foreach ($exhibitions as $exhibition): ?>

            <?= View::forge('portfolio/category/article-thumbnail')
                ->set('exhibitionSlug', $exhibition->slug)
                ->set('exhibitionName', $exhibition->name)
                ->set('exhibits', $exhibition->exhibits)
                ->render() ?>

        <?php endforeach; ?>
    <?php endif; ?>
</div>
<section class="user-control"><?= View::forge()->render('_includes/back-to-top'); ?></section>
<?= render('about/page'); ?>

<div class="row">
    <section class="contact-page">
        <div class="col-md-2">
            <?= View::forge()->render('contact/info'); ?>
        </div>
        <div class="col-md-8">
            <?php echo render('contact/_form'); ?>
        </div>
    </section>
</div>

<hr />
<section class="user-control"><?= View::forge()->render('_includes/back-to-top'); ?></section>
