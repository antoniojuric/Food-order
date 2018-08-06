<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator
        User::create([
            'first_name' => 'Antonio',
			'last_name' => 'Juric',
			'address' => 'vukovarska',
			'phone_number' => '1245423',
            'email' => 'toni@mail.com',
            'password' => bcrypt('admin'),
            'type' => 'admin'
        ]);

        // User 1
        User::create([
            'first_name' => 'Mate',
			'last_name' => 'Matic',
			'address' => 'vukovarska',
			'phone_number' => '1245423',
            'email' => 'user1@mail.com',
            'password' => bcrypt('1234')
        ]);

        // User 2
        User::create([
            'first_name' => 'Pero',
			'last_name' => 'Peric',
			'address' => 'vukovarska',
			'phone_number' => '124215423',
            'email' => 'user2@mail.com',
            'password' => bcrypt('1234')
        ]);

        // User 3
        User::create([
            'first_name' => 'Ivan',
			'last_name' => 'Ivic',
			'address' => 'vukovarska 1',
			'phone_number' => '12454232',
            'email' => 'user3@mail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
