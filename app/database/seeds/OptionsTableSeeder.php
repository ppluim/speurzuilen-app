<?php

class OptionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('options')->truncate();

		$options = array(
			[
				'id' => '1',
				'question_id' => '1',
				'title' => 'Je kan ze eten',
				'description' => 'Dat klopt inderdaad! Volg de pijl op het paaltje naar de volgende Speurzuil!',
				'correct' => true
			],
			[
				'id' => '2',
				'question_id' => '1',
				'title' => 'Ze zijn voor de sier',
				'description' => 'Nee, dat is niet het juiste antwoord. Probeer het nog een keer!',
				'correct' => false
			],
			[
				'id' => '3',
				'question_id' => '1',
				'title' => 'Het zijn altijd bomen',
				'description' => 'Helaas, probeer het nog een keer!',
				'correct' => false
			],
			[
				'id' => '4',
				'question_id' => '2',
				'title' => 'Ram',
				'description' => 'Nee, dit is de naam voor het mannetjes schaap. Klik nog eens!',
				'correct' => false
			],
			[
				'id' => '5',
				'question_id' => '2',
				'title' => 'Lam',
				'description' => 'Dat klopt inderdaad! Volg de pijl naar het blauwe paaltje!',
				'correct' => true
			],
			[
				'id' => '6',
				'question_id' => '2',
				'title' => 'Ooi',
				'description' => 'Helaas, Dit is de naam voor een vrouwtjes schaap. Probeer het nog eens!',
				'correct' => false
			],
			[
				'id' => '7',
				'question_id' => '3',
				'title' => 'Ram',
				'description' => 'Nee, dit is de naam voor het mannetjes schaap. Klik nog eens!',
				'correct' => false
			],
			[
				'id' => '8',
				'question_id' => '3',
				'title' => 'Lam',
				'description' => 'Dat klopt inderdaad! Volg de pijl naar het blauwe paaltje!',
				'correct' => true
			],
			[
				'id' => '9',
				'question_id' => '3',
				'title' => 'Ooi',
				'description' => 'Helaas, Dit is de naam voor een vrouwtjes schaap. Probeer het nog eens!',
				'correct' => false
			]


		);

		// Uncomment the below to run the seeder
		DB::table('options')->insert($options);
	}

}
