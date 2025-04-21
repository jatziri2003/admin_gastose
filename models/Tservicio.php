<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tservicio".
 *
 * @property int $tser_id
 * @property string $tser_descripcion
 */
class Tservicio extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tservicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tser_descripcion'], 'required'],
            [['tser_descripcion'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tser_id' => 'ID',
            'tser_descripcion' => 'Descripcion',
        ];
    }
    public static function map() {
        return ArrayHelper::map(self::find()->all(),'tser_id','tser_descripcion');

    }

}
