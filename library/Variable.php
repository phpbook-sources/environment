<?php namespace PHPBook\Environment;

abstract class Variable {

	private static $assigns = [];

	private static $prefix = '';
    
    public static function assign(String $name, $value) {

		Static::$assigns[$name] = $value;
		
	}

	public static function prefix(?String $prefix = null) {

		if ($prefix === null) {

			return Static::$prefix; 
		}

		Static::$prefix = $prefix;
		
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

			$value = getenv(Static::$prefix . $name);

			$item = new Variable\Item;
			
			$item->setName($name);

			$item->setDescription(Static::$assigns[$name]);

			if ($value) {
				$item->setValue($value);
			};

			return $item;

		};		
		
		return null;

	}

}
