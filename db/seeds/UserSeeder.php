<?php

use Phinx\Seed\AbstractSeed;
use Faker\Factory;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Factory::create();
        $data = [];
        for($i = 0; $i < 5; $i++) {
            $rand = rand() % 2;
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => password_hash(123456, PASSWORD_DEFAULT),
                'phone' => $faker->phoneNumber,
                'confirmation_code' => ($rand == 0) ? null: $faker->randomNumber,
                'confirmed_account' => ($rand == 0) ? 'Y': 'N',
                'is_admin' => ($rand == 0) ? 'Y': 'N'
            ];
        }

        $this->insert('users', $data);
    }
}
