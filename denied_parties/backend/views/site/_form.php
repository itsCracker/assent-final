<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AustraliaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manage User Record';
?>
<div class="australia-index">
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
           <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'first_name')->textInput([]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'middle_name')->textInput([]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'last_name')->textInput([]) ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($model, 'email')->textInput([]) ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($model, 'username')->textInput([]) ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($model, 'user_role')->widget(Select2::classname(), [
                        'data' => ['ADMIN'=>'ADMIN','USER'=>'USER'],
                        'options' => ['placeholder' => 'Select a Role'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($model, 'status')->widget(Select2::classname(), [
                        'data' => ['10'=>'ACTIVE','9'=>'INACTIVE'],
                        'options' => ['placeholder' => 'Select a Status'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);?>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Save Record', ['class' => 'btn btn-primary btn-block']) ?>
            </div>

            <?php ActiveForm::end(); ?>
            
            
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>


</div>
