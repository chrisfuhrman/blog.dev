<?php	

class PostTableSeeder extends Seeder 
{
	public function run()
	{
		$user = User::first();

		for ($i = 1; $i <= 10; $i++) {

			$post = new Post();
		
	        $post->title = "Post $i";
	        $post->body = "This is post $i. ";
	        $post->body .= 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

	        $post->user_id = $user->id;
	        $post->save();


		}
	}

}