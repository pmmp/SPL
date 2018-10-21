<?php

/*
 * PocketMine Standard PHP Library
 * Copyright (C) 2018 PocketMine Team <https://github.com/pmmp/PocketMine-SPL>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
*/


declare(strict_types=1);

/**
 * Global accessor for logger
 */
final class GlobalLogger{

	private function __construct(){
		//NOOP
	}

	/** @var \Logger|null */
	private static $logger = null;

	public static function get() : \Logger{
		if(self::$logger === null){
			self::$logger = new SimpleLogger();
		}
		return self::$logger;
	}

	public static function set(\Logger $logger) : void{
		self::$logger = $logger;
	}
}
