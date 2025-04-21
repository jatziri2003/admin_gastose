<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documento".
 *
 * @property int $doc_id
 * @property string $doc_tipo_doc
 * @property string $doc_url
 */
class Documento extends \yii\db\ActiveRecord
{
    public $imagen; 
    /**
     * ENUM field values
     */
    const DOC_TIPO_DOC_REFERENCIA = 'Referencia';
    const DOC_TIPO_DOC_BOUCHER = 'Boucher';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doc_tipo_doc', 'doc_url'], 'required'],
            [['doc_tipo_doc', 'doc_url'], 'string'],
            ['doc_tipo_doc', 'in', 'range' => array_keys(self::optsDocTipoDoc())],
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
            'doc_id' => 'ID',
            'doc_tipo_doc' => 'Tipo Doc',
            'doc_url' => ' Imagen',
            'imagen'=> 'Imagen'

        ];
    }


    /**
     * column doc_tipo_doc ENUM value labels
     * @return string[]
     */
    public static function optsDocTipoDoc()
    {
        return [
            self::DOC_TIPO_DOC_REFERENCIA => 'Referencia',
            self::DOC_TIPO_DOC_BOUCHER => 'Boucher',
        ];
    }

    /**
     * @return string
     */
    public function displayDocTipoDoc()
    {
        return self::optsDocTipoDoc()[$this->doc_tipo_doc];
    }

    /**
     * @return bool
     */
    public function isDocTipoDocReferencia()
    {
        return $this->doc_tipo_doc === self::DOC_TIPO_DOC_REFERENCIA;
    }

    public function setDocTipoDocToReferencia()
    {
        $this->doc_tipo_doc = self::DOC_TIPO_DOC_REFERENCIA;
    }

    /**
     * @return bool
     */
    public function isDocTipoDocBoucher()
    {
        return $this->doc_tipo_doc === self::DOC_TIPO_DOC_BOUCHER;
    }

    public function setDocTipoDocToBoucher()
    {
        $this->doc_tipo_doc = self::DOC_TIPO_DOC_BOUCHER;
    }
}
