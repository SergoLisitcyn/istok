<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $name
 * @property string|null $url
 * @property string|null $content
 * @property string|null $title
 * @property string|null $title_seo
 * @property string|null $description
 * @property string|null $doc
 * @property int|null $status
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content', 'doc'], 'string'],
            [['status'], 'integer'],
            [['name', 'url', 'title', 'title_seo', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'url' => 'Url',
            'content' => 'Контент',
            'title' => 'Заголовок H1',
            'title_seo' => 'Title Seo',
            'description' => 'Description',
            'doc' => 'Документ',
            'status' => 'Статус',
        ];
    }
}
