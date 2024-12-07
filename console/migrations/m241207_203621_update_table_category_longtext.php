<?php

use yii\db\Migration;

/**
 * Class m241207_203621_update_table_category_longtext
 */
class m241207_203621_update_table_category_longtext extends Migration
{
    public function up()
    {
        $this->alterColumn('category', 'content', $this->getDb()->getSchema()->createColumnSchemaBuilder('longtext'));
    }
}
