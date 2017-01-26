<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170123_114910_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(25),
            'email' => $this->string(100),
            'password' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
