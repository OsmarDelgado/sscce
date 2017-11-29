<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property integer $student_id
 * @property string $request_date
 * @property string $observation
 * @property integer $state_id
 * @property integer $paid
 * @property string $paid_date
 * @property string $total_cost
 *
 * @property ConstancyRequest[] $constancyRequests
 * @property Student $state
 * @property Student $student
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'request_date', 'state_id', 'paid', 'paid_date', 'total_cost'], 'required'],
            [['student_id', 'state_id', 'paid'], 'integer'],
            [['request_date', 'paid_date'], 'safe'],
            [['observation'], 'string'],
            [['total_cost'], 'number'],
            [['request_date'], 'unique'],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['state_id' => 'id']],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'student_id' => Yii::t('app', 'ID Estudiante'),
            'request_date' => Yii::t('app', 'Fecha de Solicitud'),
            'observation' => Yii::t('app', 'Observaciones'),
            'state_id' => Yii::t('app', 'ID Estado'),
            'paid' => Yii::t('app', 'Pago'),
            'paid_date' => Yii::t('app', 'Fecha de Pago'),
            'total_cost' => Yii::t('app', 'Costo Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConstancyRequests()
    {
        return $this->hasMany(ConstancyRequest::className(), ['request_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
