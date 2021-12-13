<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%australia}}".
 *
 * @property int $uid
 * @property string|null $agency
 * @property string|null $entity_number
 * @property string|null $type
 * @property string|null $programs
 * @property string|null $name
 * @property string|null $title
 * @property string|null $addresses
 * @property string|null $federal_register_notice
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $standard_order
 * @property string|null $license_requirement
 * @property string|null $license_policy
 * @property string|null $call_sign
 * @property string|null $vessel_type
 * @property string|null $gross_tonnage
 * @property string|null $gross_registered_tonnage
 * @property string|null $vessel_flag
 * @property string|null $vessel_owner
 * @property string|null $remarks
 * @property string|null $source_list_url
 * @property string|null $alt_names
 * @property string|null $citizenships
 * @property string|null $dates_of_birth
 * @property string|null $nationalities
 * @property string|null $places_of_birth
 * @property string|null $source_information_url
 * @property string|null $country
 */
class Australia extends \yii\db\ActiveRecord
{
    public $myfile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%australia}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agency'], 'string', 'max' => 1500],
            [['entity_number'], 'string', 'max' => 2000],
            [['type'], 'string', 'max' => 1000],
            [['programs', 'federal_register_notice', 'standard_order', 'license_requirement', 'license_policy', 'call_sign', 'vessel_type', 'gross_tonnage', 'vessel_flag', 'vessel_owner', 'remarks', 'source_list_url', 'citizenships', 'dates_of_birth', 'nationalities', 'places_of_birth', 'source_information_url'], 'string', 'max' => 2500],
            [['name'], 'string', 'max' => 4000],
            [['title'], 'string', 'max' => 2200],
            [['addresses'], 'string', 'max' => 3500],
            [['start_date', 'end_date', 'gross_registered_tonnage'], 'string', 'max' => 250],
            [['alt_names'], 'string', 'max' => 3000],
            [['country'], 'string', 'max' => 20],
            [['myfile'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'agency' => 'Agency',
            'entity_number' => 'Entity Number',
            'type' => 'Type',
            'programs' => 'Programs',
            'name' => 'Name',
            'title' => 'Title',
            'addresses' => 'Addresses',
            'federal_register_notice' => 'Federal Register Notice',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'standard_order' => 'Standard Order',
            'license_requirement' => 'License Requirement',
            'license_policy' => 'License Policy',
            'call_sign' => 'Call Sign',
            'vessel_type' => 'Vessel Type',
            'gross_tonnage' => 'Gross Tonnage',
            'gross_registered_tonnage' => 'Gross Registered Tonnage',
            'vessel_flag' => 'Vessel Flag',
            'vessel_owner' => 'Vessel Owner',
            'remarks' => 'Remarks',
            'source_list_url' => 'Source List Url',
            'alt_names' => 'Alt Names',
            'citizenships' => 'Citizenships',
            'dates_of_birth' => 'Dates Of Birth',
            'nationalities' => 'Nationalities',
            'places_of_birth' => 'Places Of Birth',
            'source_information_url' => 'Source Information Url',
            'country' => 'Country',
        ];
    }
}
