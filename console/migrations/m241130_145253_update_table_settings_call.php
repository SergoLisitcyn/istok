<?php

use yii\db\Migration;

/**
 * Class m241130_145252_update_table_settings_call
 */
class m241130_145253_update_table_settings_call extends Migration
{
    public function up()
    {
        $this->addColumn('settings', 'call', $this->integer(1)->defaultValue(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('settings', 'call');
    }
}
