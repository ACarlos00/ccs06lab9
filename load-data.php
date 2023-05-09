<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Boarr', 'Male', 'May 25, 2019', 'Anilov', 'carlos.Boarr@gmail.com', 'Palayan sa Essel', '09346387430');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Rizzler',
			'gender' => 'Male',
			'birthdate' => 'April 1, 2023',
			'owner' => 'Anilov',
			'email' => 'carlos.Rizz@gmail.com',
			'address' => 'Palayan sa Essel',
			'contact_number' => '09346387430'
		],
		[
			'name' => 'Silvers',
			'gender' => 'Male',
			'birthdate' => 'November 20, 2021',
			'owner' => 'Anilov',
			'email' => 'carlos.Silvers@gmail.com',
			'address' => 'Palayan sa Essel',
			'contact_number' => '09346387430'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

