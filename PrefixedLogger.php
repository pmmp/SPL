<?php

/*
 * PocketMine Standard PHP Library
 * Copyright (C) 2019 PMMP Team <https://github.com/pmmp/PocketMine-SPL>
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

class PrefixedLogger extends SimpleLogger{

	/** @var Logger */
	private $delegate;
	/** @var string */
	private $prefix;

	public function __construct(\Logger $delegate, string $prefix){
		$this->delegate = $delegate;
		$this->prefix = $prefix;
	}

	public function log($level, $message){
		$this->delegate->log($level, "[$this->prefix] $message");
	}

	public function logException(Throwable $e, $trace = null){
		$this->delegate->logException($e, $trace);
	}

	/**
	 * @return string
	 */
	public function getPrefix() : string{
		return $this->prefix;
	}

	/**
	 * @param string $prefix
	 */
	public function setPrefix(string $prefix) : void{
		$this->prefix = $prefix;
	}
}
