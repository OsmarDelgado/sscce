<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $student_id
 * @property string $mail
 * @property integer $study_program_id
 * @property string $token
 *
 * @property Request $request
 * @property Request[] $requests
 * @property StudyProgram $studyProgram
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'student_id', 'mail', 'study_program_id', 'token'], 'required', 'on' => ['default']],
            [['mail'], 'required', 'on' => ['login']],
            [['study_program_id'], 'integer'],
            [['first_name', 'last_name', 'mail', 'token'], 'string', 'max' => 250],
            [['student_id'], 'string', 'max' => 8],
            [['mail'], 'unique'],
            [['mail'], 'email'],
            [['study_program_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudyProgram::className(), 'targetAttribute' => ['study_program_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'Nombre(s)'),
            'last_name' => Yii::t('app', 'Apellidos'),
            'student_id' => Yii::t('app', 'ID del estudiante'),
            'mail' => Yii::t('app', 'Correo electrónico'),
            'study_program_id' => Yii::t('app', 'ID Programa de estudios'),
            'token' => Yii::t('app', 'Token'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(Request::className(), ['state_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudyProgram()
    {
        return $this->hasOne(StudyProgram::className(), ['id' => 'study_program_id']);
    }
}
