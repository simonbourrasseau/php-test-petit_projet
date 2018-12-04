<?php

class person {
	private $firstname;
	private $lastname;

	public function __construct($pFirstname, $pLastname) {
		$this->firstname = $pFirstname;
		$this->lastname = $pLastname;
	}

	public function speak() { } 
}

class dog {
	private $name;
}

$person = new person("Jhon", "Doe");
var_dump($person);

$dog = new dog ("johnny");
var_dump($dog);