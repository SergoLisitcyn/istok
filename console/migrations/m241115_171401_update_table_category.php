<?php

use yii\db\Migration;

/**
 * Class m241115_171401_update_table_category
 */
class m241115_171401_update_table_category extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'parent_id', $this->integer()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('category', 'parent_id');
    }
}
