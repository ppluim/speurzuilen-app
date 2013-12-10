<?php

class PagesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('pages')->truncate();

		$pages = array(
			[
				'id' => '1',
				'title' => 'Schenkerij Wattez',
				'color' => 'yellow',
				'wander_main_text' => 'Het gebouw van de Schenkerij Wattez was oorspronkelijk de tuinmanswoning voor de buitenplaats van de familie Roessingh. De buitenplaats werd later het Van Lochemsbleekpark.',
				'wander_tour_text' => 'Loop nu naar de weide met de schapen, daar staat het volgende paaltje.'
			],
			[
				'id' => '2',
				'title' => 'Dierenweiden',
				'color' => 'purple',
				'wander_main_text' => 'Aan de kant van de Hengelosestraat liggen de twee dierenweiden. De weiden bieden een stukje natuur voor iedereen die langs het G.J. van Heekpark komt.',
				'wander_tour_text' => 'Ga een stukje terug over het pad en loop rechtdoor voorbij de speeltuin, het woonhuis en het water. Bij de boom en het bankje staat het volgende paaltje.'
			],
		);

		// Uncomment the below to run the seeder
		DB::table('pages')->insert($pages);
	}

}
