<?php

use yii\db\Migration;

/**
 * Class m241209_215828_update_table_settings_call
 */
class m241209_215828_update_table_settings_call extends Migration
{
    public function up()
    {
        $this->addColumn('settings', 'call_list', $this->text());
        $this->addColumn('settings', 'call_alert', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('settings', 'call_list');
        $this->dropColumn('settings', 'call_alert');
    }
}
