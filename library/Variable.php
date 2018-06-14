<?php namespace PHPBook\Environment;

abstract class Variable {

	private static $assigns = [];
    
    public static function assign(String $name, $value) {

		Static::$assigns[$name] = $value;
		
	}

	public static function list(): Array {

		$list = [];

		foreach(Static::$assigns as $name => $description) {

			$list[] = Static::get($name);

		};

		return $list;

	}
	
	public static function get(String $name): ?Variable\Item {

		if (array_key_exists($name, Static::$assigns)) {

			$item = new Variable\Item;
			$item->setName($name);
			$item->setDescription(Static::$assigns[$name]);
			$item->setValue((string) getenv($name));

			return $item;

		};		
		
		return null;

	}

}
