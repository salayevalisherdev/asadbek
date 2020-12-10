<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $fathername
 * @property string $birthday
 * @property string|null $jinsi
 * @property string|null $fan
 * @property int $mb_id
 * @property string $mehnat_faoliyati
 * @property string|null $yutuqlar
 * @property string $toifa
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'birthday', 'mb_id', 'mehnat_faoliyati'], 'required'],
            [['user_id', 'mb_id'], 'integer'],
            [['birthday'], 'safe'],
            [['mehnat_faoliyati', 'yutuqlar'], 'string'],
            [['name', 'surname', 'fathername'], 'string', 'max' => 40],
            [['jinsi'], 'string', 'max' => 10],
            [['fan'], 'string', 'max' => 50],
            [['toifa'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'name' => Yii::t('app', 'Name'),
            'surname' => Yii::t('app', 'Surname'),
            'fathername' => Yii::t('app', 'Fathername'),
            'birthday' => Yii::t('app', 'Birthday'),
            'jinsi' => Yii::t('app', 'Jinsi'),
            'fan' => Yii::t('app', 'Fan'),
            'mb_id' => Yii::t('app', 'Mb ID'),
            'mehnat_faoliyati' => Yii::t('app', 'Mehnat Faoliyati'),
            'yutuqlar' => Yii::t('app', 'Yutuqlar'),
            'toifa' => Yii::t('app', 'Toifa'),
        ];
    }
}
