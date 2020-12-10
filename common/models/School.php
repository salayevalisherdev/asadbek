<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property int $id
 * @property string $name
 * @property int $quvvat
 * @property int $count_child
 * @property int $count_teach
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'quvvat', 'count_child', 'count_teach'], 'required'],
            [['quvvat', 'count_child', 'count_teach'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'quvvat' => Yii::t('app', 'Quvvat'),
            'count_child' => Yii::t('app', 'Count Child'),
            'count_teach' => Yii::t('app', 'Count Teach'),
        ];
    }
}
