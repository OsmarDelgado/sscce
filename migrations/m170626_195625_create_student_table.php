<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m170626_195625_create_student_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
			'first_name' => $this->string(250)->notNull(),
			'last_name' => $this->string(250)->notNull(),
			'student_id' => $this->string(9)->notNull(),
			'mail' => $this->string(250)->notNull()->unique(),
			'study_program_id' => $this->integer()->notNull(),
			'token' => $this->string(250)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci');
    
		// creates index for column 'study_program_id'
		$this->createIndex(
            'idx-student-study_program_id',
            'student',
            'study_program_id'
        );

        // add foreign key for table 'study_program'
        $this->addForeignKey(
            'fk-student-study_program_id',
            'student',
            'study_program_id',
            'study_program',
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
            'fk-student-study_program_id',
            'student'
        );

        $this->dropIndex(
            'idx-student-study_program_id',
            'student'
        );
		
        $this->dropTable('student');
    }
}
