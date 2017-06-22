<div class="about-page ">
    <section class="">
        <div class="brief-biography">
                <img class="img-responsive"
                     src="http://danielrodasdesign.com/assets/img/brand/logotype-horizontal.png" alt="Daniel Rodas Design">
        </div>

    </section>

    <section  class=" drop-shadow background-about brief-biography">


        <?= render('about/brief_biography'); ?>
        <?= View::forge()->render('_includes/message'); ?>
    </section>
    <section class="nextStep">


            <a href="<?= Uri::base(false) ?>" type="button" class="btn btn-default btn-lg">View Work</a>


            <a href="<?= Uri::base(false) ?>contact" type="button" class="btn btn-default btn-lg">Get in Touch</a>


    </section>
</div>
