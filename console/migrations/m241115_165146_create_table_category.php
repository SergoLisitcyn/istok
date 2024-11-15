<?php

use yii\db\Migration;

/**
 * Class m241115_165146_create_table_category
 */
class m241115_165146_create_table_category extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'number' => $this->string()->null(),
            'name' => $this->string()->notNull(),
            'image' => $this->string()->null(),
            'desc' => $this->string()->null(),
            'price' => $this->string()->null(),
            'url' => $this->string()->null(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
