<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Exception;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string|null $text_h1
 * @property string|null $text_h2
 * @property string|null $image
 * @property string|null $principles
 * @property string|null $advantages
 * @property int|null $status
 */
class Banners extends ActiveRecord
{
    public $image_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_h2','principles','advantages'], 'string'],
            [['status'], 'integer'],
            [['text_h1', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_h1' => 'Текст H1',
            'text_h2' => 'Текст H2',
            'image' => 'Изображение',
            'status' => 'Статус баннера',
            'principles' => 'Наши принципы',
            'advantages' => 'Преимущества',
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
        if ($imageSquareFile) {
            $directory = Yii::getAlias('@frontend/web/uploads/images/banners/') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-banners.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/banners/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->image_file);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }
    }
}
