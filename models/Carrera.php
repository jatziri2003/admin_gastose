<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "carrera".
 *
 * @property int $car_id
 * @property string $car_nombre
 * @property int|null $car_semestres
 * @property string|null $car_clave
 * @property string $car_url
 */
class Carrera extends \yii\db\ActiveRecord
{
    public $imagen; 

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['car_nombre', 'car_url','car_semestres','car_clave'], 'required'],
            [['car_semestres'], 'integer'],
            [['car_nombre'], 'string', 'max' => 150],
            [['car_url'], 'string'],
            [['car_clave'], 'string', 'max' => 15],
            [['imagen'], 'safe'],
            [['imagen'], 'file', 'extensions'=>'jpg, png'],
            [['imagen'], 'file', 'maxSize'=>'100000'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'car_id' => 'ID',
            'car_nombre' => 'Nombre',
            'car_semestres' => 'Semestres',
            'car_url' => 'Imagen',
            'car_clave' => 'Clave',
            'imagen'=> 'Imagen'
        ];
    }
    public static function map() {
        return ArrayHelper::map(self::find()->all(),'car_id','car_nombre');

    }


}
