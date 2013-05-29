<?php

class CategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();

        DB::table('category')->insert(
            array(
                //Earn
                array(
                    'name' => 'Salary',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Award',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Selling',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Give',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Interest Money',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Debt',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Freelance',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),

                //Spent
                array(
                    'name' => 'Transport',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Friends & Lover',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Family',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Healthy',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Shopping',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Loan',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
                array(
                    'name' => 'Invest',
                    'user_id' => null,
                    'image_id' => null,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            )
        );
    }

}