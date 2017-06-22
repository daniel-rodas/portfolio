<?= View::forge('_includes/session_flash'); ?>

<?php

$options = [];
foreach ($exhibitions as $i => $exhibition)
{
    foreach ( $exhibition->exhibits as $k => $exhibit)
    {
        $options[$exhibition->name][$exhibit->id] = $exhibit->name;

    }

}

?>
<?php $actionRoute = 'portfolio_' . $actionType . '_create' ?>
<?= Form::open(array('action' => Router::get($actionRoute), "class" => "form-horizontal")); ?>
    <div class="row">
        <fieldset>
            <legend>Asset Basics.</legend>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <?php echo Form::label('Name', 'name', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('name', Input::post('name', isset($contact) ? $contact->name : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'name')); ?>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <?php echo Form::label('Slug', 'slug', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('slug', Input::post('slug', isset($contact) ? $contact->slug : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'slug')); ?>

                </div>
                <div class="">
                    <?php echo Form::label('Url', 'url', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('url', Input::post('url', isset($contact) ? $contact->url : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Url')); ?>

                </div>
            </div>


        </fieldset>

        <fieldset>
            <legend>Optional.</legend>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php echo Form::label('parent_id', 'parent_id', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::select(
                        'parent_id',
                        null,
                        $options,
                        array('class' => 'col-md-4 form-control', 'placeholder' => 'Choose Parent')); ?>

                </div>
            </div>
            <div class="row">

                <div class=" col-sm-12 col-md-12 col-lg-12">
                    <?php echo Form::label('description', 'description', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::textarea('description', Input::post('description', isset($contact) ? $contact->description : ''), array('class' => 'col-md-12 form-control', 'placeholder' => 'description')); ?>

                </div>
            </div>


        </fieldset>
        <fieldset class="col-lg-12 col-md-12 col-sm-12">
            <legend>Confirm.</legend>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <?= Form::csrf(); ?>
                <label class='control-label'>&nbsp;</label>
                <?php echo Form::submit('submit', 'Create', array('class' => 'btn btn-primary', 'style' => 'width:100%; margin: 0 auto;')); ?>
            </div>
        </fieldset>
    </div>


<?= Form::close(); ?>