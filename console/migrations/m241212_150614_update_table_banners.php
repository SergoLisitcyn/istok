<?php

use yii\db\Migration;

/**
 * Class m241212_150614_update_table_banners
 */
class m241212_150614_update_table_banners extends Migration
{
    public function up()
    {
        $this->addColumn('banners', 'title', $this->string()->null());
        $this->addColumn('banners', 'description', $this->string()->null());
        $this->dropColumn('settings', 'title');
        $this->dropColumn('settings', 'description');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banners', 'title');
        $this->dropColumn('banners', 'description');
    }
}
