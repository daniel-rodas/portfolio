
<div style="padding-left: 0.4em;" class="">
    <section class="contact-page">
        <div class="col-md-2">
            <?= View::forge()->render('contact/info'); ?>
        </div>
        <div class="col-md-8">
            <?php echo render('contact/_form'); ?>
        </div>
    </section>
</div>
