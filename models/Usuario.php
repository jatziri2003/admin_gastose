<?php

namespace app\models;

use Yii;
use webvimark\modules\UserManagement\models\User;

/**
 * This is the model class for table "usuario".
 *
 * @property int $usu_id
 * @property string $usu_nombre
 * @property string $usu_apellidop
 * @property string $usu_apellidom
 * @property string $usu_fecha_nac
 * @property string $usu_sexo
 * @property int $usu_fkcarrera
 * @property string $usu_num_control
 * @property int $usu_fkcolonia
 * @property int $usu_fkuser
 *
 * @property User $usuFkuser
 */
class Usuario extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const USU_SEXO_M = 'M';
    const USU_SEXO_F = 'F';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usu_nombre', 'usu_apellidop', 'usu_apellidom', 'usu_fecha_nac', 'usu_sexo', 'usu_fkcarrera', 'usu_num_control', 'usu_fkcolonia'], 'required'],
            [['usu_fecha_nac'], 'safe'],
            [['usu_sexo'], 'string'],
            [['usu_fkcarrera', 'usu_fkcolonia', 'usu_fkuser'], 'integer'],
            [['usu_nombre', 'usu_apellidop', 'usu_apellidom'], 'string', 'max' => 15],
            [['usu_num_control'], 'string', 'max' => 12],
            ['usu_sexo', 'in', 'range' => array_keys(self::optsUsuSexo())],
            [['usu_num_control'], 'unique'],
            [['usu_fkuser'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['usu_fkuser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usu_id' => 'ID',
            'usu_nombre' => 'Nombre',
            'usu_apellidop' => 'Apellidop',
            'usu_apellidom' => 'Apellidom',
            'usu_fecha_nac' => 'Fecha Nac',
            'usu_sexo' => 'Sexo',
            'usu_fkcarrera' => 'Fkcarrera',
            'usu_num_control' => 'Num Control',
            'usu_fkcolonia' => 'Fkcolonia',
            'usu_fkuser' => 'Fkuser',
        ];
    }

    /**
     * Gets query for [[UsuFkuser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuFkuser()
    {
        return $this->hasOne(User::class, ['id' => 'usu_fkuser']);
    }


    /**
     * column usu_sexo ENUM value labels
     * @return string[]
     */
    public static function optsUsuSexo()
    {
        return [
            self::USU_SEXO_M => 'M',
            self::USU_SEXO_F => 'F',
        ];
    }

    /**
     * @return string
     */
    public function displayUsuSexo()
    {
        return self::optsUsuSexo()[$this->usu_sexo];
    }

    /**
     * @return bool
     */
    public function isUsuSexoM()
    {
        return $this->usu_sexo === self::USU_SEXO_M;
    }

    public function setUsuSexoToM()
    {
        $this->usu_sexo = self::USU_SEXO_M;
    }

    /**
     * @return bool
     */
    public function isUsuSexoF()
    {
        return $this->usu_sexo === self::USU_SEXO_F;
    }

    public function setUsuSexoToF()
    {
        $this->usu_sexo = self::USU_SEXO_F;
    }

}
