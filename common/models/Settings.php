<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $whatsapp
 * @property string|null $telegram
 * @property string|null $title
 * @property string|null $description
 * @property string|null $maps
 * @property string|null $analytics
 */
class Settings extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['maps', 'analytics'], 'string'],
            [['phone', 'email', 'whatsapp', 'telegram', 'title', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Телефон',
            'email' => 'Email',
            'whatsapp' => 'Whatsapp',
            'telegram' => 'Telegram',
            'title' => 'Title на главной странице',
            'description' => 'Description главной странице',
            'maps' => 'Карта',
            'analytics' => 'Аналитика',
        ];
    }
}
