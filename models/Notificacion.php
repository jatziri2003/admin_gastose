<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notificacion".
 *
 * @property int $not_id
 * @property string $not_alerta
 * @property int $not_fktmov
 */
class Notificacion extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notificacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['not_alerta', 'not_fktmov'], 'required'],
            [['not_alerta'], 'string'],
            [['not_fktmov'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'not_id' => ' ID',
            'not_alerta' => 'Alerta',
            'not_fktmov' => ' Fktmov',
        ];
    }

}
