<?php

use yii\db\Migration;

/**
 * Handles the creation of table `study_program`.
 */
class m170626_195551_create_study_program_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('study_program', [
            'id' => $this->primaryKey(),
			'name' => $this->string(250)->notNull()->unique(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('study_program');
    }
}
