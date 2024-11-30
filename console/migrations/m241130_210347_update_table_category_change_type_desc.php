<?php

use yii\db\Migration;

/**
 * Class m241130_210347_update_table_category_change_type_desc
 */
class m241130_210347_update_table_category_change_type_desc extends Migration
{
    public function up()
    {
        $this->alterColumn('category', 'desc', $this->text());
    }
}
