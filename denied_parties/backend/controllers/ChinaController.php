<?php

namespace backend\controllers;

use Yii;
use backend\models\China as Core;
use backend\models\ChinaSearch as Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use ruskid\csvimporter\CSVImporter;
use ruskid\csvimporter\CSVReader;
use ruskid\csvimporter\ImportInterface;
use ruskid\csvimporter\MultipleImportStrategy;
use ruskid\csvimporter\MultipleUpdateStrategy;
use ruskid\csvimporter\BaseImportStrategy;
use yii\widgets\ActiveForm;
use yii\helpers\Json;
use yii\web\UploadedFile;
/**
 * ChinaController implements the CRUD actions for China model.
 */
class ChinaController extends Controller
{

    public function actionIndex($id=null)
    {
        if($id!=null){
            return $this->update($id);
        }else{
        $searchModel = new Search();
        $model = new Core;
        $importer = new CSVImporter;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if($model->load(Yii::$app->request->post())){
          $model->myfile = UploadedFile::getInstance($model, 'myfile' );
          $importer->setData(new CSVReader([
              'filename' => $model->myfile->tempName == null? $model->myfile->name :$model->myfile->tempName,
              'fgetcsvOptions' => [
              'delimiter' => ','
              ]
          ]));
          $numberRowsAffected = $importer->import(new MultipleImportStrategy([
                'tableName' => Core::tableName(),
                'className' => Core::className(),
                'configs' => [
                    [
                      'attribute' => 'agency',
                      'value' => function($line) {return strtoupper($line[1]); },
                    ],
                    [
                      'attribute' => 'entity_number',
                      'value' => function($line) {return strtoupper($line[2]); },
                    ],
                    [
                      'attribute' => 'type',
                      'value' => function($line) {return strtoupper($line[3]); },
                    ],
                    [
                      'attribute' => 'programs',
                      'value' => function($line) {return strtoupper($line[4]); },
                    ],
                    [
                      'attribute' => 'name',
                      'value' => function($line) {return strtoupper($line[5]); },
                    ],
                    [
                      'attribute' => 'title',
                      'value' => function($line) {return strtoupper($line[6]); },
                    ],
                    [
                      'attribute' => 'addresses',
                      'value' => function($line) {return strtoupper($line[7]); },
                    ],
                    [
                      'attribute' => 'federal_register_notice',
                      'value' => function($line) {return strtoupper($line[8]); },
                    ],
                    [
                      'attribute' => 'start_date',
                      'value' => function($line) {return strtoupper($line[9]); },
                    ],
                    [
                      'attribute' => 'end_date',
                      'value' => function($line) {return strtoupper($line[10]); },
                    ],
                    [
                      'attribute' => 'standard_order',
                      'value' => function($line) {return strtoupper($line[11]); },
                    ],
                    [
                      'attribute' => 'license_requirement',
                      'value' => function($line) {return strtoupper($line[12]); },
                    ],
                    [
                      'attribute' => 'license_policy',
                      'value' => function($line) {return strtoupper($line[13]); },
                    ],
                    [
                      'attribute' => 'call_sign',
                      'value' => function($line) {return strtoupper($line[14]); },
                    ],
                    [
                      'attribute' => 'vessel_type',
                      'value' => function($line) {return strtoupper($line[15]); },
                    ],
                    [
                      'attribute' => 'gross_tonnage',
                      'value' => function($line) {return strtoupper($line[16]); },
                    ],
                    [
                      'attribute' => 'gross_registered_tonnage',
                      'value' => function($line) {return strtoupper($line[17]); },
                    ],
                    [
                      'attribute' => 'vessel_flag',
                      'value' => function($line) {return strtoupper($line[18]); },
                    ],
                    [
                      'attribute' => 'vessel_owner',
                      'value' => function($line) {return strtoupper($line[19]); },
                    ],
                    [
                      'attribute' => 'remarks',
                      'value' => function($line) {return strtoupper($line[20]); },
                    ],
                    [
                      'attribute' => 'source_list_url',
                      'value' => function($line) {return strtoupper($line[21]); },
                    ],
                    [
                      'attribute' => 'alt_names',
                      'value' => function($line) {return strtoupper($line[22]); },
                    ],
                    [
                      'attribute' => 'citizenships',
                      'value' => function($line) {return strtoupper($line[23]); },
                    ],
                    [
                      'attribute' => 'dates_of_birth',
                      'value' => function($line) {return strtoupper($line[24]); },
                    ],
                    [
                      'attribute' => 'nationalities',
                      'value' => function($line) {return strtoupper($line[25]); },
                    ],
                    [
                      'attribute' => 'places_of_birth',
                      'value' => function($line) {return strtoupper($line[26]); },
                    ],
                    [
                      'attribute' => 'source_information_url',
                      'value' => function($line) {return strtoupper($line[27]); },
                    ],
                    [
                      'attribute' => 'country',
                      'value' => function($line) {return strtoupper($line[28]); },
                    ],

                  ],
                  'skipImport' => function($line){
                      if($line[1] == NULL || $line[1] == ""){
                          return true;
                      }
                      if($line[5] == NULL || $line[5] == ""){
                          return true;
                      }
                  }
              ]));

        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
        ]);
        }
    }
    public function update($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('_form', [
            'model' => $model,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Core::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
