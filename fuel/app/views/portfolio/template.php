<div class="system-messages">
    <?= View::forge()->render('_includes/message'); ?>
</div>

<section class="portfolioContainer">
    <?= isset($content) ? $content : ''; ?>
</section>
