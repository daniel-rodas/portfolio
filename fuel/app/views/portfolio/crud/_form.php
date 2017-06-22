<?php $actionRoute = 'portfolio_' . $actionType . '_create' ?>
<?= Form::open(array('action' => Router::get($actionRoute), "class" => "form-horizontal")); ?>
    <div class="">
        <fieldset>
            <legend>Category Basics.</legend>
            <div class="">
                <div class="">
                    <?php echo Form::label('Name', 'name', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('name', Input::post('name', isset($contact) ? $contact->name : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'name')); ?>

                </div>

                <div class="">
                    <?php echo Form::label('Slug', 'slug', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('slug', Input::post('slug', isset($contact) ? $contact->slug : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'slug')); ?>

                </div>


            </div>


        </fieldset>

        <fieldset>
            <legend>Optional.</legend>
            <div class="">
                <div class="">
                    <?php echo Form::label('category_id', 'category_id', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('category_id', Input::post('category_id', isset($contact) ? $contact->category_id : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'category_id')); ?>

                </div>
            </div>
            <div class="">
                <div class="">
                    <?php echo Form::label('parent_id', 'parent_id', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('parent_id', Input::post('parent_id', isset($contact) ? $contact->parent_id : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'parent_id')); ?>

                </div>
                <div class="">
                    <?php echo Form::label('description', 'description', array('class' => 'control-label sr-only')); ?>

                    <?php echo Form::input('description', Input::post('description', isset($contact) ? $contact->description : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'description')); ?>

                </div>
            </div>


        </fieldset>
        <fieldset class="">
            <legend>Confirm.</legend>

            <div class="">
                <?= Form::csrf(); ?>
                <label class='control-label'>&nbsp;</label>
                <?php echo Form::submit('submit', 'Create', array('class' => 'btn btn-primary', 'style' => 'width:100%; margin: 0 auto;')); ?>
            </div>
        </fieldset>
    </div>



<?= Form::close(); ?>