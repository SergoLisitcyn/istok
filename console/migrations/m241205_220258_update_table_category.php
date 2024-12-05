<?php

use yii\db\Migration;

/**
 * Class m241205_220258_update_table_category
 */
class m241205_220258_update_table_category extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'content', $this->text()->null());
        $this->addColumn('category', 'title', $this->string()->defaultValue(null));
        $this->addColumn('category', 'title_seo', $this->string()->defaultValue(null));
        $this->addColumn('category', 'description', $this->string()->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('category', 'content');
        $this->dropColumn('category', 'title');
        $this->dropColumn('category', 'title_seo');
        $this->dropColumn('category', 'description');
    }
}
