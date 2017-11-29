<?php

use yii\db\Migration;

/**
 * Handles the creation of table `state`.
 */
class m170626_195605_create_state_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('state', [
            'id' => $this->primaryKey(),
			'state' => $this->string(250)->notNull()->unique(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('state');
    }
}
