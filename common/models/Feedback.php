<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string|null $type
 * @property string $body
 * @property string|null $filename
 * @property string|null $file_src_filename
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $status
 * @property int|null $version
 */
class Feedback extends ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'body'], 'required'],
            [['body'], 'string'],
            [['created_at', 'updated_at', 'status','version'], 'integer'],
            [['name', 'email', 'phone', 'type', 'filename', 'file_src_filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            'type' => 'Тип',
            'body' => 'Текст',
            'filename' => 'Filename',
            'file_src_filename' => 'File Src Filename',
            'created_at' => 'Дата',
            'updated_at' => 'Updated At',
            'status' => 'Статус',
            'version' => 'version',
        ];
    }
}
