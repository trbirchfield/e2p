<?php

use App\Models\Section;
use Illuminate\Database\Seeder;
use Symfony\Component\DomCrawler\Crawler;

class SectionsSeeder extends Seeder {
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
		// Init values
		$section_titles = require dirname(__FILE__) . '/SeederData/section_titles.php';

		foreach ($section_titles as $section => $title) {
			$data = [
				'section' => substr($section, 0, 1),
				'subsection' => substr($section, 0, -1)
			];
			// Grab each section's view file path
			$view = view('client::section.' . str_replace('.', '_', $section), $data)->renderSections();

			// Grab Indexed Content
			$crawler     = new Crawler($view['content']);
			$node_values = $crawler->filter('.wlion-index')->each(function (Crawler $node, $i) {
				return $node->text();
			});

			// save content var to DB
			Section::create([
				'section'       => $section,
				'title'         => $title,
				'body'          => implode('', $node_values)
			]);
			$this->command->info('Seeded Section: ' . $section);
		}
	}
}
