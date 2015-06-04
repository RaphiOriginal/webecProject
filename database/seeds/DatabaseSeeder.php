<?php

use App\Department;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		$this->call('DepartmentTableSeeder');
	}

}

class DepartmentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Department::create([
			'name' => 'Korbball',
			'description' => 'Unser Korbballteam spielt in den Regionalen Meisterschaften in der 1. Liga und spielt immer erfolgreich in den vorderen Rängen mit.\n Mit viel Spass und hartem Training gehen wir jährlich die Sommer und Wintermeisterschaft an. Zusammen machen wir etwas gesundes für unseren Körper aber pflegen auch die Kameradschaft, die sehr wichtig ist im Teamsport.',
			'location' => 'Alte Turnhalle Welschenrohr',
			'straining_start' => '20:00:00',
			'training_day' => 'Mittwoch',
			'picture' => '//www.stvstuesslingen.ch/wordpress/wp-content/uploads/2013/05/2013_korbball_start2.jpg'
			]);

		Department::create([
			'name' => 'Leichtathletik',
			'description' => 'Unser Leichtathletikteam ist weit bekannt für unsere erfolgreichen Läufer.\n Wir nehmen jährlich an diversen Wettkäpfen und Läufen teil. Zusammen machen wir etwas gesundes für unseren Körper aber pflegen auch die Kameradschaft, die sehr wichtig ist im Teamsport.',
			'location' => 'Sportplatz Welschenrohr',
			'straining_start' => '19:00:00',
			'training_day' => 'Dienstag',
			'picture' => 'http://www.radiosaw.de/sites/default/files/galleriebilder/leichtathletik-team-em-braunschweig/Leichtathletik_Team_38679216.jpg'
			]);

		Department::create([
			'name' => 'Aerobic',
			'description' => 'Angeführt von Marcel Eberhart hat unser Areobic-Team schon mehrmals den Meistertitel gewonnen.\n Wir nehmen jährlich an diversen Wettkäpfen und Auftritten teil. Zusammen machen wir etwas gesundes für unseren Körper aber pflegen auch die Kameradschaft, die sehr wichtig ist im Teamsport.',
			'location' => 'MZH Welschenrohr',
			'straining_start' => '19:00:00',
			'training_day' => 'Mittwoch',
			'picture' => 'http://thenational.net/wp-content/uploads/2014/11/Aerobic-Exercise.jpg'
			]);
	}

}
