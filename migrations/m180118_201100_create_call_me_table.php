<?php

use yii\db\Migration;

/**
 * Handles the creation of table `call_me`.
 */
class m180118_201100_create_call_me_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('call_me', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('call_me');
    }
}
