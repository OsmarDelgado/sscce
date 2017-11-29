<?php

use yii\db\Migration;

/**
 * Handles the creation of table `request`.
 */
class m170626_195633_create_request_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('request', [
            'id' => $this->primaryKey(),
			'student_id' => $this->integer()->notNull(),
			'request_date' => $this->dateTime()->notNull(),
			'observation' => $this->text(),
			'state_id' => $this->integer()->notNull(),
			'paid' => $this->boolean()->notNull(),
			'paid_date' => $this->dateTime()->notNull(),
			'total_cost' => $this->decimal($precision = 10,$scale = 2)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
		
		// creates index for column 'student_id'
		$this->createIndex(
            'idx-request-student_id',
            'request',
            'student_id'
        );

        // add foreign key for table 'student'
        $this->addForeignKey(
            'fk-request-student_id',
            'request',
            'student_id',
            'student',
            'id',
            'CASCADE'
        );
		
		// creates index for column 'state_id'
		$this->createIndex(
            'idx-request-state_id',
            'request',
            'state_id'
        );

        // add foreign key for table 'student'
        $this->addForeignKey(
            'fk-request-state_id',
            'request',
            'state_id',
            'student',
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
            'fk-request-student_id',
            'request'
        );

        $this->dropIndex(
            'idx-request-student_id',
            'request'
        );
		
		$this->dropForeignKey(
            'fk-request-state_id',
            'request'
        );

        $this->dropIndex(
            'idx-request-state_id',
            'request'
        );
		
        $this->dropTable('request');
    }
}
