<?php

use yii\db\Migration;

/**
 * Class m241130_150740_update_table_services_breadcrumbs
 */
class m241130_150740_update_table_services_breadcrumbs extends Migration
{
    public function up()
    {
        $this->addColumn('services', 'breadcrumbs', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('services', 'breadcrumbs');
    }
}
