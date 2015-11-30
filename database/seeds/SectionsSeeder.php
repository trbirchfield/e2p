<?php

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder {
	/**
	 * Section Views to seed
	 * 
	 * @var array section - last section to stop
	 */
	public $sections = [
		'1' => 4,
		'2' => 10,
		'3' => 4,
		'4' => 3,
		'5' => 5
	];

	/**
	 * Path to Section views
	 *
	 * @var string
	 */
	public $view_path = '/resources/client/views/section/';

	/**
	 * Seed the sections table.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('sections')->truncate();

		// Init loop to save all section content in DB.
		foreach ($this->sections as $section => $sub) {
			// Init values
			$section_titles = require dirname(__FILE__) . '/SeederData/section_titles.php';

			// Initi loop to save all sub sections
			for ($i = 0; $i < $sub ; $i++) {
				// Section id
				// Ex: 1.0, 1.1, 1.2...etc
				$section_id = $section . '.' . $i;

				// Grab each section's view file path
				$view = view('client::section.' . $section . '_' . $i)->renderSections();

				// Strip tags to retieve only the content
				$title   = $section_titles[$section_id];
				$content = strip_tags(str_replace(["\r", "\n"], '', $view['content']));
				
				// save content var to DB
				Section::create([
					'section'       => $section_id,
					'title'         => $title,
					'body'          => $content
				]);
			}
			$this->command->info('Seeded Section: ' . $section);
		}
	}
}
