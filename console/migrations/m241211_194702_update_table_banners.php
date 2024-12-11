<?php

use yii\db\Migration;

/**
 * Class m241211_194702_update_table_banners
 */
class m241211_194702_update_table_banners extends Migration
{
    public function up()
    {
        $this->addColumn('banners', 'principles', $this->text());
        $this->addColumn('banners', 'advantages', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banners', 'principles');
        $this->dropColumn('banners', 'advantages');
    }
}
