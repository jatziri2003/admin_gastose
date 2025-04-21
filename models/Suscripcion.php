<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suscripcion".
 *
 * @property int $sus_id
 * @property int $sus_fktsus
 * @property string $sus_fecha_contratacion
 * @property string $sus_fecha_vencimiento
 * @property float $sus_monto
 * @property int $sus_fkmov
 */
class Suscripcion extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suscripcion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sus_fktsus', 'sus_fecha_contratacion', 'sus_fecha_vencimiento', 'sus_monto', 'sus_fkmov'], 'required'],
            [['sus_fktsus', 'sus_fkmov'], 'integer'],
            [['sus_fecha_contratacion', 'sus_fecha_vencimiento'], 'safe'],
            [['sus_monto'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sus_id' => 'ID',
            'sus_fktsus' => 'Tipo suscripción',
            'sus_fecha_contratacion' => 'Fecha Contratacion',
            'sus_fecha_vencimiento' => 'Fecha Vencimiento',
            'sus_monto' => 'Monto',
            'sus_fkmov' => 'Movimiento',
        ];
    }

}
