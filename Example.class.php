<?php

class Example {

	private $testing;

	// Public
	public function __construct() {
		$testing = $this->getUsername();
	}

	// Private
	private function getUsername() {
		return "example@test.com";
	}

}

?>
