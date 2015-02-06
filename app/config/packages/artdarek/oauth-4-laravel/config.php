<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),	
        /**
		 * Google
		 */
	  	'Google' => array(
		    'client_id'     => $_ENV['GOOGLE_CLIENT_ID'],
		    'client_secret' => $_ENV['GOOGLE_CLIENT_SECRET'],
		    'scope'         => array('userinfo_email', 'userinfo_profile'),
		), 	
        /**
		 * Linkedin
		 */
		'Linkedin' => array(
		    'client_id'     => 'Your Linkedin API ID',
		    'client_secret' => 'Your Linkedin API Secret',
		),  

	)

);