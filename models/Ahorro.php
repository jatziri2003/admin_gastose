<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ahorro".
 *
 * @property int $aho_id
 * @property float $aho_cantidad
 * @property int $aho_fktaho
 * @property int $aho_fkusuario
 * @property int $aho_fktiempo
 */
class Ahorro extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ahorro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aho_cantidad', 'aho_fktaho', 'aho_fkusuario', 'aho_fktiempo'], 'required'],
            [['aho_cantidad'], 'number'],
            [['aho_fktaho', 'aho_fkusuario', 'aho_fktiempo'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aho_id' => ' ID',
            'aho_cantidad' => ' Cantidad',
            'aho_fktaho' => ' Fktaho',
            'aho_fkusuario' => ' Fkusuario',
            'aho_fktiempo' => ' Fktiempo',
        ];
    }

}
