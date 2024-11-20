<?php

use yii\db\Migration;

/**
 * Class m241120_194034_update_table_category
 */
class m241120_194034_update_table_category extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'type', $this->integer()->null());
        $this->addColumn('category', 'list', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('category', 'type');
        $this->dropColumn('category', 'list');
    }
}
