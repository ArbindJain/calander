<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SentryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        Sentry::getUserProvider()->create([
            'email'    => 'user@user.com',
            'password' => 'passworduser',
            'first_name' => 'UserFirstName',
            'last_name' => 'UserLastName',
            'activated' => 1,
        ]);

        Sentry::getUserProvider()->create([
            'email'    => 'user2@user2.com',
            'password' => 'passworduser2',
            'first_name' => 'AdminFirstName',
            'last_name' => 'AdminLastName',
            'activated' => 1,
        ]);

        $this->command->info('Users seeded!');
    }
}
