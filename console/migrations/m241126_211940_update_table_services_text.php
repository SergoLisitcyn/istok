<?php

use yii\db\Migration;

/**
 * Class m241126_211940_update_table_category_text
 */
class m241126_211940_update_table_services_text extends Migration
{
    public function up()
    {
        $this->addColumn('services', 'text_top', $this->text()->null());
        $this->addColumn('services', 'text_bottom', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('services', 'text_top');
        $this->dropColumn('services', 'list');
    }
}
