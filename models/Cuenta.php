<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuenta".
 *
 * @property int $cue_id
 * @property string $cue_num_tarjeta
 * @property string $cue_tipo_tarjeta
 * @property int $cue_fkusuario
 * @property int $cue_fkban
 */
class Cuenta extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const CUE_TIPO_TARJETA_DEBITO = 'Debito';
    const CUE_TIPO_TARJETA_CREDITO = 'Credito';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuenta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cue_num_tarjeta', 'cue_tipo_tarjeta', 'cue_fkusuario', 'cue_fkban'], 'required'],
            [['cue_tipo_tarjeta'], 'string'],
            [['cue_fkusuario', 'cue_fkban'], 'integer'],
            [['cue_num_tarjeta'], 'string', 'max' => 16],
            ['cue_tipo_tarjeta', 'in', 'range' => array_keys(self::optsCueTipoTarjeta())],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cue_id' => 'ID',
            'cue_num_tarjeta' => 'Num Tarjeta',
            'cue_tipo_tarjeta' => 'Tipo Tarjeta',
            'cue_fkusuario' => 'Fkusuario',
            'cue_fkban' => 'Fkban',
        ];
    }


    /**
     * column cue_tipo_tarjeta ENUM value labels
     * @return string[]
     */
    public static function optsCueTipoTarjeta()
    {
        return [
            self::CUE_TIPO_TARJETA_DEBITO => 'Debito',
            self::CUE_TIPO_TARJETA_CREDITO => 'Credito',
        ];
    }

    /**
     * @return string
     */
    public function displayCueTipoTarjeta()
    {
        return self::optsCueTipoTarjeta()[$this->cue_tipo_tarjeta];
    }

    /**
     * @return bool
     */
    public function isCueTipoTarjetaDebito()
    {
        return $this->cue_tipo_tarjeta === self::CUE_TIPO_TARJETA_DEBITO;
    }

    public function setCueTipoTarjetaToDebito()
    {
        $this->cue_tipo_tarjeta = self::CUE_TIPO_TARJETA_DEBITO;
    }

    /**
     * @return bool
     */
    public function isCueTipoTarjetaCredito()
    {
        return $this->cue_tipo_tarjeta === self::CUE_TIPO_TARJETA_CREDITO;
    }

    public function setCueTipoTarjetaToCredito()
    {
        $this->cue_tipo_tarjeta = self::CUE_TIPO_TARJETA_CREDITO;
    }
}
