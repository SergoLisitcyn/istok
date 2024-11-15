<?php

namespace common\models;

use Yii;
use yii\db\Exception;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $number
 * @property string $name
 * @property string|null $image
 * @property string|null $desc
 * @property string|null $price
 * @property string|null $url
 * @property int|null $sort
 * @property int|null $status
 * @property int $parent_id
 */
class Category extends \yii\db\ActiveRecord
{
    public $image_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'parent_id'], 'required'],
            [['sort', 'status', 'parent_id'], 'integer'],
            [['number', 'name', 'image', 'desc', 'price', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Номер',
            'name' => 'Название',
            'image' => 'Изображение',
            'desc' => 'Описание',
            'price' => 'Цена',
            'url' => 'Url',
            'sort' => 'Сортировка',
            'status' => 'Статус',
            'parent_id' => 'Вид работ',
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
            $directory = Yii::getAlias('@frontend/web/uploads/images/category/') . DIRECTORY_SEPARATOR;
            if (!is_dir($directory)) {
                FileHelper::createDirectory($directory);
            }

            $uid = date('YmdHs').Yii::$app->security->generateRandomString(6);
            $fileName = $uid . '-category.' . $imageSquareFile->extension;
            $filePath = $directory . $fileName;
            if ($imageSquareFile->saveAs($filePath)) {
                $path = '/uploads/images/category/' . $fileName;

                @unlink(Yii::getAlias('@frontend/web') . $this->image_file);
                $this->setAttribute('image', $path);
                $this->save();
            }
        }
    }

    public function getParent()
    {
        return $this->hasMany(Services::className(), ['id' => 'parent_id']);
    }
}
