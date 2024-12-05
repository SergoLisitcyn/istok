<?php

use yii\db\Migration;

/**
 * Class m241205_194312_create_table_pages
 */
class m241205_194312_create_table_pages extends Migration
{
    public function up()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url' => $this->string()->null(),
            'content' => $this->text(),
            'title' => $this->string()->defaultValue(null),
            'title_seo' => $this->string()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'doc' => $this->text()->null(),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('pages');
    }
}
