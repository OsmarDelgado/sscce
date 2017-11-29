<?php

use yii\db\Migration;

/**
 * Handles the creation of table `constancy_request`.
 */
class m170626_195644_create_constancy_request_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('constancy_request', [
            'id' => $this->primaryKey(),
			'request_id' => $this->integer()->notNull(),
			'contancy_type' => $this->integer()->notNull(),
			'amount' => $this->integer()->notNull(),
			'unit_cost' => $this->decimal($precision = 10,$scale = 2)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
		
		// creates index for column 'request_id'
		$this->createIndex(
            'idx-constancy_request-request_id',
            'constancy_request',
            'request_id'
        );

        // add foreign key for table 'request'
        $this->addForeignKey(
            'fk-constancy_request-request_id',
            'constancy_request',
            'request_id',
            'request',
            'id',
            'CASCADE'
        );
		
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
		$this->dropForeignKey(
            'fk-constancy_request-request_id',
            'constancy_request'
        );

        $this->dropIndex(
            'idx-constancy_request-request_id',
            'constancy_request'
        );
		
        $this->dropTable('constancy_request');
    }
}
