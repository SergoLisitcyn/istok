<?php

use yii\db\Migration;

/**
 * Class m241111_170641_create_table_applications
 */
class m241111_170641_create_table_applications extends Migration
{
    public function up()
    {
        $this->createTable('applications', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->dropTable('applications');
    }
}
