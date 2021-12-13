<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\file\FileInput;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AustraliaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'System Users';
?>
<div class="australia-index">
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
           
            
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    [
                        'attribute'=>'first_name',
                        'label'=>'Full Name',
                        'content'=>function($model){
                            return $model->first_name.' '.$model->middle_name.' '.$model->last_name;
                        }
                    ],
                    'username',
                    'email',
                    'user_role',

                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' =>  '{buttons}',
                        'header' => Html::a('<i class="fa fa-plus"> </i>', ['/site/manage'], ['class' => 'btn btn-xs btn-primary']),
                        'buttons' => [ 
                            'buttons'=>function($url, $model, $key){
                                return Html::a('<i class="fa fa-edit"> </i>', ['/site/manage', 'id' => $model['id']], ['class' => 'btn btn-xs btn-primary','data-original-title'=>'Amend Record','data-toggle'=>'tooltip','data-placement'=>'top']);
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
