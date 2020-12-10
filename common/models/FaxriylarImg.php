<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faxriylar_img".
 *
 * @property int $id
 * @property int $faxriylar_id
 * @property string $img_name
 */
class FaxriylarImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faxriylar_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['faxriylar_id', 'img_name'], 'required'],
            [['faxriylar_id'], 'integer'],
            [['img_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'faxriylar_id' => Yii::t('app', 'Faxriylar ID'),
            'img_name' => Yii::t('app', 'Img Name'),
        ];
    }
}
