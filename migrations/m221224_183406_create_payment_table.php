<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment}}`.
 */
class m221224_183406_create_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'payment',
            [
                'id'     => $this->primaryKey(),
                'amount' => $this->integer(),
                'status' => $this->smallInteger()
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%payment}}');
    }
}
