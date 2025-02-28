<?php

use yii\db\Migration;

/**
 * Class m250207_143526_create_table_gallery
 */
class m250207_143526_create_table_gallery extends Migration
{
    public function up()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11)->notNull(),
            'name' => $this->string()->notNull(),
            'image' => $this->text()->null(),
            'description' => $this->string()->null(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('gallery');
    }
}
