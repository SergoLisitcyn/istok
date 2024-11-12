<?php

use yii\db\Migration;

/**
 * Class m241106_193029_create_table_services
 */
class m241106_193029_create_table_services extends Migration
{
    public function up()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'desc' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'image' => $this->string()->null(),
            'banner' => $this->string()->null(),
            'text' => $this->text(),
            'title' => $this->string()->null(),
            'description' => $this->string()->null(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('services');
    }
}
