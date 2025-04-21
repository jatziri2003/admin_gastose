<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tsuscripcion".
 *
 * @property int $tsus_id
 * @property string $tsus_descripcion
 * @property string $tsus_plan
 */
class Tsuscripcion extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tsuscripcion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tsus_descripcion', 'tsus_plan'], 'required'],
            [['tsus_descripcion'], 'string', 'max' => 15],
            [['tsus_plan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tsus_id' => 'ID',
            'tsus_descripcion' => 'Descripcion',
            'tsus_plan' => 'Plan',
        ];
    }
    public static function map() {
        return ArrayHelper::map(
            self::find()->all(),
            'tsus_id',
            function ($model) {
                return $model->tsus_descripcion . ' - ' . $model->tsus_plan;
            }
        );
    }
    
}
