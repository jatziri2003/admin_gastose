<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimiento".
 *
 * @property int $mov_id
 * @property int $mov_fkusuario
 * @property int $mov_fktmov
 * @property float $mov_cantidad
 * @property string $mov_fecha
 */
class Movimiento extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movimiento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mov_fkusuario', 'mov_fktmov', 'mov_cantidad', 'mov_fecha'], 'required'],
            [['mov_fkusuario', 'mov_fktmov'], 'integer'],
            [['mov_cantidad'], 'number'],
            [['mov_fecha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mov_id' => 'ID',
            'mov_fkusuario' => 'Usuario',
            'mov_fktmov' => 'Tipo movimiento',
            'mov_cantidad' => 'Cantidad',
            'mov_fecha' => 'Fecha',
        ];
    }

}
