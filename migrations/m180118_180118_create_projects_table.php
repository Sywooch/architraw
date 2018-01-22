<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 */
class m180118_180118_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'category' => $this->string(),
            'name' => $this->string(),
            'flat' => $this->float(),
            'status' => $this->string(),
            'image' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('projects');
    }
}
