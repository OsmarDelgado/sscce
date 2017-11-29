<?php

use yii\db\Migration;

/**
 * Handles the creation of table `constancy_type`.
 */
class m170626_195621_create_constancy_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('constancy_type', [
            'id' => $this->primaryKey(),
			'type' => $this->string(250)->notNull(),
			'unit_cost' => $this->decimal($precision = 10,$scale = 2)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('constancy_type');
    }
}
