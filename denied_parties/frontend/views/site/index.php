<?php
use yii\helpers\Html;
use yii\grid\GridView;
use kartik\file\FileInput;
//use yii\bootstrap\ActiveForm;
use kartik\form\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Assent Compliance Inc';
?>

    <?php $form = ActiveForm::begin(['action' => ['index'],'method' => 'get',]); ?>
    
    <?=$form->field($searchModel, 'globalSearch', [
        'addon' => [
            'append' => [
                'content' => Html::submitButton('Search', ['class' => 'btn btn-primary']), 
                'asButton' => true
            ]
        ]
    ])->label(false)->textInput(['placeholder'=>'Search Database']);?>

    <?php ActiveForm::end(); ?>

    <?php if($dataProvider!=null){ 
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute'=>'name',
                    ],
                    'agency',
                    'nationalities',
                    'country',
                    'start_date',
                    'end_date',
                    'source_information_url:url',

                ],
            ]); }?>
   
</div>
