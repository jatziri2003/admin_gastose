<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tmovimiento".
 *
 * @property int $tmov_id
 * @property string $tmov_descripcion
 * @property float|null $tmov_monto_min
 * @property float|null $tmov_monto_max
 */
class Tmovimiento extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmovimiento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tmov_monto_min', 'tmov_monto_max'], 'default', 'value' => null],
            [['tmov_descripcion'], 'required'],
            [['tmov_descripcion'], 'string'],
            [['tmov_monto_min', 'tmov_monto_max'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tmov_id' => 'ID',
            'tmov_descripcion' => 'Descripcion',
            'tmov_monto_min' => 'Monto Min',
            'tmov_monto_max' => 'Monto Max',
        ];
    }
    public static function map() {
        return ArrayHelper::map(self::find()->all(),'tmov_id','tmov_descripcion');

    }

}
