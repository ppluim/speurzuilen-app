<?php

class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('questions')->truncate();

		$questions = array(
			[
				'id' => '1',
				'page_id' => '1',
				'title'	=> 'Wat is er speciaal aan de planten in een moestuin?',
				'description' => 'Hoi Speurneuzen! Ik ben Prins. Wij gaan samen door het G.J. van Heekpark speuren. Dit is het begin van de speurtocht. In dit huis woonde vroeger een tuinman. Er was ook een moestuin. We komen aan het einde terug bij de speeltuin hoor!'
			],
			[
				'id' => '2',
				'page_id' => '2',
				'title'	=> 'Hoe worden jonge schapen genoemd?',
				'description' => 'Je staat nu bij de dierenweiden. Hier staan de schapen en in de andere weide mogen honden spelen. Schapen zijn voor mensen heel handig, bijvoorbeeld voor wol. Ook zijn ze graag samen met andere schapen. Een groep schapen heet een kudde.'
			],
			[
				'id' => '3',
				'page_id' => '3',
				'title'	=> 'Hoe worden jonge schapen genoemd?',
				'description' => 'Je staat nu bij de dierenweiden. Hier staan de schapen en in de andere weide mogen honden spelen. Schapen zijn voor mensen heel handig, bijvoorbeeld voor wol. Ook zijn ze graag samen met andere schapen. Een groep schapen heet een kudde.'
			]
		);

		// Uncomment the below to run the seeder
		DB::table('questions')->insert($questions);
	}

}
