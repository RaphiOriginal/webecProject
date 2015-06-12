<?php

use App\Event;
use App\Member;
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
		$this->call('MemberTableSeeder');
		$this->call('EventTableSeeder');
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

		DB::table('departments')->delete();

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
			'picture' => '//www.radiosaw.de/sites/default/files/galleriebilder/leichtathletik-team-em-braunschweig/Leichtathletik_Team_38679216.jpg'
			]);

		Department::create([
			'name' => 'Aerobic',
			'description' => 'Angeführt von Marcel Eberhart hat unser Areobic-Team schon mehrmals den Meistertitel gewonnen.\n Wir nehmen jährlich an diversen Wettkäpfen und Auftritten teil. Zusammen machen wir etwas gesundes für unseren Körper aber pflegen auch die Kameradschaft, die sehr wichtig ist im Teamsport.',
			'location' => 'MZH Welschenrohr',
			'straining_start' => '19:00:00',
			'training_day' => 'Mittwoch',
			'picture' => '//thenational.net/wp-content/uploads/2014/11/Aerobic-Exercise.jpg'
			]);
	}
}
class MemberTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('members')->delete();

		Member::create([
			'picture' => 'http://stuffpoint.com/trollface/image/38528-trollface-trol-d.jpg',
			'name' => 'Brunner',
			'prename' => 'Raphael',
			'password' => '1234',
			'stv_number' => '123-123-123',
			'email' => 'raphael.brunner3@students.fhnw.ch',
			'adress' => 'Sollmatt 74',
			'PLZ' => 4716,
			'location' => 'Welschenrohr',
			'is_admin' => 1
			]);

		Member::create([
			'picture' => 'http://stuffpoint.com/trollface/image/38528-trollface-trol-d.jpg',
			'name' => 'De Spindler',
			'prename' => 'Alexandre',
			'password' => '1234',
			'stv_number' => '999-999-999',
			'email' => 'alexandre.despindler@fhnw.ch',
			'adress' => 'Dozentenstrasse 1',
			'PLZ' => 8200,
			'location' => 'Schaffhausen',
			'is_admin' => 1
			]);

		DB::table('department_member')->delete();

		DB::table('department_member')->insert(
			['department_id' => 1, 'member_id' => 1]
			);
	}
}
class EventTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('events')->delete();

		Event::create([
			'picture' => 'http://www.tvwelschenrohr.ch/wordpress/wp-content/uploads/2014/10/Nimmerland-Flyer-5.jpg',
			'name' => 'Turnerunterhaltung',
			'location' => 'MZH Welschenrohr',
			'description' => 'Spass mit der Ganzen Familie. Jede Abteilung des Turnvereines präsentiert einen oder mehrere Reigen und das ganze wird umrahmt mit einem lustigen Theaterstück.',
			'startdate' => '2016-11-12 20:15',
			'amount' => 25
			]);

		DB::table('department_event')->delete();

		DB::table('department_event')->insert(
			[['department_id' => 1, 'event_id' => 1],
			['department_id' => 2, 'event_id' => 1],
			['department_id' => 3, 'event_id' => 1]]
			);

		DB::table('event_member')->delete();

		DB::table('event_member')->insert(
			['event_id' => 1, 'member_id' => 1]
			);

		DB::table('items')->delete();
		DB::table('items')->insert(
			[['event_id' => 1, 'item' => 'Schlafsack'],
			['event_id' => 1, 'item' => 'Vereinstrikot'],
			['event_id' => 1, 'item' => 'Ausweis'],
			['event_id' => 1, 'item' => 'Sportschuhe']]
			);
	}
}
