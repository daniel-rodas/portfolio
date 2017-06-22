
<div class="row">
    <p class="col-md-12">Portfolio is under construction.</p>
</div>
<div class="row">

    <section class="col-xs-12 col-sm-7 col-md-7 col-lg-4 col-lg-push-5 col-md-push-5 col-sm-push-5">
        <div class="row">
            <?= View::forge()->render('_includes/session_flash'); ?>

        </div>
        <div class="row">
            <?php echo render('portfolio/crud/_form'); ?>
        </div>

    </section>

    <section class="col-lg-5 col-md-5 col-sm-5 col-xs-12 col-lg-pull-4 col-md-pull-7 col-sm-pull-7">
        <?= View::forge()->render('contact/info'); ?>
    </section>
</div>
