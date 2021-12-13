<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Edit Profile';
/* @var $this yii\web\View */
/* @var $model backend\models\Australia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="australia-form">
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'agency')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'entity_number')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'type')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'programs')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'title')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'addresses')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'federal_register_notice')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'start_date')->textInput(['rows' => '4']) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'end_date')->textInput(['rows' => '4']) ?>
            </div>            
            <div class="col-md-4">
                <?= $form->field($model, 'dates_of_birth')->textInput(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'standard_order')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'license_requirement')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'license_policy')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'call_sign')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'vessel_type')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'gross_tonnage')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'gross_registered_tonnage')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'vessel_flag')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'vessel_owner')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'remarks')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'source_list_url')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'alt_names')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'citizenships')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'nationalities')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'places_of_birth')->textarea(['rows' => '4']) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'source_information_url')->textarea(['rows' => '4']) ?>
            </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Update Record', ['class' => 'btn btn-primary btn-block']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

</div>
