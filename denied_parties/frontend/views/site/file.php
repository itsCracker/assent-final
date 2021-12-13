<?php
use yii\helpers\Html;
use yii\grid\GridView;
use kartik\file\FileInput;
//use yii\bootstrap\ActiveForm;
use kartik\form\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Assent Compliance Inc';
?>

     <?php $form = ActiveForm::begin(); ?>
    
    			<?= $form->field($model, 'myfile')->widget(FileInput::classname(), [
                    // 'options' => ['accept' => 'image/*'],
                    'pluginOptions' => [
                        'showPreview' => false,
                        'showCaption' => true,
                    ]
                ])->label(false);?>

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
<!-- CREATE VIEW vw_fileSearch AS 
	SELECT co.agency, co.entity_number, co.type, co.programs, co.name, co.title, co.addresses, co.federal_register_notice, co.start_date, co.end_date, co.standard_order, co.license_requirement, co.license_policy, co.call_sign, co.vessel_type, co.gross_tonnage, co.gross_registered_tonnage, co.vessel_flag, co.vessel_owner, co.remarks, co.source_list_url, co.alt_names, co.citizenships, co.dates_of_birth, co.nationalities, co.places_of_birth, co.source_information_url, co.country, fs.user_id 
    FROM vw_countries  co
		INNER JOIN file_search  fs ON 
            co.name LIKE '%'+fs.name+'%' OR
            co.alt_names LIKE '%'+fs.alias_name+'%' OR
            co.nationalities LIKE '%'+fs.nationalities+'%' OR
            co.citizenships LIKE '%'+fs.citizenships+'%' OR
            co.entity_number LIKE '%'+fs.entity_number+'%'; -->
