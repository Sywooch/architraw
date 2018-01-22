<?php

use yii\db\Migration;

/**
 * Handles the creation of table `service`.
 */
class m180118_133456_create_service_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('service', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'text' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('service');
    }
}
