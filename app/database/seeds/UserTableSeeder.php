<?php	

class UserTableSeeder extends Seeder 
{
	public function run()
	{
        $user = new User();
        $user->email = $_ENV['DEFAULT_USER_EMAIL'];
        $user->password = $_ENV['DEFAULT_USER_PASSWORD'];
        $user->save();
	}

}