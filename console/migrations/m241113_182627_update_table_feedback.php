<?php

use yii\db\Migration;

/**
 * Class m241113_182627_update_table_feedback
 */
class m241113_182627_update_table_feedback extends Migration
{
    public function up()
    {
        $this->addColumn('feedback', 'version', $this->integer()->defaultValue(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('feedback', 'version');
    }
}
