<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "llb_form".
 *
 * @property integer $id
 * @property integer $lid
 * @property string $name
 * @property string $Contact
 * @property string $gender
 * @property integer $age
 * @property string $job
 * @property string $thinking
 * @property integer $status
 * @property string $datetime
 * @property string $ip
 */
class LlbForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'llb_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lid', 'name', 'Contact', 'gender', 'age', 'job'], 'required'],
            [['lid', 'age', 'status'], 'integer'],
            [['datetime'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['Contact', 'job', 'thinking'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 1],
            [['ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lid' => 'Lid',
            'name' => 'Name',
            'Contact' => 'Contact',
            'gender' => 'Gender',
            'age' => 'Age',
            'job' => 'Job',
            'thinking' => 'Thinking',
            'status' => 'Status',
            'datetime' => 'Datetime',
            'ip' => 'Ip',
        ];
    }
}
