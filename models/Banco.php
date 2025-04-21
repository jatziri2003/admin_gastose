<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "banco".
 *
 * @property int $ban_id
 * @property string $ban_nombre
 * @property string $ban_descripcion
 */
class Banco extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ban_nombre', 'ban_descripcion'], 'required'],
            [['ban_nombre'], 'string', 'max' => 45],
            [['ban_descripcion'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ban_id' => 'ID',
            'ban_nombre' => 'Nombre',
            'ban_descripcion' => 'Descripcion',
        ];
    }
    public static function map() {
        return ArrayHelper::map(self::find()->all(),'ban_id','ban_nombre');

    }

}
