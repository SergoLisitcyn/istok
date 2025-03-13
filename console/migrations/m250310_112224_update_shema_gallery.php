<?php

use yii\db\Migration;

/**
 * Class m250310_112224_update_shema_gallery
 */
class m250310_112224_update_shema_gallery extends Migration
{
    public function up()
    {
        $this->alterColumn('gallery', 'description', $this->text()->null());
    }
}
