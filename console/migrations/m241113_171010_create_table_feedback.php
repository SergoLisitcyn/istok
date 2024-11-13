<?php

use yii\db\Migration;

/**
 * Class m241113_171010_create_table_feedback
 */
class m241113_171010_create_table_feedback extends Migration
{
    public function up()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'type' => $this->string()->null(),
            'body' => $this->text()->notNull(),
            'filename' => $this->string()->null(),
            'file_src_filename' => $this->string()->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->dropTable('feedback');
    }
}
