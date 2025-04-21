<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "dashboard".
 *
 * @property int $das_id
 * @property int $das_orden
 * @property string $das_imagen
 * @property string $das_titulo
 * @property string $das_url
 * @property int $das_estatus
 * @property string $das_roles
 */
class Dashboard extends \yii\db\ActiveRecord
{
    public $archivo_imagen;
    public $lista_roles;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dashboard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['das_orden', /*'das_imagen',*/ 'das_titulo', 'das_url', 'das_estatus', 'das_roles'], 'required'],
            [['das_orden', 'das_estatus'], 'integer'],
            [['das_imagen', 'das_titulo', 'das_roles'], 'string', 'max' => 50],
            [['das_url'], 'string', 'max' => 100],
            [['das_imagen'], 'unique'],

            [
                ['das_imagen'],
                'match',
                'pattern' => '/^[a-z]+[a-z0-9_]*$/',
                'message' => Yii::t('app', 'letra+caracter: minúsculas, sin espacios, sin acentos.')
            ],
            [['archivo_imagen', 'lista_roles'], 'safe'],
            //[['archivo_imagen'], 'file', 'extensions' => 'png'],
            //[['archivo_imagen'], 'file', 'maxSize' => '10000000'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'das_id' => 'ID',
            'das_orden' => ' Orden',
            'das_imagen' => 'Imagen',
            'das_titulo' => 'Titulo',
            'das_url' => 'Url',
            'das_estatus' => 'Estatus',
            'das_roles' => 'Roles',
            'img' => Yii::t('app', 'Imagen'),
            'sta' => Yii::t('app', 'Estatus'),
            'archivo_imagen' => Yii::t('app', 'Imagen'),
            'lista_roles' => Yii::t('app', 'Roles'),
        ];
    }
    public function getImg()
    {

        $borde = $this->das_estatus == 1 ? ''   : 'border: 2px solid red red;';

        $activo = $this->das_estatus == 1 ? 'Activo' : 'Inactivo';


        return Html::img(

            "/img/dashboard/{$this->das_imagen}.png",

            ['alt' => Yii::t('app', $this->das_titulo) . ':' . $activo, 'style' => "width: 70%; ($borde}"]
        );
    }

    public function getSta()
    {

        $texto = $this->das_estatus == 1 ? 'Activo' : 'Inactivo';

        $color = $this->das_estatus == 1 ? 'success' : 'default';

        return Html::button($texto, ['class' => "btn btn-{$color}", 'style' => 'width: 100%; ']);
    }
}
