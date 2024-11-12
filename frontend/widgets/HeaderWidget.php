<?php

namespace frontend\widgets;

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

        return $this->render($this->type,[
            'settings' => $settings
        ]);
    }
}