<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Exception;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property string $desc
 * @property string $url
 * @property string|null $image
 * @property string|null $banner
 * @property string|null $text
 * @property string|null $title
 * @property string|null $description
 * @property int|null $sort
 * @property int|null $status
 */
class Services extends ActiveRecord
{
    public $image_file;
    public $banner_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'desc', 'url'], 'required'],
            [['text'], 'string'],
            [['sort', 'status'], 'integer'],
            [['name', 'desc', 'url', 'image', 'banner', 'title', 'description'], 'string', 'max' => 255],
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
            'desc' => 'Описание',
            'url' => 'Ссылка',
            'image' => 'Изображение',
            'banner' => 'Баннер',
            'text' => 'Контент',
            'title' => 'Title',
            'description' => 'Description',
            'sort' => 'Сортировка',
            'status' => 'Статус',
        ];
    }

    /**
     * @throws Exception
     * @throws \yii\base\Exception
     */
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $imageSquareFile = UploadedFile::getInstance($this, 'image_file');
        $imageBannerFile = UploadedFile::getInstance($this, 'banner_file');
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/services/') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-services-image.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/services/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->image_file);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }

        if ($imageBannerFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/banner/') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-services-banner.' . $imageBannerFile->extension;
            $filePath = $directory . $fileName;
            if ($imageBannerFile->saveAs($filePath)) {
                $path = '/uploads/images/services/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->banner_file);
                $this->setAttribute('banner', $path);
                $this->save();
            }
        }
    }
}
