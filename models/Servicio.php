<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $ser_id
 * @property float $ser_monto
 * @property string $ser_fecha_pago
 * @property string $ser_motivo
 * @property int $movimiento_mov_id
 * @property int $tipo_servicio_tser_id
 */
class Servicio extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ser_monto', 'ser_fecha_pago', 'ser_motivo', 'movimiento_mov_id', 'tipo_servicio_tser_id'], 'required'],
            [['ser_monto'], 'number'],
            [['ser_fecha_pago'], 'safe'],
            [['movimiento_mov_id', 'tipo_servicio_tser_id'], 'integer'],
            [['ser_motivo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ser_id' => 'ID',
            'ser_monto' => ' Monto',
            'ser_fecha_pago' => 'Fecha Pago',
            'ser_motivo' => 'Motivo',
            'movimiento_mov_id' => 'Movimiento',
            'tipo_servicio_tser_id' => 'Servicio',
        ];
    }

}
