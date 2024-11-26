<?php

use yii\db\Migration;

/**
 * Class m241126_203805_update_table_settings
 */
class m241126_203805_update_table_settings extends Migration
{
    public function up()
    {
        $this->addColumn('settings', 'ok', $this->string()->null());
        $this->addColumn('settings', 'vk', $this->string()->null());
        $this->addColumn('settings', 'dzen', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('settings', 'ok');
        $this->dropColumn('settings', 'vk');
        $this->dropColumn('settings', 'dzen');
    }
}
