<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "applications".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $status
 */
class Applications extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applications';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone'], 'required'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
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
            'email' => 'Телефон',
            'phone' => 'Phone',
            'created_at' => 'Дата',
            'updated_at' => 'Updated At',
            'status' => 'Статус',
        ];
    }
}
