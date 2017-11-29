<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constancy_request".
 *
 * @property integer $id
 * @property integer $request_id
 * @property integer $contancy_type
 * @property integer $amount
 * @property string $unit_cost
 *
 * @property Request $request
 */
class ConstancyRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constancy_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_id', 'contancy_type', 'amount', 'unit_cost'], 'required'],
            [['request_id', 'contancy_type', 'amount'], 'integer'],
            [['unit_cost'], 'number'],
            [['request_id'], 'exist', 'skipOnError' => true, 'targetClass' => Request::className(), 'targetAttribute' => ['request_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'request_id' => Yii::t('app', 'Request ID'),
            'contancy_type' => Yii::t('app', 'Contancy Type'),
            'amount' => Yii::t('app', 'Amount'),
            'unit_cost' => Yii::t('app', 'Unit Cost'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(Request::className(), ['id' => 'request_id']);
    }
}
