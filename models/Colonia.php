<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "colonia".
 *
 * @property int $col_id
 * @property string $col_nombre
 * @property int $col_fkmunicipio
 * @property string|null $col_asentamiento
 * @property string|null $col_codigo_postal
 */
class Colonia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colonia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['col_nombre','col_ciudad', 'col_fkmunicipio', 'col_asentamiento', 'col_codigo_postal'], 'required'],
            [['col_fkmunicipio','col_ciudad'], 'integer'],
            [['col_nombre'], 'string', 'max' => 100],
            [['col_asentamiento'], 'string', 'max' => 25],
            [['col_codigo_postal'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'col_id' => 'ID',
            'col_nombre' => 'Nombre',
            'col_ciudad' => 'Ciudad',
            'col_fkmunicipio' => 'Municipio',
            'col_asentamiento' => 'Asentamiento',
            'col_codigo_postal' => 'Codigo Postal',
        ];
    }

    /**
     * Relación con Municipio
     */
    public function getMunicipio()
    {
        return $this->hasOne(Municipio::class, ['mun_id' => 'col_fkmunicipio']);
    }

    /**
     * Relación con Estado a través de Municipio
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::class, ['est_id' => 'mun_fkestado']);  // Verifica que 'mun_fkestado' exista en la tabla 'Municipio'
    }


    public static function map()
    {
        return ArrayHelper::map(
            self::find()
                ->joinWith(['municipio.estado'])  // Realiza el join con municipio y estado
                ->all(),
            'col_id',
            function ($model) {
                // Verificar que municipio y estado no sean nulos
                $municipio = $model->municipio ? $model->municipio->mun_nombre : 'Sin municipio';
                $estado = $model->municipio && $model->municipio->estado ? $model->municipio->estado->est_nombre : 'Sin estado';

                // Concatenar el nombre de la colonia, municipio y estado
                return $model->col_nombre . ', ' . $municipio . ', ' . $estado;
            }
        );
    }
}
