<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tahorro".
 *
 * @property int $taho_id
 * @property string $taho_descripcion
 * @property float|null $taho_monto_min
 * @property float|null $taho_monto_max
 */
class Tahorro extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahorro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           
            [['taho_descripcion,taho_monto_min', 'taho_monto_max'], 'required'],
            [['taho_descripcion'], 'string'],
            [['taho_monto_min', 'taho_monto_max'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'taho_id' => 'ID',
            'taho_descripcion' => 'Descripcion',
            'taho_monto_min' => 'Monto Min',
            'taho_monto_max' => 'Monto Max',
        ];
    }
    public static function map() {
        return ArrayHelper::map(self::find()->all(),'taho_id','taho_descripcion');

    }

}
