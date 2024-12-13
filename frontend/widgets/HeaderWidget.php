<?php

namespace frontend\widgets;

use common\models\Services;
use common\models\Settings;
use yii\bootstrap\Widget;

class HeaderWidget extends Widget
{
    public $type;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $settings = Settings::findOne(1);
        if($this->type == 'footer_services'){
            $services = Services::find()->where(['status' => 1])->orderBy(['sort' => SORT_ASC])->all();
            return $this->render($this->type,[
                'services' => $services
            ]);
        }

        return $this->render($this->type,[
            'settings' => $settings
        ]);
    }
}