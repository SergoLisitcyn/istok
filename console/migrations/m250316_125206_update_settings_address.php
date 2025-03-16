<?php

use yii\db\Migration;

/**
 * Class m250316_125206_update_settings_address
 */
class m250316_125206_update_settings_address extends Migration
{
    public function up()
    {
        $this->addColumn('settings', 'address', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('settings', 'address');
    }
}
