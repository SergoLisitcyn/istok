<?php

use yii\db\Migration;

/**
 * Class m241111_154805_create_table_banners
 */
class m241111_154805_create_table_banners extends Migration
{
    public function up()
    {
        $this->createTable('banners', [
            'id' => $this->primaryKey(),
            'text_h1' => $this->string()->null(),
            'text_h2' => $this->text(),
            'image' => $this->string()->null(),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('banners');
    }
}
