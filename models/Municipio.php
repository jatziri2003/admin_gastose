<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipio".
 *
 * @property int $mun_id
 * @property string $mun_nombre
 * @property int $mun_fkestado
 */
class Municipio extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'municipio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mun_nombre', 'mun_fkestado'], 'required'],
            [['mun_fkestado'], 'integer'],
            [['mun_nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mun_id' => 'ID',
            'mun_nombre' => 'Nombre',
            'mun_fkestado' => 'Estado',
        ];
    }
    public function getEstado()
    {
        return $this->hasOne(Estado::class, ['est_id' => 'mun_fkestado']);
    }
}
