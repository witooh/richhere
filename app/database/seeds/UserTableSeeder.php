<?php

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->truncate();

        DB::table('user')->insert(
            array(
                'email' => 'witoo@outlook.com',
                'password'=>Hash::make('VkgiupoF9'),
                'name'=>'Jack',
                'admin'=>true,
                'created_at'=>new DateTime,
                'updated_at'=>new DateTime,
            )
        );
    }

}