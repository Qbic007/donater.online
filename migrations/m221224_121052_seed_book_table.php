<?php

use yii\db\Migration;

/**
 * Class m221224_121052_seed_book_table
 */
class m221224_121052_seed_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeBooks();
    }

    private function insertFakeBooks()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $this->insert(
                'book',
                [
                    'title' => $faker->sentence(),
                    'author' => $faker->name,
                    'iban' => $faker->iban(),
                    'release_year' => (int)$faker->year,
                    'cover_image'  => $faker->imageUrl()
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221224_121052_seed_book_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221224_121052_seed_book_table cannot be reverted.\n";

        return false;
    }
    */
}
