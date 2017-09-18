<?php
    use yii\helpers\Html;
    use kartik\widgets\ActiveForm;

    $this->title = "Create Account";
?>
<?php $form = ActiveForm::begin([]) ?>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4 text-center">
        <?= $form->field($model, 'name', ['inputOptions' => ['class' => 'input-lg']])->label(false) ?>
        <?= Html::submitButton('Create Account!', ['class' => 'btn btn-success btn-lg']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
