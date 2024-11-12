<?php

use yii\db\Migration;

/**
 * Class m241106_141951_create_table_settings
 */
class m241106_141951_create_table_settings extends Migration
{
    public function up()
    {
        $this->createTable('settings', [
            'id' => $this->primaryKey(),
            'phone' => $this->string()->null(),
            'email' => $this->string()->null(),
            'whatsapp' => $this->string()->null(),
            'telegram' => $this->string()->null(),
            'title' => $this->string()->null(),
            'description' => $this->string()->null(),
            'maps' => $this->text()->null(),
            'analytics' => $this->text()->null()
        ]);
    }

    public function down()
    {
        $this->dropTable('settings');
    }
}
