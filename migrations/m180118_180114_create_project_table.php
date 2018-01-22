<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m180118_180114_create_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'text' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('project');
    }
}
