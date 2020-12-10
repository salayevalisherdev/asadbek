<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faxriylar".
 *
 * @property int $id
 * @property string $full_name
 * @property string $birthday
 * @property string $start_date
 * @property string $finish_date
 * @property string $mehnat_faoliyati
 */
class Faxriylar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faxriylar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'birthday', 'start_date', 'finish_date', 'mehnat_faoliyati'], 'required'],
            [['birthday', 'start_date', 'finish_date'], 'safe'],
            [['mehnat_faoliyati'], 'string'],
            [['full_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'birthday' => Yii::t('app', 'Birthday'),
            'start_date' => Yii::t('app', 'Start Date'),
            'finish_date' => Yii::t('app', 'Finish Date'),
            'mehnat_faoliyati' => Yii::t('app', 'Mehnat Faoliyati'),
        ];
    }
}
