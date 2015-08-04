<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "llb_activity".
 *
 * @property integer $id
 * @property string $title
 * @property string $intro
 * @property string $guest
 * @property string $gender
 * @property integer $age
 * @property string $job
 * @property string $guest_intro
 * @property string $createdate
 * @property string $enddate
 * @property integer $ownerid
 * @property integer $status
 * @property integer $views
 * @property integer $formid
 * @property string $starttime
 * @property string $address
 * @property string $address_intro
 * @property string $endintro
 * @property string $attachment
 */
class LlbActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'llb_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'intro'], 'required'],
            [['age', 'ownerid', 'status', 'views', 'formid'], 'integer'],
            [['createdate', 'enddate', 'starttime'], 'safe'],
            [['attachment'], 'string'],
            [['title', 'guest', 'job'], 'string', 'max' => 50],
            [['intro', 'guest_intro', 'address', 'address_intro', 'endintro'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'intro' => 'Intro',
            'guest' => 'Guest',
            'gender' => 'Gender',
            'age' => 'Age',
            'job' => 'Job',
            'guest_intro' => 'Guest Intro',
            'createdate' => 'Createdate',
            'enddate' => 'Enddate',
            'ownerid' => 'Ownerid',
            'status' => 'Status',
            'views' => 'Views',
            'formid' => 'Formid',
            'starttime' => 'Starttime',
            'address' => 'Address',
            'address_intro' => 'Address Intro',
            'endintro' => 'Endintro',
            'attachment' => 'Attachment',
        ];
    }
}
