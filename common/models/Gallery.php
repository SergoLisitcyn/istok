<?php

namespace common\models;

use Yii;
use yii\base\Exception;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use yii\web\UploadedFile;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string|null $image
 * @property string|null $description
 * @property int|null $sort
 * @property int|null $status
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $imageFiles;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    public function afterFind() {
        parent::afterFind();
        $this->image = Json::decode($this->image);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'name'], 'required'],
            [['parent_id', 'sort', 'status'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
            [['image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Виды работ',
            'name' => 'Название галереи',
            'image' => 'Изображения',
            'description' => 'Описание',
            'sort' => 'Сортировка',
            'status' => 'Статус',
        ];
    }

    public function getParent()
    {
        return $this->hasMany(Services::className(), ['id' => 'parent_id']);
    }

    public static function attachImage($uploadedFiles,$post)
    {
        $descriptions = $_POST['descriptions'] ?? [];
        $directory = Yii::getAlias('@frontend/web/uploads/images/gallery') . DIRECTORY_SEPARATOR;
        $existingData = [];

        if (!is_dir($directory)) {
            FileHelper::createDirectory($directory);
        }

        foreach ($uploadedFiles as $index => $file) {
            $fileName = substr(md5(microtime(true) . $file['tmp_name']), 4, 6) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
            $filePath = $directory . $fileName;
            $fileUrl = '/uploads/images/gallery/' . $fileName;

            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                $existingData[] = ['file' => $fileUrl, 'desc' => $descriptions[$index] ?? ''];
            }
        }
        return $existingData;
    }
}
