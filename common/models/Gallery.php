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

    public static function attachImage($files,$post)
    {
        $absolutePath = $files['tmp_name']['image'];
        $fileRealName = $files['name']['image'];
        $absolutePathArr = [];
        $i = 1;
        foreach ($absolutePath as $arr){
            foreach ($arr as $value){
                $absolutePathArr[$i]['tmp_name'] = $value;
                $i++;
            }
        }

        foreach ($absolutePathArr as $key => $item){
            foreach ($fileRealName as $arrs){
                foreach ($arrs as $value){
                    $absolutePathArr[$key]['name'] = $value;
                }
                if(!empty($post['image'])){

                    foreach ($post['image'] as $item){
                        if(is_array($item)){
                            foreach ($item as $s){
                                $absolutePathArr[$key]['desc'] = $s;
                            }
                        }
                    }
                }
            }
        }
        $directory = Yii::getAlias('@frontend/web/uploads/images/gallery') . DIRECTORY_SEPARATOR;
        if (!is_dir($directory)) {
            FileHelper::createDirectory($directory);
        }

        foreach ($absolutePathArr as $key => $path){
            $pictureFileName =
                substr(md5(microtime(true) . $path['tmp_name']), 4, 6)
                . '.' .
                pathinfo($path['name'], PATHINFO_EXTENSION);
            $filePath = $directory . $pictureFileName;
            $pathUrl = '/uploads/images/gallery/'.$pictureFileName;
            copy($path['tmp_name'], $filePath);
            unset($absolutePathArr[$key]['tmp_name']);
            unset($absolutePathArr[$key]['name']);
            $absolutePathArr[$key]['file'] = $pathUrl;
        }


        return $absolutePathArr;
    }
}
