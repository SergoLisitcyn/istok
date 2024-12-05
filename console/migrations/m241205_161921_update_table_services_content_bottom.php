<?php

use yii\db\Migration;

/**
 * Class m241205_161921_update_table_services_content_bottom
 */
class m241205_161921_update_table_services_content_bottom extends Migration
{
    public function up()
    {
        $this->addColumn('services', 'content_bottom', $this->text()->null());
        $this->alterColumn('category', 'price', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('services', 'content_bottom');
    }
}
