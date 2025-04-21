<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tiempo".
 *
 * @property int $tim_id
 * @property string $tim_descripcion
 */
class Tiempo extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tiempo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tim_descripcion'], 'required'],
            [['tim_descripcion'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tim_id' => ' ID',
            'tim_descripcion' => 'Descripcion',
        ];
    }
    public static function map() {
        return ArrayHelper::map(self::find()->all(),'tim_id','tim_descripcion');

    }

}
