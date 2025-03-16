<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $whatsapp
 * @property string|null $telegram
 * @property string|null $maps
 * @property string|null $analytics
 * @property string|null $ok
 * @property string|null $vk
 * @property string|null $dzen
 * @property string|null $call_list
 * @property string|null $call_alert
 * @property string|null $address
 * @property int|null $call
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
            [['call_list'], 'safe'],
            [['call'], 'integer'],
            [['phone', 'email', 'whatsapp', 'telegram','ok','vk','dzen','call_alert','address'], 'string', 'max' => 255],
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
            'address' => 'Адрес',
            'maps' => 'Карта',
            'analytics' => 'Аналитика',
            'ok' => 'Одноклассники',
            'vk' => 'ВК',
            'dzen' => 'ЯДзен',
            'call' => 'Заказать звонок',
            'call_list' => 'Заказать звонок Темы',
            'call_alert' => 'Заказать звонок Сообщение',
        ];
    }

    public function afterFind() {
        parent::afterFind();
        $this->call_list = Json::decode($this->call_list);
    }
}
