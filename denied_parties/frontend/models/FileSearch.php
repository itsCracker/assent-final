<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "file_search".
 *
 * @property int $search_id
 * @property string|null $name
 * @property string|null $alias_name
 * @property string|null $passport_details
 * @property string|null $nationalities
 * @property string|null $citizenships
 * @property string|null $entity_number
 * @property int $user_id
 */
class FileSearch extends \yii\db\ActiveRecord
{
    public $myfile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file_search';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'alias_name', 'passport_details', 'nationalities', 'citizenships', 'entity_number'], 'string'],
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['myfile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'search_id' => 'Search ID',
            'name' => 'Name',
            'alias_name' => 'Alias Name',
            'passport_details' => 'Passport Details',
            'nationalities' => 'Nationalities',
            'citizenships' => 'Citizenships',
            'entity_number' => 'Entity Number',
            'user_id' => 'User ID',
        ];
    }
}
