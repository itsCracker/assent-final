<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AustraliaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'United Kingdom';
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
                <?= $form->field($model, 'myfile')->widget(FileInput::classname(), [
                    // 'options' => ['accept' => 'image/*'],
                    'pluginOptions' => [
                        'showPreview' => false,
                        'showCaption' => true,
                    ]
                ])->label(false);?>
            <?php ActiveForm::end(); ?>
            
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'name',
                    'title',
                    'agency',
                    'programs',
                    //'remarks',
                    //'source_list_url:url',
                    //'citizenships',
                    //'nationalities',
                    //'source_information_url:url',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' =>  '{buttons}',
                        'buttons' => [ 
                            'buttons'=>function($url, $model, $key){
                                return Html::a('<i class="fa fa-edit"> </i>', ['/australia/index', 'id' => $model['uid']], ['class' => 'btn btn-xs btn-primary','data-original-title'=>'Amend Record','data-toggle'=>'tooltip','data-placement'=>'top']);
                            }
                                ]

                    ],
                ],
            ]); ?>
          </div><!-- /.card-body -->
        </div>
      </div><!-- /.container-fluid -->
    </section>


</div>
