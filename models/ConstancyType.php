<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constancy_type".
 *
 * @property integer $id
 * @property string $type
 * @property string $unit_cost
 */
class ConstancyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constancy_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'unit_cost'], 'required'],
            [['unit_cost'], 'number'],
            [['type'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Tipo'),
            'unit_cost' => Yii::t('app', 'Costo por Unidad'),
        ];
    }
}
