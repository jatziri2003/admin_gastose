<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usudoc".
 *
 * @property int $udo_fkusuario
 * @property int $udo_fkdocumento
 * @property string $udo_fecha
 * @property string|null $udo_estado
 */
class Usudoc extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usudoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['udo_estado'], 'default', 'value' => null],
            [['udo_fkdocumento', 'udo_fecha'], 'required'],
            [['udo_fkdocumento'], 'integer'],
            [['udo_fecha'], 'safe'],
            [['udo_estado'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'udo_fkusuario' => ' Fkusuario',
            'udo_fkdocumento' => ' Fkdocumento',
            'udo_fecha' => ' Fecha',
            'udo_estado' => ' Estado',
        ];
    }

}
