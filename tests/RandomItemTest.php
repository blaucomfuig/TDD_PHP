<?php

namespace Tests;


use App\RandomItem;
use App\Person;
use  PHPUnit\Framework\TestCase;


class RandomItemTest extends TestCase {

	public function testReturnSameIdOfArrayThanRandomId(
	) {
		$lista = array(array("name" => "Andrea",
		"id" => 0), array("name" => "Joan",
		"id" => 1), array("name" => "Berta",
		"id" => 2),array("name" => "Gabriela",
		"id" => 3), array("name" => "Thierno",
		"id" => 4) );
		
		$random = new RandomItem();

		$result_1 = $random -> execute($lista);
		$result_2 = $random -> execute($lista);

		$this -> assertEquals("true", $result_1);
		$this -> assertEquals("true", $result_2);
	}

	public function testWhenAgressorAttacksVictimSheLoses5OfHealth(
	) {
		$agressor = new Person();
		$victim = new Person();

		$health = $victim -> execute($victim);

		$this -> assertEquals(95, $health);
	}
}


?>